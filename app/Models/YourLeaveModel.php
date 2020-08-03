<?php namespace App\Models;

use CodeIgniter\Model;

class YourLeaveModel extends Model
{
    protected $table      = 'leave_request';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['startDate', 'endDate', 'time', 'duration', 'leave_type', 'status', 'comment', 'user_id'];

    public function getAllYourLeave() 
    {
        return $this->db->table('leave_request')->get()->getResultArray();
    }
    
}