<?php namespace App\Controllers;
use App\Models\UserModel;


class User extends BaseController
{
	public function index()
	{
		return view('users/login');
	}

	//--------------------------------------------------------------------

}
