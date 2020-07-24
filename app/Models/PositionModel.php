<?php namespace App\Models;

use CodeIgniter\Model;

class PositionModel extends Model
{
    protected $table      = 'position';
    protected $primaryKey = 'p_id';
    protected $returnType     = 'array';
    protected $allowedFields = ['pname'];
    public function listPosition($user)
    {
        $this->insert([
                'pname'=>$user['pname'],
        ]);
    }

}