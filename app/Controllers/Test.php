<?php

namespace App\Controllers;
use App\Models\ServicioSocialModel;
use App\Models\AreasModel;

class Test extends BaseController
{
	public function index()
	{


		$modelServicio = new ServicioSocialModel();
		$modelArea = new AreasModel();
		$data = [
			'title' => 'Prueba!',
			'view' => 'CuestionarioView',
			'info' => $modelServicio->findAll(),
			'areas' => $modelArea->findAll()
			
		];

		echo view('includes/header', $data);
		echo "Vista cargada ".$data['view'];
		echo view($data['view'], $data);
		echo view('includes/footer');
	}
}
