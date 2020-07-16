<?php namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		return view('users/login');
	}
    public function logoutUser() 
	{
		// $this->session->sess_destroy();
		session()->destroy();
	 return redirect()->to('/');

	}

	//--------------------------------------------------------------------

}
