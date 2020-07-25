<?php namespace App\Controllers;
use App\Models\PositionModel;

class Position extends BaseController
{

	protected $position;

    public function __construct() 
    {
        $this->position = new PositionModel();
    }
    
	public function position()
	{
        $data = [
            'positionData' => $this->position->getAllPosition(),
        ];
		return view('positions', $data);
	}


	public function index()
	{
		return view('position/index');
	}

	// add new position
	public function addPosition()
	{	
	
       //code
	}
    // edit position
	public function editPosition()
	{
     //codes
	}
	// delete position
	public function deletePosition()
	{
         // code
	}
}
