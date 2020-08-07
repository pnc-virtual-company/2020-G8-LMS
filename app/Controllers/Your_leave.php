<?php namespace App\Controllers;
use App\Models\YourLeaveModel;
class Your_leave extends BaseController
{

	protected  $yourLeaveRequest;
	
	public function __construct() 
	{
		$this->yourLeaveRequest = new YourLeaveModel();
	}

	public function yourLeaveList()
	{
		$data = [
			'yourLeaveData' => $this->yourLeaveRequest->getAllYourLeave(),
		];
		if(!session()->get('isLoggedIn')){
			redirect()->to('/');
	}
	return view('your_leaves/your_leaves', $data);	 
    
	//--------------------------------------------------------------------
	}
	
	// create new leave request
	public function createYourLeave()
	{
		$data = [];
		helper(['form']);
		if($this->request->getMethod() == "post"){
			$startDate = $this->request->getVar('startDate');
			$exactime_start = $this->request->getVar('exactime_start');
			$endDate = $this->request->getVar('endDate');
			$exactime_end = $this->request->getVar('exactime_end');
			$duration = $this->request->getVar('duration');
			$leaveType = $this->request->getVar('leave_type');
			$comment = $this->request->getVar('comment');
			$yourLeaveData = array(
				'startDate'=>$startDate,
				'exactime_start'=>$exactime_start,
				'endDate'=>$endDate,
				'exactime_end'=>$exactime_end,
				'duration'=>$duration,
				'leave_type'=>$leaveType,
				'comment'=>$comment,
			);
			$this->yourLeaveRequest->insert($yourLeaveData);
		}	
		
		return redirect()->to('/your_leave');
	}

	// Delete leave request
	public function deleteLeave($id)
	{
		$leaveRequest = new YourLeaveModel();
       	$leaveRequest->delete($id);
       	return redirect()->to('/your_leave');
	}
	
}
