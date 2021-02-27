<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ModeloModel; // Kuchiyose no jutsu del modelo

class Modelo extends Controller
{
	public function index()
	{
		$model = new ModeloModel();          // Creando el objeto
		$data['modelo'] = $model->where('estado',1)
		->findAll();                      // modelo contiene toda la tabla
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('modelo/listar', $data);
		echo view('includes/footer'); 
	}
	public function show( $id ) //pueden colocar un nombre diferente a show
	{
		$model = new ModeloModel();
		$data['modelo']= $model->where('estado', 1)
		->find( $id );
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('modelo/form', $data);
		echo view('includes/footer'); 
	}
	public function create() //puede ser nombre diferente a create
	{
		$cadena = str_replace(' ','', $_FILES['imagen']['name']);
		$imagen = "modelo/".$cadena;  
		move_uploaded_file($_FILES['imagen']['tmp_name'], 'public/fotos/'.$imagen);
	    $data=array(
        	'modelo'=> $_POST['modelo'],
        	'imagen'=> $imagen,
    );
        $model=new ModeloModel();
        $modelo=$model-> insert($data);
        $data = json_encode($model->find($modelo));
       return redirect()->to(base_url()."/index.php/Modelo");
	}
	public function update( $id ) //puede ser nombre diferente a create
	{
		if ($_FILES['imagen']['name']==null) {
			$imagen = $_POST['imagen_valida'];
		}else{
			$cadena = str_replace(' ','', $_FILES['imagen']['name']);
			$imagen = "modelo/".$cadena;  
			move_uploaded_file($_FILES['imagen']['tmp_name'], 'public/fotos/'.$imagen);
		}
		$data = array(
			'modelo'=>  $_POST['modelo'],
        	'imagen'=> $imagen,
		);
		$model = new ModeloModel();
		$modelo = $model->where('estado', 1)
		->find($id);
		if(is_null($modelo)){
			$data = json_encode("El Id no existe");
		}
		else{
			$modelo = $model->update( $id, $data );
			$data = json_encode($model->find($id));
		}
		return redirect()->to(base_url()."/index.php/Modelo");
		
	}
	public function delete( $id )
	{
		$data = array(
			'estado' => 0
		);
		$model = new ModeloModel();
		$modelo = $model->where('estado', 1)
		->find($id);
		if(is_null($modelo)){
			$data = json_encode("El Id no existe");
		}
		else{
			$modelo = $model->update( $id, $data );
			$data = json_encode("Registro ".$id." eliminado");
		}
		return redirect()->to(base_url()."/index.php/Modelo");
	}

	public function formulario()
	{
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('modelo/form');
		echo view('includes/footer');
	}

}