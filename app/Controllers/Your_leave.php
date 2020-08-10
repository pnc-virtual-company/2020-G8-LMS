<?php namespace App\Controllers;
use App\Models\YourLeaveModel;
use App\Models\UserModel;
class Your_leave extends BaseController
{
// store Model in variable for use database 
	protected  $yourLeaveRequest;
	
	public function __construct() 
	{
		$this->yourLeaveRequest = new YourLeaveModel();
	}
	//set role Manager Hr Admin and user nomal
	public function yourLeaveList()
	{
		
		if(session('role') == 'Admin' || session('role') == 'HR' || session('role') == 'Manager') {
			$data = [
				'yourLeaveData' => $this->yourLeaveRequest->managerGetAll(),
				
			];
		}else {
			$data = [
				'yourLeaveData' => $this->yourLeaveRequest->getAllYourLeave(),
			];
		}
		if(!session()->get('isLoggedIn')){	
		redirect()->to(base_url('/'));
	}
	return view('your_leaves/your_leaves', $data);	 
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
			$user = session()->get('id');
			// Get all name in database
			$yourLeaveData = array(
				'startDate'=>$startDate,
				'exactime_start'=>$exactime_start,
				'endDate'=>$endDate,
				'exactime_end'=>$exactime_end,
				'duration'=>$duration,
				'leave_type'=>$leaveType,
				'comment'=>$comment,
				'user_id'=>$user,
			);
			$this->yourLeaveRequest->insert($yourLeaveData);
			// send mail to other user
			$username = strstr(session()->get('email'),'@',true);
			$from = $username.strstr(session()->get('email'),'@',false);
			$to = "karunaalleata@gmail.com";
         	$subject = "CodeIgniter 4 send email to you";
			$message ='
			<fieldset style="border:1px dotted teal;">
						<div style="border-style: solid; width:80%;" id="emails" name="emails">
							<div class="container" style="width:90%; margin:0 outo; margin-top: 10px; display:flex;">
								<div class="col-6" style="width:46%; margin-left:30px;">
									<p>From: '.$from.'  </p>
									<p>To: karunaalleata@gmail.com </p>
									<p>Subject: New leave request assigned to you</p>
								</div>
								<div class="col-6" style="width:46%; margin-left:30px;">
									<a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTs61yAjqutCtaLuEtugjwIyy_G7LRd35_OrA&usqp=CAU" style="width:50px; margin-left: 260px;"  alt=""></a>
								</div>
							</div>
							<hr>
						   <div class="infomation">
							   <p style="margin-left:20px;"> Dear Jack Thomas,</p>
							   <p style="margin-left:20px;">Employee '.$username.' has submited the following request for approval:</p>
								   <div class="card p-3 bg-light ml-5" style="width: 700px">
								   <div class="row-body" style="width:80%; margin:0 auto; border: 2px solid rgb(43, 42, 42); background-color: rgb(201, 198, 198); display: flex;">
						 
								   <div class="col1-6" style="width:40%; padding:10px; margin-left:30px;">
										   <p><strong>Start date </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$yourLeaveData['startDate'].'('.$yourLeaveData['exactime_start'].')</p>
										   <p><strong>Emd date </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$yourLeaveData['endDate'].'('.$yourLeaveData['exactime_end'].')</p>
										   <p><strong>Duration </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$yourLeaveData['duration'].'</p>
										   <p><strong>Leave type </strong> &nbsp;&nbsp;&nbsp;&nbsp;'.$yourLeaveData['leave_type'].'</p>
									   </div>
			
									   <div class="col2-6" style="	width:40%; padding:10px; margin-left:30px;">
										   <p><strong>Comment </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$yourLeaveData['comment'].'</p>
										   <p><strong>Employee </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$username.'</p>
										   <p><strong>Staus </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requested</p>
									   </div>   
								   </div>
							   </div>
						   </div>
						  
						   <p style="margin-left: 20px;">Can you please <a href="createYourLeave" name="accept" id="accept" onclick="acceptFunction()">ACCEPT</a> OR <a href="createYourLeave" name="reject" id="reject" onclick="rejectFunction()">REJECT</a>
						   this leave request you can also access to <a href="http://localhost:8080/leave">leave request details </a>to review this request</p>
						   <p style="margin-left: 20px;">Thank & regard,</p>
						   <p style="margin-left: 20px;"><strong>'.$username.'</strong> </p>
						   </div>
						   </div>
						</fieldset>
						<a href="#" class="dropdown-toggle text-white nav-link " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >
						</a>
						';
			$email = \Config\Services::email();
			$email->setTo($to);
			$email->setCC('karuna.alleat@student.passerellesnumeriques.org');
         	$email->setFrom('kalleata464@gmail.com','information');
         	$email->setSubject($subject);
         	$email->setMessage($message);
         if($email->send()){
            return redirect()->to('/your_leave');
         }else{
             echo " can not send";
		 }
		}	
		return redirect()->to(base_url('/your_leave'));
	}
	// Delete leave request
	public function deleteLeaveRequest($id)
	{
		$leaveRequest = new YourLeaveModel();
       	$leaveRequest->delete($id);
       	return redirect()->to(base_url('/your_leave'));
	}
	
}