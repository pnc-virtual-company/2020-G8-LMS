<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    
    public function getAllUser(){
        return $this->db->table('users')
        ->join('department', 'department.de_id = users.de_id')
        ->join('positions', 'position.po_id = users.po_id')
        ->get()->getResultArray();
    }
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['firstname','lastname', 'email','password','role','profile','start_date','de_id','po_id'];
}