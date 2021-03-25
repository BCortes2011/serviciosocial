<?php

namespace App\Controllers;

use App\Models\CategoriesModel;
use App\Models\UserModel;

class Login extends BaseController
{
	public function index()
	{

		$data = [
			'title' => 'Bienvenido!',
		];

		echo view('includes/header', $data);
		echo view('ProfileView');
		echo view('includes/footer');
	}
}
