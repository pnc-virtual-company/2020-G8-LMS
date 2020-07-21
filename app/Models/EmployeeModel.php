<?php namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    
    public function get_employee(){
        return $this->db->table('users')
        ->join('department','department.id = users.id' )
        ->join('position','position.id = users.id' )
        ->get()->getResultArray();
    }
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['firstname','lastname', 'email','password','role','start_date','profile','de_id','po_id'];
   
        
}

