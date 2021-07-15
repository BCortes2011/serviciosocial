<?php

namespace App\Controllers;
use App\Models\ProfesorModel;
use App\Models\ProyectoTerminalModel;

class ProyectoTerminal extends BaseController
{
	public function index()
	{
		$modelProyecto = new ProyectoTerminalModel();
		$modelProfesor = new ProfesorModel();
		$data = [
			'title' => 'Índice de Proyectos Terminales',
			'info' => $modelProyecto->findAll(),
			'profesores' => $modelProfesor->findAll()
		];

		echo view('includes/header', $data);
		echo view('ProyectosTerminalesView', $data);
		echo view('includes/footer');
	}

	public function info_proyecto($id, $area_id){

		$modelProyecto = new ProyectoTerminalModel();

		$db = \Config\Database::connect();
		$query = $db->query('SELECT * FROM profesores_encargados WHERE profesor_id = '.$id);
		$query2 = $db->query('SELECT * FROM areas_de_interes WHERE area_id = '.$area_id);

		$data = [
			'title' => 'Índice de Proyectos de Servicio Social',
			'info' => $modelProyecto->findAll(),
			'profesores' => $query->getResult('array'),
			'area' => $query2->getResult('array')
		];

		echo view('includes/header', $data);
		echo  view('InfoProyectoServicioSocialView', $data);
		echo view('includes/footer');
	}
}
