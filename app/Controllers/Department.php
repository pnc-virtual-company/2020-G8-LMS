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
            'departmentData' => $this->department->getAllDepartments(),
            "copy" => "@copyright By Hy Hy"
        ];
		return view('department/index', $data);
	}
	
	//function create department
	public function addDepartment()
	{	
		$data = [];
		if($this->request->getMethod() == "post"){
			helper(['form']);
			$rules = [
				'dname'=> [
					'rules'=> 'required|is_unique[department.dname]',
					'errors'=> [
						'required'=> 'Sorry, department field is required',
						'is_unique' => 'This department name already exists',
						]
					],
				];

				if($this->validate($rules)){
					$department = $this->request->getVar('dname');
					$data = array(
					'dname' => $department
					);
					$this->department->insert($data);
					return redirect()->to(base_url('/department'));
				}else{
				$data['validation'] = $this->validator;
				$sessionError = session();
				$validation = $this->validator;
				$sessionError->setFlashdata('error', $validation);
				return redirect()->to(base_url('/department'));
				}
				
			}
	}

	//Function update departments
   	public function updateDepartment()
	{	
		$data = [];
		if($this->request->getMethod() == "post"){
			helper(['form']);
			$rules = [
				'dname'=> [
					'rules'=> 'required|is_unique[department.dname]',
					'errors'=> [
						'required'=> 'Data is empty !!',
						'is_unique' => 'This name has already!',
						]
					],
				];

				if($this->validate($rules)){
					$Id = $this->request->getVar('d_id');
					$department = $this->request->getVar('dname');
					$data = array(
						'dname' => $department,
					);
					$this->department->update($Id, $data);
					return redirect()->to(base_url('/department'));
				}else{
					$data['validation'] = $this->validator;
					$sessionError = session();
					$validation = $this->validator;
					$sessionError->setFlashdata('error', $validation);
					return redirect()->to(base_url('/department'));
				}
		}
	}

	//Function delete departments

	public function deleteDepartment($id)
	{	
		$this->department->delete($id);
        return redirect()->to(base_url('/department'));
	}

}