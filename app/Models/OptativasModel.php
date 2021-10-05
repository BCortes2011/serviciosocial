<?php namespace App\Models;

use CodeIgniter\Model;

class OptativasModel extends Model{
    protected $table = 'optativas';
    protected $primaryKey = 'id';
       
    protected $returnType ="array";

    protected $allowedFields = ['clave_uea', 'nombre'];
   
}

