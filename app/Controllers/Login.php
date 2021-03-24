<?php

namespace App\Controllers;

use App\Models\CategoriesModel;
use App\Models\UserModel;

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

	public function startSession(){
		if($_POST){
			$userModel = new UserModel();
			$modelCategories = new CategoriesModel();
			$validation = \Config\Services::validation();
			$data = [
				'title' => "Iniciar Sesión",
				'categories' => $modelCategories->findAll(),
				'validation' => $validation
			];
			
			echo view('includes/header', $data);
			echo view('LoginView');
			echo view('includes/footer');
		}else{
			echo "No POST";
		}
	}
}
