<?php
namespace App\Models;

use CodeIgniter\Model;

class ServicioSocialModel extends Model
{

    protected $table = 'index_proyectos_servicio_social';
    protected $primaryKey = 'proyecto_servicio_id';
    protected $allowedFields = ['titulo_proyecto', 'dirigido_a', 'objetivos', 'necesidades', 'lugar_de_realizacion', 'caracteristicas_del_estudiante',
        'contacto_email','contacto_nombre','estado','fecha_de_publicacion','area_id'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data['data']['fecha_de_publicacion'] = date('Y-m-d');

        return $data;
    }



}
