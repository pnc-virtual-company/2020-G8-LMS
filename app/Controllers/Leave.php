<?php namespace App\Controllers;
use App\Models\YourLeaveModel;
use App\Models\UserModel;
class Leave extends BaseController
{
	// public function showSummitedleaves()
	// {
	// 	return view('leaves/leaveRequest');
	// }
	protected  $yourLeaveRequest;
	
	public function __construct() 
	{
		$this->yourLeaveRequest = new YourLeaveModel();
	}

	public function showSummitedleaves()
	{
		$data = [
			'yourLeaveData' => $this->yourLeaveRequest->getAllYourLeave(),
		];
		if(!session()->get('isLoggedIn')){
			redirect()->to('/');
	}
	return view('leaves/leaveRequest', $data); 
    
	//--------------------------------------------------------------------
	}
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
			$username = strstr(session()->get('email'),'@',true);
			$from = $username.strstr(session()->get('email'),'@',false);
			$to = "kalleata464@gmail.com";
         	$subject = "CodeIgniter 4 send email to you";
			$message ='<div class="container mt-5">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
				<h1>Leave Request</h1>
					<p>Dear Ronan ORGO,</p>
					<p>The time off you requested has been approved</p>
					<div class="container">
						<div class="row">
							<div class="col-2"></div>
							<div class="col-8">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>From</th>
											<th>06/19/2020</th>
										   
										
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>To</td>
											<td>06/16/2020</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>Sick leave for staff</td>
										</tr>
										<tr>
											<td>Reason</td>
											<td>sick</td>
										</tr>
										<tr>
											<td>Last comment</td>
											<td></td>
											
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-2"></div>
						</div>
					</div>
				</div>
				<div class="col-2"></div>
			</div>
			</div>';
			$email = \Config\Services::email();
			 $email->setTo($to);
         	$email->setFrom('karunaalleata@gmail.com','information');
         	$email->setSubject($subject);
         	$email->setMessage($message);
         if($email->send()){
			return redirect()->to('/leave');
         }else{
             echo 'can not return back';;
         }
		}	
	}
	//--------------------------------------------------------------------
}
