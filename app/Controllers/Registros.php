<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\RegistrosModel; // Kuchiyose no jutsu del modelo

class Registros extends Controller
{
	public function index()
	{
		$model = new RegistrosModel();          
		$registro = $model->where('estado',1)
		->findAll();
		if(count($registro)==0){
			$respuesta = array('error'=>true, "mensaje"=>"No hay elementos");
			$data = json_encode($respuesta);
		}
		else{
			$data = json_encode($registro);
		}                      
		return $data;     
	}
	
	public function create(){
		$request = \Config\Services::request(); // Trae datos del POSTMAN
		$validation = \Config\Services::validation(); // Valida datos
		// Solicitando los datos del POSTMAN
		$datos = array(
			'nombres' => $request->getVar('nombres'),
			'apellidos' => $request->getVar('apellidos'),
			'email' => $request->getVar('email')
		);
		// Validando los datos que llegan a través del POSTMAN
		if(!empty($datos)) {
			$validation->setRules([
				'nombres' => 'required|string|max_length[255]',
				'apellidos' => 'required|string|max_length[255]',
				'email' => 'required|valid_email'
			]);

			$validation->withRequest($this->request)
			->run(); // Corriendo las validaciones
			if($validation->getErrors()){
				$errors = $validation->getErrors();
				$data = array(
					"Status"=>404,
					"Detalle" => $errors
				);
				return json_encode($data, true);
			}
			else{
				$cliente_id = crypt($datos['nombres'].$datos["apellidos"].$datos["email"], '$2a$07$dfhdfrexfhgdfhdferttgsad$');
	     		$llave_secreta = crypt($datos["email"].$datos["apellidos"].$datos["nombres"], '$2a$07$dfhdfrexfhgdfhdferttgsad$');
				$datos = array(
					"nombres" => $datos["nombres"],
					"apellidos" => $datos["apellidos"],
					"email" => $datos["email"],
					"cliente_id" => str_replace('$','a', $cliente_id),
					"llave_secreta" => str_replace('$','o', $llave_secreta)
				);
				$model = new RegistrosModel();
				$registro = $model->insert( $datos ); 
				// var_dump($registro); die;
				$data = array(
					"Status" => 200,
					"Detalle" => "Registro exitoso, guarde sus credenciales",
					"credenciales" => array(
						"cliente_id" => str_replace('$','a', $cliente_id),
						"llave_secreta" => str_replace('$','o', $llave_secreta)
					)
				);
				return json_encode($data, true);
			}
		}
		else{
			$data = array(
				"Status" => 404,
				"Detalle" => "Registro se realizó con errores"
			);
			return json_encode($data, true);
		}
	}
}