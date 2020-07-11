<?php namespace App\Controllers;
// use App\Models\DepartmentsModel;
class Departments extends BaseController
{
	//Departments List
	public function index()
	{
		return view('department/index');
	}

}
