<?php namespace App\Controllers;
use App\Models\UserModel;
class User extends BaseController
{
	public function index()
	{
		helper(['form']);
		$data = [];
		if($this->request->getMethod() == "post"){
			$rules = [
				'email' => [
					'rules'=>'required|valid_email',
					'label'=>'Email address',
					'errors'=>[
						'required'=>'email not yet complete',
					],
				],
				'password' => [
					'rules'=>'required|validateUser[email,password]',
					'label'=>'Password ',
					'errors'=>[
						'required'=>' password not yet complete',
					],
				],
			];
			$error = [
				'password' => [
					'validateUser' => ' incorrect email or password !'
				]

			];
			$email = $this->request->getVar('email');
			if(!$this->validate($rules,$error)){
				$data['message'] = $this->validator;
				return view('users/login',$data);
			}else{
				$model = new UserModel();
				$user = $model->where('email',$email)->first();
				
				$this->setUserSession($user);
				return redirect()->to('/your_leave');
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
	
    public function logoutUser() 
	{
		session()->destroy();
	 return redirect()->to('/');

	}
	
    	//--------------------------------------------------------------------
    
	//--------------------------------------------------------------------

}
