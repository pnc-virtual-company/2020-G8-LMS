<?php namespace App\Models;

use CodeIgniter\Model;

class PositionModel extends Model
{
    protected $table      = 'positions';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['title'];
    public function listPosition($user)
    {
        $this->insert([
                'title'=>$user['title'],
        ]);
    }

}