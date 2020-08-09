<?php namespace App\Controllers;
use App\Models\PositionModel;
class Position extends BaseController
{
	//Departments List
	protected $position;

	public function __construct() 
    {
        $this->position = new PositionModel();
    }
	public function index()
	{
		$data = [
            'positionData' => $this->position->getAllPositions(),
            "copy" => "@copyright by karuna"
        ];
		return view('position/index', $data);
	}
	
	//function create department
	public function addPosition()
	{	
		$data = [];
		if($this->request->getMethod() == "post"){
			helper(['form']);
			$rules = [
				'pname'=> [
					'rules'=> 'required|is_unique[position.pname]',
					'errors'=> [
						'required'=> 'Sorry, position field is required',
						'is_unique' => 'This position name already exists.',
						]
					],
				];
			
				if($this->validate($rules)){
					$position = $this->request->getVar('pname');
					$data = array(
					'pname' => $position
					);
					$this->position->insert($data);
					return redirect()->to('/position');
				}else{
				$data['validation'] = $this->validator;
				$sessionError = session();
				$validation = $this->validator;
				$sessionError->setFlashdata('error', $validation);
				return redirect()->to('/position');
				}
				
			 }
	}
	//Function update departments
	public function updatePosition()
	{	
		$data = [];
		if($this->request->getMethod() == "post"){
			helper(['form']);
			$rules = [
				'pname'=> [
					'rules'=> 'required|is_unique[position.pname]',
					'errors'=> [
						'required'=> 'Sorry, position field is required',
						'is_unique' => 'This position name already exists.',
						]
					],
				];
				if($this->validate($rules)){
					$Id = $this->request->getVar('p_id');
        			$position = $this->request->getVar('pname');
        			$data = array(
            		'pname' => $position
        			);
					$this->position->update($Id, $data);
					var_dump($data);
        			return redirect()->to('/position');
				}else{
					$data['validation'] = $this->validator;
					$sessionError = session();
					$validation = $this->validator;
					$sessionError->setFlashdata('error', $validation);
			return redirect()->to('/position');
			}
	}
}
		
	//Function delete position

	public function deletePosition($id)
	{	
		$this->position->delete($id);
        return redirect()->to('/position');
	}

}