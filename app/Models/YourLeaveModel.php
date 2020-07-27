<?php namespace App\Models;
use CodeIgniter\Model;

class YourLeaveModel extends Model
{
    protected $table      = 'leave_request';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';


    protected $allowedFields = ['startDate', 'endDate', 'time', 'duration', 'leave_type', 'status', 'comment','id', 'user_id'];

    public function getUserInfo() 
    {
        return $this->db->table('leave_request')
        ->join('user', 'leave_request.user_id = user.id')
        // ->join('province', 'province.p_id = user.pro_id')
        ->get()->getResultArray();
    }

   
}