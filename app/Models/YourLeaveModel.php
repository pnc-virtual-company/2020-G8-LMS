<?php namespace App\Models;

use CodeIgniter\Model;

class YourLeaveModel extends Model
{
    protected $table      = 'leave_request';
    protected $primaryKey = 'l_id';
    protected $returnType     = 'array';
    protected $allowedFields = ['startDate', 'exactime_start', 'endDate', 'exactime_end', 'duration', 'leave_type', 'comment', 'user_id','status'];

    public function getAllYourLeave() 
    {
        $userId = session()->get('id');
        return $this->db->table('user')->select('*')->join('leave_request', 'leave_request.user_id = user.u_id')->where('user.u_id = "'.$userId.'"')->get()->getResultArray();
        

    }

    public function managerGetAll()
    {
        return $this->db->table('user')->select('*')->join('leave_request', 'leave_request.user_id = user.u_id')->get()->getResultArray();

    }
    
}