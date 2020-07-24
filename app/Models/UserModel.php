<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'u_id';

    protected $returnType     = 'array';

    protected $allowedFields = ['firstName','lastName','startDate','profile','email','password','role',];

}