<?php

namespace App\Controllers;

class Test extends BaseController
{
	public function index()
	{

		$data = [
			'title' => 'Prueba!',
		];

		echo view('includes/header', $data);
		echo view('ProyectosTerminalesView');
		echo view('includes/footer');
	}
}
