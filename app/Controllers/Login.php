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
			
			$session = \Config\Services::session();
			$validation = \Config\Services::validation();
			
			$validation->setRules([
				"inputPassword" => [
					"label" => "Contraseña",
					"rules" => "required|alpha_numeric_punct|min_length[8]|max_length[25]|validateUser[inputEmail,inputPassword]",
					"errors" => [
						"required" => "El campo {field} es obligatorio. Por favor elige una contraseña que contenga números, letras y los símbolos !#~$%&*-_+=|:.",
						"alpha_numeric_punct" => "El campo {field} solo puede contener números, letras y los símbolos !#~$%&*-_+=|:.",
						"validateUser" => "El correo electrónico o la contraseña son incorrectos. Favor de corregirlos"
					]
				]
			]);

			if (!$validation->withRequest($this->request)->run()) {
				$data['validation'] = $validation;
			} else {
				$userModel = new UserModel();
			}
		}else{
			echo "No POST";
		}
	}
}
