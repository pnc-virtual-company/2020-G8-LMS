<?php namespace App\Controllers;
use App\Models\PositionModel;
class Position extends BaseController
{
	public function index()
	{
		$position = new PositionModel();
		$data['dataPosition'] =$position->findAll();
		return view('position/index', $data);
	}

	// add new position
	public function addPosition()
	{	
		$data = [];
		if($this->request->getMethod() == "post"){
			helper(['form']);
			$rules = [
				'title'=>'required|min_length[1]|max_length[50]',
			];
			$errors = [
				'title' => [
					'validateUser' => 'name,ingredient or price don\'t match'
				]
				];
				$position = new PositionModel();
				$positionTitle = $this->request->getVar('title');
				$positionData = array(
					'title'=>$positionTitle,
				);
				$position->insert($positionData);
				return redirect()->to('/position');
		}
	}
    // edit position
	// public function editPosition($id)
	// {
	//  $position = new PositionModel();
	//  $data['editPosition'] = $position->find($id);
	//  return view('/position', $data);
	// }
	// public function updatePosition(){
	// 	$position = new PositionModel();
	// 	$position->update($_POST['id'], $_POST);
	// 	return redirect()->to('/position');
	// }
	// delete position
	// public function deletePosition($po_id)
	// {
	// 	 $position = new PositionModel();
	// 	 $position->find($po_id);
	// 	 $delete = $position->delete($po_id);
	// 	 return redirect()->to('/position');
	// }
}
