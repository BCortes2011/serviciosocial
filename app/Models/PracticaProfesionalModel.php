<?php
namespace App\Models;

use CodeIgniter\Model;

class PracticaProfesionalModel extends Model
{

    protected $table = 'index_practicas_hospitalarias';
    protected $primaryKey = 'practica_hospitalaria_id';
    protected $allowedFields = ['practica_hospitalaria_id', 'nombre_hospital', 'objetivos', 'actividades_a_realizar', 'direccion', 'caracteristicas_del_estudiante', 'contacto_email', 'contacto_nombre', 'lugar_de_realización', 'alcaldia_id', 'modalidades_de_conduccion', 'entregables', 'publicaciones', 'tipo_de_hospital', 'jefe_de_ing_bio', 'contacto_jefe_ing_bio', 'fecha_de_registro'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data['data']['fecha_de_publicacion'] = date('Y-m-d');
        return $data;
    }

}
