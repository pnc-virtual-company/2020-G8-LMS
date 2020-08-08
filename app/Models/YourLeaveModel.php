<?php namespace App\Models;

use CodeIgniter\Model;

class YourLeaveModel extends Model
{
    protected $table      = 'leave_request';
    protected $primaryKey = 'l_id';
    protected $returnType     = 'array';
    protected $allowedFields = ['startDate', 'exactime_start', 'endDate', 'exactime_end', 'duration', 'leave_type', 'comment', 'user_id'];

    public function getAllYourLeave() 
    {
        return $this->db->table('leave_request')->get()->getResultArray();
    }
    
}