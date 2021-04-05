<?php
namespace App\Models;

use CodeIgniter\Model;

class ProfesorModel extends Model
{

    protected $table = 'profesores_encargados';
    protected $primaryKey = 'profesor_id';
    protected $allowedFields = ['nombres', 'apellidos', 'email', 'telefono', 'cubiculo'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {        $data['data']['registration_date'] = date('Y-m-d H:i:s');

        return $data;
    }
}
