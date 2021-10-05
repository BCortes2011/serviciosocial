<?php namespace App\Models;

use CodeIgniter\Model;

class AreasModel extends Model{
    protected $table = 'areas_de_interes';
    protected $primaryKey = 'area_id';
       
    protected $returnType ="array";

    protected $allowedFields = ['area_nombre'];
   
}

