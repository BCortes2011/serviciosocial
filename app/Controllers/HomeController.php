<?php

namespace App\Controllers;

class HomeController extends BaseController
{
	public function index(){

		$data = [
			'title' => 'Página de Prueba',
		];

		echo view('includes/header',$data);
		echo view('HomeView');
		echo view('includes/footer');
	}
}