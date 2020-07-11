<?php namespace App\Controllers;
use App\Models\PizzaModel;
class Departments extends BaseController
{
	public function index()
	{
		return view('department/index');
	}

}
