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
    
    //Show user or employee
	public function showUser()
	{
        $data = [
            'userData' => $this->user->getUserInfo(),
            "positionData" => $this->positions->getAllPositions(),
            "departmentData" => $this->departments->getAllDepartments(),
            
        ];
		return view('employees/index', $data);
	}

    //Create Employee
	public function createUser() 
    {
        $data = [];
		if($this->request->getMethod() == "post"){
		helper(['form']);
		$rules = [
                'firstName' => [
                    'rules' => 'required',
                    'errors'=>[
                        'required'=> 'The firstname name field is required.',
                    ] 
                ],
                'lastName' => [
                    'rules' => 'required',
                    'errors'=>[
                        'required'=> 'The lastName name field is required.',
                    ] 
                ],
                'email' => [
                    'rules' => 'required|is_unique[user.email]',
                    'errors'=>[
                        'required'=> 'The email name field is required.',
                        'is_unique' => 'The email already exists.',
                    ] 
                ],
                
                'position' => [
                    'rules' => 'required',
                    'errors'=>[
                        'required'=> 'The position name field is required.',
                    ] 
                ],
                'department' => [
                    'rules' => 'required',
                    'errors'=>[
                        'required'=> 'The department name field is required.',
                    ] 
                ],
                'startDate' => [
                    'rules' => 'required',
                    'errors'=>[
                        'required'=> 'The startdate name field is required.',
                    ] 
                ],
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
				$manager = $this->request->getVar('manager');
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
                'department_id' => $department,
                'manager' => $manager
			);
		$this->user->registerUser($employeeData);
		$sessionSuccess = session();
		$sessionSuccess->setFlashdata('success','Successful insert employee!');
		}else{
		$sessionError = session();
		$validation = $this->validator;
		$sessionError->setFlashdata('error', $validation);
		}
		}
		return redirect()->to(base_url('/employees'));
		}

    //Update Employee    
    public function updateEmployee() 
    {
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == "post"){

            //set rules 
            $rules = [
                'email'=>'required|valid_email|min_length[6]|max_length[50]',
            ];

            
        //validate fill of employee    
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
                $manager = $this->request->getVar('manager');

                $employeeData = array(
                    'firstName'=>$firstname,
                    'lastName'=>$lastname,
                    'email'=>$email,
                    'position_id' => $position, 
                    'department_id' => $department,
                    'manager' => $manager,
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
        return redirect()->to(base_url("/employees"));
    }

    //Delete Employee 
    public function deleteEmployee($id){
        $employee = new UserModel();
        $employee->delete($id);
        return redirect()->to(base_url('/employees'));
    }

	//--------------------------------------------------------------------

}
