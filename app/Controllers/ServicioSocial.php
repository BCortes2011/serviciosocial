<?php

namespace App\Controllers;
use App\Models\ServicioSocialModel;
use App\Models\ProfesorModel;

class ServicioSocial extends BaseController
{
	public function index()
	{


		$modelServicio = new ServicioSocialModel();
		$modelProfesor = new ProfesorModel();
		$data = [
			'title' => 'Índice de Proyectos de Servicio Social',
			'info' => $modelServicio->findAll(),
			'profesores' => $modelProfesor->findAll()
		];

		echo view('includes/header', $data);
		echo view('ProyectosServicioSocialView', $data);
		echo view('includes/footer');
	}

	public function info_proyecto($id){

		$modelServicio = new ServicioSocialModel();
		$modelProfesor = new ProfesorModel();

		$db = \Config\Database::connect();
		$query = $db->query('SELECT * FROM profesores_encargados WHERE profesor_id = '.$id);

		$data = [
			'title' => 'Índice de Proyectos de Servicio Social',
			'info' => $modelServicio->findAll(),
			'profesor' => $query->getResult('array')
		];

		echo view('includes/header', $data);
		echo  view('InfoProyectoServicioSocialView', $data);
		echo view('includes/footer');
	}
}
