<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index(){

		$data = [
			'title' => 'Iniciar Sesión',
		];

		echo view('includes/header', $data);
		echo view('LoginView');
		echo view('includes/footer');

	}
}
