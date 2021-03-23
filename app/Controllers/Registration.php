<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CategoriesModel;
use CodeIgniter\Controller;

class Registration extends Controller
{
	public function index()
	{

		$modelCategories = new CategoriesModel();

		$data['title'] = 'Registrar Usuario';
		$data['categories'] = $modelCategories->findAll();
		echo view('includes/header', $data);
		echo view('RegistrationView', $data);
		echo view('includes/footer');
	}

	public function register(){
		$userModel = new UserModel();
		$modelCategories = new CategoriesModel();
		helper("url", "form");
		$data = [
			'title' => 'Crear Cuenta',
			'categories' => $modelCategories->findAll()
		];
	}
}
