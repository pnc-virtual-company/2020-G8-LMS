<?php namespace App\Controllers;

class Your_leave extends BaseController
{
	// protected $yourLeave;

	// public function __construct() 
    // {
    //     $this->yourLeave = new YourLeaveModel();
	// }
	
	public function yourLeave()
	{
		// $data = [
        //     'yourLeaveData' => $this->yourLeave->getAllSubject(),
        //     "copy" => "@copyright By Dy Dy"
        // ];
		return view('your_leaves/yourLeave', $data);
	}
// add your leave
	public function addYourLeave()
	{
		//code
	}
// edit your leave
	public function editYourLeave()
	{
		//code
	}
// delete your leave
	public function deleteYourLeave()
	{
		//code
	}
	//--------------------------------------------------------------------

}
