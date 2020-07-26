<?php namespace App\Models;

use CodeIgniter\Model;

class YourLeaveModel extends Model
{
    protected $table      = 'leave_request';
    protected $primaryKey = 'leave_id';

    protected $returnType     = 'array';

    protected $allowedFields = ['start_date', 'end_date', 'duration', 'leave_type', 'time_of_day', 'comment', 'user_id'];

    public function getAllSubject() 
    {
        return $this->db->table('leave_request')->get()->getResultArray();
    }

}