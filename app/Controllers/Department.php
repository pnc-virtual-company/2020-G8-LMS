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

	//Function edit departments
	public function editDepartment($id)
	{	
		$department = new DepartmentModel();
		$data['edit']= $department->find($id);
		return view('index',$data);
	}

	//Function update departments
   	public function updateDepartment()
	{	
		$department = new DepartmentModel();
		$department->update($_POST['id'],$_POST);
		return redirect()->to('/department');
	}

	//Function delete departments

	public function deleteDepartment($id)
	{	
		$department = new DepartmentModel();
		$department->delete($id);
		return redirect()->to('/department');
	}

}
