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

		$data['categories'] = $modelCategories->findAll();

		helper("url", "form");

		$data = [
			'title' => 'Crear Cuenta',
			'categories' => $modelCategories->findAll()
		];

		if ($this->request->getMethod() === 'post' && $this->validate([
			'inputEmail' => 'required',
			'inputConfirmEmail' => 'required',
			'inputPassword'  => 'required',
			'inputName'  => 'required',
			'inputLastName' => 'required',
			'inputPhone'  => 'required',
			'inputCategory' => 'required'
		])) {

			$userModel->save([
				'email' => $this->request->getPost('inputEmail'),
				'password' => $this->request->getPost('inputPassword'),
				'name' => $this->request->getPost('inputName'),
				'lastName' => $this->request->getPost('inputLastName'),
				'phoneNumber' => $this->request->getPost('inputPhone'),
				'category_id' => $this->request->getPost('inputCategory')
			]);

			echo view('includes/header', $data);
			echo view('RegistrationView');
			echo view('includes/footer');
		} else {
			echo view('includes/header', $data);
			echo view('RegistrationView');
			echo view('includes/footer');
		}
	}
}
