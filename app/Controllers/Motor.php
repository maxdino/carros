<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MotorModel; // Kuchiyose no jutsu del modelo

class Motor extends Controller
{
	public function index()
	{
		$model = new MotorModel();          // Creando el objeto
		$data['motor'] = $model->where('estado', 1)
		->findAll();                      // especialidad contiene toda la tabla  
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('motor/listar', $data);
		echo view('includes/footer');
	}
	public function show( $id ) //pueden colocar un nombre diferente a show
	{
		$model = new MotorModel();
		$data['motor'] = $model->where('estado', 1)
		->find( $id );
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('motor/form', $data);
		echo view('includes/footer');
	}
	public function create() //puede ser nombre diferente a create
	{
	    $data=array(
        	'motor'=> $_POST['motor'],
    );
        $model=new MotorModel();
        $motor=$model-> insert($data);
        return redirect()->to(base_url()."/index.php/Motor");
	}
	public function update( $id ) //puede ser nombre diferente a create
	{
		$data = array(
			'motor'=> $_POST['motor'],
		);
		$model = new MotorModel();
		$carros = $model->update( $id, $data );
		return redirect()->to(base_url()."/index.php/Motor");
	}
	public function delete( $id )
	{
		$data = array(
			'estado' => 0
		);
		$model = new MotorModel();
		$motor = $model->where('estado', 1)
		->find($id);
		if(is_null($motor)){
			$data = json_encode("El Id no existe");
		}
		else{
			$motor = $model->update( $id, $data );
			 
		}
		return redirect()->to(base_url()."/index.php/Motor");
	}

	public function formulario()
	{
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('motor/form');
		echo view('includes/footer');
	}

}