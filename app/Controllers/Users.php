<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CategoriesModel;


class Users extends BaseController
{
	public function index()
	{

        $session = \Config\Services::session();
		$data = [
            'title' => 'Iniciar Sesión'
        ];
		helper(['form']);


		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'inputEmail' => 'required|min_length[6]|max_length[50]|valid_email',
				'inputPassword' => 'required|min_length[8]|max_length[255]|validateUser[inputEmail,inputPassword]',
			];

			$errors = [
				'inputPassword' => [
					'validateUser' => 'Email or Password don\'t match\n'				]
			];

			if (! $this->validate($rules, $errors)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$user = $model->where('email', $this->request->getVar('inputEmail'))
											->first();

				$this->setUserSession($user);
				//$session->setFlashdata('success', 'Successful Registration');

			}
		}
		echo view('includes/header', $data);
		echo view('LoginView');
		echo view('includes/footer');
	}

	private function setUserSession($user){
		$data = [
			'user_id' => $user['user_id'],
			'email' => $user['email'],
			'name' => $user['name'],
			'lastName' => $user['lastName'],
            'phoneNumber' => $user['phoneNumber'],
            'category_id' => $user['category_id'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

	public function register(){
		$data = [];
		helper(['form']);
        $modelCategories = new CategoriesModel();

        $data = [
            'title' => 'Crear Cuenta',
            'categories' => $modelCategories->findAll(),
        ];

		if ($this->request->getMethod() == 'post') {
            $validation = \Config\Services::validation();
			//let's do the validation here
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
			}else{
				$model = new UserModel();

				$userData = [
					"email" => $_POST['inputEmail'],
					"password" => $_POST['inputPassword'],
					"name" => $_POST['inputName'],
					"lastName" => $_POST['inputLastName'],
					"phoneNumber" => $_POST['inputPhone'],
					"category_id" => $_POST['inputCategory'],
					"registration_date" => date('Y-m-d H:i:s')
				];
                $model->save($userData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
			}
		}


		echo view('includes/header', $data);
		echo view('registrationView');
		echo view('includes/footer');
	}

	public function profile(){
		
		$data = [];
		helper(['form']);
		$model = new UserModel();

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'firstname' => 'required|min_length[3]|max_length[20]',
				'lastname' => 'required|min_length[3]|max_length[20]',
				];

			if($this->request->getPost('password') != ''){
				$rules['password'] = 'required|min_length[8]|max_length[255]';
				$rules['password_confirm'] = 'matches[password]';
			}


			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{

				$newData = [
					'id' => session()->get('id'),
					'firstname' => $this->request->getPost('firstname'),
					'lastname' => $this->request->getPost('lastname'),
					];
					if($this->request->getPost('password') != ''){
						$newData['password'] = $this->request->getPost('password');
					}
				$model->save($newData);

				session()->setFlashdata('success', 'Successfuly Updated');
				return redirect()->to('/profile');

			}
		}

		$data['user'] = $model->where('id', session()->get('id'))->first();
		echo view('templates/header', $data);
		echo view('profile');
		echo view('templates/footer');
	}

	public function logout(){
		session()->destroy();
		return redirect()->to('/');
	}

	//--------------------------------------------------------------------

}