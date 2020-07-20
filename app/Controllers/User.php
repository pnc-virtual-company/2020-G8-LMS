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
				'email' => 'required|valid_email',
				'password' => 'required|validateUser[email,password]'
			];
			$error = [
				'password' => [
					'validateUser' => 'incorrect  please check again !'
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
			'id' => $user['user_id'],
			'firstname' => $user['firstname'],
			'lastname' => $user['lastname'],
			'email' => $user['email'],
			'password' => $user['password'],
			'role' => $user['role'],
			'start_date' => $user['start_date'],
			'profile' => $user['profile']
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

}
