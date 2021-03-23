<?php namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model{
    protected $table = 'user_category';
    protected $primaryKey = 'category_id';
       
    protected $returnType ="array";

    protected $allowedFields = ['name'];
   
}

