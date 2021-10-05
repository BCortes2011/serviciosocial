<?php

namespace App\Controllers;
use App\Models\ServicioSocialModel;
use App\Models\ProfesorModel;
use App\Models\AreasModel;

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

	public function info_proyecto($id, $area_id){

		$modelServicio = new ServicioSocialModel();

		$db = \Config\Database::connect();
		$query = $db->query('SELECT * FROM profesores_encargados WHERE profesor_id = '.$id);
		$query2 = $db->query('SELECT * FROM areas_de_interes WHERE area_id = '.$area_id);

		$data = [
			'title' => 'Índice de Proyectos de Servicio Social',
			'info' => $modelServicio->findAll(),
			'profesores' => $query->getResult('array'),
			'area' => $query2->getResult('array')
		];

		echo view('includes/header', $data);
		echo  view('InfoProyectoServicioSocialView', $data);
		echo view('includes/footer');
	}

	public function registrarProyecto(){
		$modelAreas = new AreasModel();
		$data = [
			'title' => 'Índice de Proyectos de Servicio Social',
			'area' => $modelAreas->findAll()
		];

		echo view('includes/header', $data);
		echo view("RegistroProyectoServicioSocial");
		echo view('includes/footer');
	}
}
