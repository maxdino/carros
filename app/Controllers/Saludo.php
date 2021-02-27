<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
class Saludo extends Controller
{
	public function index()
	{
		echo "Hola Mundo, Post Covid";
	}
	public function comentarios($id){
		if(!is_numeric($id)){
			$respuesta = array(
				"error"=>true, "mensaje"=>"Debe ser numérico"
			);
			echo json_encode($respuesta);
			return;
		}
		$comentarios = array(
			array("id"=>1,"mensaje"=>"Error 404"),
			array("id"=>2,"mensaje"=>"Error 405"),
			array("id"=>3,"mensaje"=>"Error 406"),
			array("id"=>4,"mensaje"=>"Error 407")
		);
		if($id >= count($comentarios) OR $id<0){
			$respuesta = array(
				"error"=>true, "mensaje"=>"El Id no existe");
				echo json_encode($respuesta);
				return;
		};
		echo json_encode($comentarios[$id]);
	}
}
