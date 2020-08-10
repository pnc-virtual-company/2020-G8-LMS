<?php namespace App\Controllers;

class Email extends BaseController
{
	public function showEmail()
	{
		$to = "karunaalleata@gmail.com";
         $subject = "CodeIgniter 4 send email to you";
        
         $message = '<fieldset style="border:1px dotted teal;">
         Dear Karuna,<br><br> 
         thank you for your informaition. <br><br>
		 <a href ="'.base_url('/position').'"style ="padding:5px 20px 5px 20px; background:orange; color:white; 
		 text-decoration:none; border-radius:40px">confirm</a>
         <br><br>
         Best Regards,<br><br>
         Codeigniter 4
		 </fieldset>';
		 $email = \Config\Services::email();
         $email->setTo($to);
         $email->setFrom('kalleata464@gmail.com','information');
         $email->setSubject($subject);
         $email->setMessage( $message);
         if($email->send()){
             return view('email/email');
         }else{
             echo "can not";
         }
	}
    public function showEmailVeryfy()
	{
		return 'Email account actived';
	}
	public function showEmailback()
	{
		return view('emailback/emailsendback');
	}
	

	//--------------------------------------------------------------------

}
