<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['email', 'password', 'name', 'lastName', 'phoneNumber','category_id','registration_date'];
}


