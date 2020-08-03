<?php namespace App\Controllers;
use App\Models\YourLeaveModel;
class Your_leave extends BaseController
{

	protected  $yourLeave;
	
	public function __construct() 
	{
		$this->yourLeave = new YourLeaveModel();
	}

	public function yourLeaveList()
	{
		$data = [
			'yourLeaveData' => $this->yourLeave->getAllYourLeave(),
		];
		// if(!session()->get('isLoggedIn')){
		// 	redirect()->to('/');
	// }
	return view('your_leaves/your_leaves', $data);	 
    
	//--------------------------------------------------------------------
	}
	
	// how to create new leave request
	public function createYourLeave()
	{
		$data = [];
		helper(['form']);
		if($this->request->getMethod() == "post"){
			$startDate = $this->request->getVar('startDate');
			$endDate = $this->request->getVar('endDate');
			$time = $this->request->getVar('time');
			$duration = $this->request->getVar('duration');
			$leave_type = $this->request->getVar('leave_type');
			$status = $this->request->getVar('status');
			$comment = $this->request->getVar('comment');
			$yourLeaveData = array(
				'startDate'=>$startDate,
				'endDate'=>$endDate,
				'time'=>$time,
				'duration'=>$duration,
				'leave_type'=>$leave_type,
				'status'=>$status,
				'comment'=>$comment,
			);
			$this->yourLeave->insert($yourLeaveData);
		}	
		
		return redirect()->to('/your_leave');
	}

	// Delete leave request of employee
	public function deleteLeaveRequest($id)
	{
		$leaveRequest = new YourLeaveModel();
       	$leaveRequest->delete($id);
       	return redirect()->to('/your_leave');
	}
	
}
