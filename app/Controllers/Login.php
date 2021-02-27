<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel; // Kuchiyose no jutsu del modelo

class Login extends Controller
{
	public function index()
	{                  // color contiene toda la tabla
		session_start();
		if (!isset($_SESSION["id_usuario"])) {
		echo view('includes/header_login');
		echo view('login/login');
		echo view('includes/footer_login'); 
		}else{
			return redirect()->to(base_url()."/index.php/Principal");
		}
		
	}

	public function validar() //puede ser nombre diferente a create
	{
		$model=new LoginModel();
		$logear=$model-> validar($_POST['usuario'],$_POST['clave']);
		if (($logear)) {
			session_start();
			$_SESSION["nombre"] = $logear[0]['nombre'];
			$_SESSION["apellido"] = $logear[0]['apellido'];
			$_SESSION["id_usuario"] = $logear[0]['id_usuario'];
			$_SESSION["estado"] = $logear[0]['estado'];
			$_SESSION["imagen"] = $logear[0]['imagen'];
		} 
			return redirect()->to(base_url()."/index.php/Login");
	}

	public function cerrar_session(){
		session_start();
		session_destroy();
		return redirect()->to(base_url()."/index.php/Login");

	}


}