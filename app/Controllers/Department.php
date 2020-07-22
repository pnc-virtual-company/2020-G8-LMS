<?php namespace App\Controllers;
use App\Models\DepartmentModel;
class Department extends BaseController
{
	//Departments List
	protected $department;

	public function __construct() 
    {
        $this->department = new DepartmentModel();
    }
	public function index()
	{
		$data = [
            'departmentData' => $this->department->getAllSubject(),
            "copy" => "@copyright By Dy Dy"
        ];
		return view('department/index', $data);
	}
	
	//function create department
	public function addDepartment()
	{	
		$department = $this->request->getVar('department_name');
        $data = array(
            'department_name' => $department
        );
        $this->department->insert($data);
        return redirect()->to("/department");
	}

	// //Function edit departments
	// public function editDepartment($id)
	// {	
	// 	$department = new DepartmentModel();
	// 	$data['edit']= $department->find($id);
	// 	return view('index',$data);
	// }

	//Function update departments
   	public function updateDepartment()
	{	
		$Id = $this->request->getVar('id');
        $department = $this->request->getVar('department_name');
        $data = array(
            'department_name' => $department
        );
		$this->department->update($Id, $data);
		var_dump($data);
        return redirect()->to('/department');
	}

	//Function delete departments

	public function deleteDepartment($id)
	{	
		$this->department->delete($id);
        return redirect()->to('/department');
	}

}
