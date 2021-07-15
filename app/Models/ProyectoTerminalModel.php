<?php
namespace App\Models;

use CodeIgniter\Model;

class ProyectoTerminalModel extends Model
{

    protected $table = 'index_proyectos_terminales';
    protected $primaryKey = 'proyecto_terminal_id';
    protected $allowedFields = ['titulo_proyecto', 'profesor_encargado_id', 'objetivos', 'dirigido_a', 'necesidades', 'caracteristicas_del_estudiante','contacto_email','contacto_nombre','area_id','lugar_de_realizacion','entregables','estado','fecha_de_publicacion'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data['data']['fecha_de_publicacion'] = date('Y-m-d');
        return $data;
    }

}
