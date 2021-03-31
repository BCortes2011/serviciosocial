<?php

namespace App\Controllers;
use App\Models\ServicioSocialModel;

class Test extends BaseController
{
	public function index()
	{


		$modelServicio = new ServicioSocialModel();
		$data = [
			'title' => 'Prueba!',
			'view' => 'ProyectosServicioSocialView',
			'info' => $modelServicio->findAll()		
		];

		echo view('includes/header', $data);
		echo "Vista cargada ".$data['view'];
		echo view($data['view'], $data);
		echo view('includes/footer');
	}
}
