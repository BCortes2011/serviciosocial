<?php

namespace App\Controllers;
use App\Models\ServicioSocialModel;
use App\Models\AreasModel;
use App\Models\OptativasModel;

class Cuestionario extends BaseController
{
	public function index()
	{
		$modelArea = new AreasModel();
		$data = [
			'title' => 'Prueba!',
			'view' => 'CuestionarioView',
			'areas' => $modelArea->findAll()		
		];

		echo view('includes/header', $data);
		echo view($data['view'], $data);
		echo view('includes/footer');
	}

	public function next(){
		helper(['form']);

		switch($_POST["inputArea"]){
			case "optativas":
				$modelOptativas = new OptativasModel();

				$validation = \Config\Services::validation();

				$validation->setRules([
					"inputMatricula" => [
						"label" => "Matrícula",
						"rules" => "required|max_length[10]|min_length[10]",
						"errors" => [
							"required" => "El campo {field} es obligatorio. Por favor escribe tu {field}.",
							"max_length" => "El campo de {field} no puede exceder de 10 caracteres.",
							"min_length" => "El campo de {field} no puede tener menos de 10 caracteres."
						]
					]
				]);

				if($this->request->getMethod() == 'post') {
					if (!$validation->withRequest($this->request)->run()) {
						$data = [
							'title' => 'Registrar Optativa Error',
							'view' => 'Cuestionario_optativa',
							'lista_optativas' => $modelOptativas->findAll()
						];
						echo view('includes/header', $data);
						echo view('CuestionarioView', ['validation' => $this->validator]);
						echo view('includes/footer');
					}else{
						$data = [
							'title' => 'Registrar Optativa',
							'view' => 'Cuestionario_optativa',
							'lista_optativas' => $modelOptativas->findAll()
						];
						echo view('includes/header', $data);
						echo view($data['view'], $data);
						echo view('includes/footer');
					}
				}else{
					$data = [
						'title' => 'Registrar Optativa',
						'view' => 'CuestionarioView',
						'lista_optativas' => $modelOptativas->findAll()
					];
					echo view('includes/header', $data);
					echo view($data['view'], $data);
					echo view('includes/footer');
				}
				break;
			case "proyecto_terminal":
				$modelOptativas = new OptativasModel();
				$modelArea = new AreasModel();

				$validation = \Config\Services::validation();

				$validation->setRules([
					"inputMatricula" => [
						"label" => "Matrícula",
						"rules" => "required|max_length[10]|min_length[10]",
						"errors" => [
							"required" => "El campo {field} es obligatorio. Por favor escribe tu {field}.",
							"max_length" => "El campo de {field} no puede exceder de 10 caracteres.",
							"min_length" => "El campo de {field} no puede tener menos de 10 caracteres."
						]
					]
				]);

				if($this->request->getMethod() == 'post') {
					if (!$validation->withRequest($this->request)->run()) {
						$data = [
							'title' => 'Registrar Proyecto Error',
							'view' => 'Cuestionario_proyecto',
							'lista_optativas' => $modelOptativas->findAll(),
							'area' => $modelArea->findAll()
						];
						echo view('includes/header', $data);
						echo view('CuestionarioView', ['validation' => $this->validator]);
						echo view('includes/footer');
					}else{
						$data = [
							'title' => 'Registrar Proyecto Terminal',
							'view' => 'Cuestionario_proyecto',
							'lista_optativas' => $modelOptativas->findAll(),
							'area' => $modelArea->findAll()
						];
						echo view('includes/header', $data);
						echo view($data['view'], $data);
						echo view('includes/footer');
					}
				}else{
					$data = [
						'title' => 'Registrar Proyecto Terminal',
						'view' => 'Cuestionario_proyecto',
						'lista_optativas' => $modelOptativas->findAll()
					];
					echo view('includes/header', $data);
					echo view($data['view'], $data);
					echo view('includes/footer');
				}
				break;
			case "seminario":
				echo "SEMINARIO";
				break;
			case "recuperacion":
				echo "RECUPERACION";
				break;
			default:
				echo "Mamó";
			break;

		}
	}

	public function optativas(){
		$modelOptativas = new OptativasModel();
		
		$data = [
			'title' => 'Lista de optativas a solicitar',
			'view' => 'Cuestionario_lista_optativas',
			'lista_optativas' => $modelOptativas->findAll(),
			'ueas_seleccionadas' => $_POST["clave_uea"]
		];

		echo view('includes/header', $data);
		echo view($data['view'], $data);
		echo view('includes/footer');
	}

	public function confirmarOptativas(){
		$modelOptativas = new OptativasModel();	
		$data = [
			'title' => 'Lista de optativas a solicitar',
			'view' => 'Cuestionario_optativas_registradas',
			'lista_optativas' => $modelOptativas->findAll(),
		];

		echo view('includes/header', $data);
		echo view("Cuestionario_optativas_registradas", $data);
		echo view('includes/footer');
	}

	public function proyectos(){

		$data = [
			'title' => 'Lista de optativas a solicitar',
			'view' => 'Cuestionario_proyecto_informacion',
			'titulo'=>$_POST["inputNombreProyectoServicio"],
			'lugar'=>$_POST["inputLugar"],
			'area'=>$_POST["inputArea"],
			'contacto'=>$_POST["inputContact"],
			'emailContacto'=>$_POST["inputEmailContacto"],
			'necesidades'=>$_POST["inputNecesidades"],
			'caracteristicas'=>$_POST["inputCaracteristicas"],
			'objetivos'=>$_POST["inputObjetivos"],
			'dirigidoA'=>$_POST["inputDirigidoA"]
		];

		echo view('includes/header', $data);
		echo view("Cuestionario_proyecto_informacion", $data);
		echo view('includes/footer');
	}
}
