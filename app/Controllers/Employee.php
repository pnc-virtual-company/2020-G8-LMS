<?php namespace App\Controllers;
use App\Models\UserModel;
use App\Models\DepartmentModel;
use App\Models\PositionModel;

class Employee extends BaseController
{
	
    protected $user;
    protected $departments;
    protected $positions;

    public function __construct() 
    {
        $this->user = new UserModel();
        $this->positions = new PositionModel();
        $this->departments = new DepartmentModel();
    }
    
	public function showUser()
	{
        $data = [
            'userData' => $this->user->getUserInfo(),
            "positionData" => $this->positions->getAllPosition(),
            "departmentData" => $this->departments->getAllDepartment(),
            
        ];
		return view('employees/index', $data);
	}

	public function createUser() 
    {
        $data = [];
		if($this->request->getMethod() == "post"){
		helper(['form']);
		$rules = [
		'firstName'=>'required|min_length[3]|max_length[20]|alpha',
		'lastName'=>'required|min_length[3]|max_length[20]|alpha',
		'email'=>'required|valid_email|min_length[6]|max_length[50]',
		'password'=>'required|min_length[8]|max_length[225]',
		];

		if($this->validate($rules)){

				$firstname = $this->request->getVar('firstName');
				$lastname = $this->request->getVar('lastName');
				$start_date = $this->request->getVar('startDate');
				$file = $this->request->getFile('profile');
				$email= $this->request->getVar('email');
				$password = $this->request->getVar('password');
				$role = $this->request->getVar('role');
				$department = $this->request->getVar('department');
				$position = $this->request->getVar('position');
                $employeeProfile= $file->getRandomName();
                
			$employeeData = array(
				'firstName'=>$firstname,
				'lastName'=>$lastname,
				'startDate'=>$start_date,
				'profile'=>$employeeProfile,
				'email'=>$email,
				'password'=>$password,
				'role'=>$role,
				'position_id' => $position,
				'department_id' => $department
			);
		$this->user->insert($employeeData);
		$sessionSuccess = session();
		$sessionSuccess->setFlashdata('success','Successful insert employee!');
		}else{
		$sessionError = session();
		$validation = $this->validator;
		$sessionError->setFlashdata('error', $validation);
		}
		}
		return redirect()->to('/employee');
		}
     
        
    public function updateEmployee() 
    {
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == "post"){
            $rules = [
            
                'email'=>'required|valid_email|min_length[6]|max_length[50]',
        
            ];

         if($this->validate($rules)){
                $id = $this->request->getVar('u_id');
                $firstname = $this->request->getVar('firstName');
                $lastname = $this->request->getVar('lastName');
                $start_date = $this->request->getVar('startDate');
                $email= $this->request->getVar('email');
                $password = $this->request->getVar('password');
                $role = $this->request->getVar('role');
                $department = $this->request->getVar('department');
                $position = $this->request->getVar('position');

                $employeeData = array(
                    'firstName'=>$firstname,
                    'lastName'=>$lastname,
                    'email'=>$email,
                    'position_id' => $position, 
                    'department_id' => $department,
                );
                        $this->user->update($id, $employeeData);
                        $sessionSuccess = session();
                        $sessionSuccess->setFlashdata('success','Successful update employee!');
                    }else{
                        $sessionError = session();
                        $validation = $this->validator;
                        $sessionError->setFlashdata('error', $validation);
                    }
                }
        return redirect()->to("/employee");
    }





    public function deleteEmployee($id){
        $employee = new UserModel();
        $employee->delete($id);
        return redirect()->to('/employee');
    }

	//--------------------------------------------------------------------

}