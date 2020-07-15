<?php namespace App\Controllers;
use App\Models\DepartmentModel;
class Department extends BaseController
{
	//Departments List
	public function index()
	{
		$department = new DepartmentModel();
		$allDepartments['department'] = $department->findAll();
		return view('department/index',$allDepartments);
	}
	
	//function create departments
	public function addDepartment()
	{	
		helper(['form']);
		$data = [];

		if($this->request->getMethod() == "post"){

				$department = new DepartmentModel();
				$newData = [
					'department_name' => $this->request->getVar('department_name')
				];
				$department->save($newData);
				return redirect()->to('/department');
		}	
	}

	
}
