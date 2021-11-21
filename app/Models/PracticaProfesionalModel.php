<?php
namespace App\Models;

use CodeIgniter\Model;

class PracticaProfesionalModel extends Model
{

    protected $table = 'index_practicas_profesionales';
    protected $primaryKey = 'practica_profesional_id';
    protected $allowedFields = [
        'practica_profesional_id',
        'nombre',
        'dirigido_a',
        'objetivos',
        'actividades_a_realizar',
        'direccion',
        'caracteristicas_del_estudiante',
        'contacto_email',
        'contacto_telefono',
        'estado',
        'aclaldia_id',
        'modalidad',
        'entregables',
        'publicaciones_de_alumnos',
        'area_de_interes',
        'cronograma_general',
        'supervisor_interno_id',
        'tipo_de_practica',
        'fecha_de_registro',
        'asesor_externo_id'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data['data']['fecha_de_publicacion'] = date('Y-m-d');
        return $data;
    }

}
