<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $allowedFields = ['firstname','lastname','email','password','role','start_date','profile'];

}