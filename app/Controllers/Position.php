<?php namespace App\Controllers;
use App\Models\PizzaModel;
class Position extends BaseController
{
	// show list pizza
	public function index()
	{
		return view('position/index');
	}

	// add new position
	public function FormaddPosition()
	{	
	
        return view('position/createPosition');
	}
    // edit position
	public function FormeditPosition()
	{
        return view('position/editPosition');
	}
	// delete position
	public function deletePosition()
	{
         // code
	}
}
