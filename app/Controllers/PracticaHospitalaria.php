<?php

namespace App\Controllers;
use App\Models\PracticaHospitalariaModel;

class PracticaHospitalaria extends BaseController
{
	public function index()
	{
		$modelPractica = new PracticaHospitalariaModel();
		$data = [
			'title' => 'Índice de Proyectos Terminales',
			'info' => $modelPractica->findAll(),
		];

		echo view('includes/header', $data);
		echo view('PracticasHospitalariasView', $data);
		echo view('includes/footer');
	}

	public function info_proyecto($id, $area_id){

		$modelPractica = new PracticaHospitalariaModel();

		$db = \Config\Database::connect();
		$query = $db->query('SELECT * FROM profesores_encargados WHERE profesor_id = '.$id);
		$query2 = $db->query('SELECT * FROM areas_de_interes WHERE area_id = '.$area_id);

		$data = [
			'title' => 'Índice de Prácticas Hospitalarias',
			'info' => $modelPractica->findAll(),
			'profesores' => $query->getResult('array'),
			'area' => $query2->getResult('array')
		];

		echo view('includes/header', $data);
		echo  view('InfoProyectoServicioSocialView', $data);
		echo view('includes/footer');
	}
}
