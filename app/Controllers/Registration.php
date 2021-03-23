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

	public function register()
	{

		if ($_POST) {

			$userModel = new UserModel();
			$modelCategories = new CategoriesModel();
			helper(["url", "form"]);

			$validation = \Config\Services::validation();
			$data = [
				'title' => 'Crear Cuenta',
				'categories' => $modelCategories->findAll(),
				'validation' => \Config\Services::validation()
			];

			$validation->setRules([
				"inputEmail" => [
					"label" => "Correo Electrónico",
					"rules" => "required|valid_email|max_length[100]|is_unique[users.email]",
					"errors" => [
						"required" => "El campo {field} es obligatorio. Por favor escribe tu {field}.",
						"valid_email" => "La dirección de {field} ingresada no es válida.",
						"max_length" => "El campo de {field} no puede exceder de 100 caracteres.",
						"is_unique" => "Este {field} ya está registrado. Favor de ingresar un {field} distinto."
					]
				],
				"inputConfirmEmail" => [
					"label" => "Confirmar Correo Electrónico",
					"rules" => "matches[inputEmail]",
					"errors" => [
						"matches" => "Los correos electrónicos no coinciden. Favor de revisarlos."
					]
				],
				"inputPassword" => [
					"label" => "Contraseña",
					"rules" => "required|alpha_numeric_punct|min_length[8]|max_length[25]",
					"errors" => [
						"required" => "El campo {field} es obligatorio. Por favor elige una contraseña que contenga números, letras y los símbolos !#~$%&*-_+=|:.",
						"alpha_numeric_punct" => "El campo {field} solo puede contener números, letras y los símbolos !#~$%&*-_+=|:."
					]
				],
				"inputName" => [
					"label" => "Nombre(s)",
					"rules" => "required|min_length[3]|max_length[45]",
					"errors" => [
						"required" => "El campo Nombre es obligatorio. Por favor escribe tu Nombre.",
			 			"min_length" => "El campo Nombre debe tener más de tres caracteres."
					]
				],
				"inputLastName" => [
					"label" => "Apellido(s)",
					"rules" => "required|min_length[3]|max_length[70]",
					"errors" => [
						"required" => "El campo Apellido es obligatorio. Favor de llenarlo.",
			 			"min_length" => "El campo Apellido debe tener al menos 3 caracteres.",
			 			"max-length" => "El campo Apellido debe tener menos de 70 caracteres."
					]
				],
				"inputPhone" => [
					"label" => "Teléfono",
					"rules" => "required|min_length[10]|max_length[20]|numeric",
					"errors" => [
						"required" => "El campo Teléfono es obligatorio. Favor de llenarlo.",
			 			"min_length" => "El campo Teléfono debe de tener al menos 10 caracteres.",
			 			"max_length" => "El campo Teléfono debe de tener máximo 20 caracteres.",
			 			"numeric" => "El campo Teléfono solamente puede contener caracteres numéricos."
					]
				],
				"inputCategory" => [
					"label" => "Tipo de Usuario",
					"rules" => "required|in_list[1,2,3]",
					"errors" => [
						"required" => "Favor de escoger cuál es su tipo de usuario."
					]
				]
			]);

			if (!$validation->withRequest($this->request)->run()) {
				echo view('includes/header', $data);
				echo view('RegistrationView', ['validation' => $this->validator]);
				echo view('includes/footer');
			} else {
				echo "Success";
				echo print_r($_POST);
				$userData = [
					"email" => $_POST['inputEmail'],
					"password" => $_POST['inputPassword'],
					"name" => $_POST['inputName'],
					"lastName" => $_POST['inputLastName'],
					"phoneNumber" => $_POST['inputPhone'],
					"category_id" => $_POST['inputCategory'],
					"registration_date" => date('Y-m-d H:i:s')
				];

				$userModel->insert($userData);
			}
		}
	}
}
