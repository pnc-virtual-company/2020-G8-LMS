<?php namespace App\Controllers;
use App\Models\UserModel;

class User extends BaseController
{
	// login user
	public function index()
	{
		helper(['form']);
		$data = [];
		if($this->request->getMethod() == "post"){
			$rules = [
				'email' => [
					'rules'=>'required|validateUser[email]',
					'label'=>'Email address',
					'errors'=>[
						'required'=>'email not yet complete',
						'validateUser' => ' incorrect email !',
						
					],
				],
				'password' => [
					'rules'=>'required|validateUser[password]',
					'label'=>'Password ',
					'errors'=>[
						'required'=>' password not yet complete',
						'validateUser' => ' incorrect password !',
					],
				],
			];
		
			$email = $this->request->getVar('email');
			if(!$this->validate($rules)){
				$data['message'] = $this->validator;
				return view('users/login',$data);
			}else{
				$model = new UserModel();
				$user = $model->where('email',$email)->first();
				
				$this->setUserSession($user);
				return redirect()->to(base_url('/your_leave'));
			}

		}
		return view('users/login');
		
	}

	public function setUserSession($user){
		$data = [
			'id' => $user['u_id'],
			'firstname' => $user['firstName'],
			'lastname' => $user['lastName'],
			'email' => $user['email'],
			'password' => $user['password'],
			'isLoggedIn' => true,
			
		];

		session()->set($data);
		return true;
	}	
// logout user
    public function logoutUser() 
	{
		session()->destroy();
	 return redirect()->to(base_url('/'));

	}
}
