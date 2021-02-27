<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class Principal extends Controller
{
	public function index()
	{
        // fabricacion contiene toda la tabla
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('principal/listar');
		echo view('includes/footer');
	}

}