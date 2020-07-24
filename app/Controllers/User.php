<?php namespace App\Controllers;
use App\Models\UserModel;
use App\Models\DepartmentModel;
use App\Models\PositionModel;

class User extends BaseController
{
	public function index()
	{
		return view('user/login');
	}

	protected $user;
    protected $department;
    protected $position;

    public function __construct() 
    {
        $this->user = new UserModel();
        $this->department = new DepartmentModel();
        $this->position = new PositionModel();
    }
    
	public function showUser()
	{
        $data = [
            'userData' => $this->user->getUserInfo(),
            "positionData" => $this->position->getAllPosition(),
            "departmentData" => $this->department->getAllDepartment(),
            
        ];
		return view('employees/index', $data);
	}

	public function createUser() 
    {
        $firstName = $this->request->getVar('firstName');
        $lastName = $this->request->getVar('lastName');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $position = $this->request->getVar('position');
        $department = $this->request->getVar('department');
        $startDate = $this->request->getVar('startDate');
        $data = array(
            "firstName" => $firstName,
            "lastName" => $lastName,
            "email" => $email,
            "password" => $password,
            "position_id" => $position,
            "department_id" => $department,
            "startDate" => $startDate,
        );
        if ($position != "" and $department != "") {
            $this->user->insert($data);
        } else { 
            // message error here with session 
        }
        return redirect()->to("/employee");
    }

    public function updateEmployee() 
    {
        $firstName = $this->request->getVar('firstName');
        $lastName = $this->request->getVar('lastName');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $position = $this->request->getVar('position');
        $department = $this->request->getVar('department');
        $startDate = $this->request->getVar('startDate');
        $data = array(
            "firstName" => $firstName,
            "lastName" => $lastName,
            "email" => $email,
            "password" => $password,
            "position_id" => $position,
            "department_id" => $department,
            "startDate" => $startDate,
        );
        if ($position != "" and $department != "") {
            $this->user->insert($data);
        } else { 
            // message error here with session 
        }
        return redirect()->to("/employee");
    }

    public function deleteEmployee($id){
        $employee = new UserModel();
        $employee->delete($id);
        // $employee->where
        // $data['employee'] = $employee->where('id',$id)->delete();
        return redirect()->to('/employee');
    }

	//--------------------------------------------------------------------

}
