<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MarcaModel; // Kuchiyose no jutsu del modelo

class Marca extends Controller
{
	public function index()
	{
		$model = new MarcaModel();          // Creando el objeto
		$data['marca'] = $model->where('estado',1)
		->findAll();                      // marca contiene toda la tabla
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('marcas/listar', $data);
		echo view('includes/footer');   
	}
	public function show( $id ) //pueden colocar un nombre diferente a show
	{
		$model = new MarcaModel();
		$data['marca'] = $model->where('estado', 1)
		->find( $id );
		 
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('marcas/form', $data);
		echo view('includes/footer'); 
	}
	public function create() //puede ser nombre diferente a create
	{
		$cadena = str_replace(' ','', $_FILES['imagen']['name']);
		$imagen = "marca/".$cadena;  
		move_uploaded_file($_FILES['imagen']['tmp_name'], 'public/fotos/'.$imagen);
		$data=array(
			'marca'=>$_POST['marca'],
			'imagen'=>$imagen,
		);
		$model=new MarcaModel();
		$marca=$model-> insert($data);
		 return redirect()->to(base_url()."/index.php/Marca");
	}
	public function update( $id ) //puede ser nombre diferente a create
	{
		if ($_FILES['imagen']['name']==null) {
			$imagen = $_POST['imagen_valida'];
		}else{
			$cadena = str_replace(' ','', $_FILES['imagen']['name']);
			$imagen = "marca/".$cadena;  
			move_uploaded_file($_FILES['imagen']['tmp_name'], 'public/fotos/'.$imagen);
		}
		$data = array(
			'marca'=>$_POST['marca'],
			'imagen'=>$imagen,
		);
		$model = new MarcaModel();
		$marca = $model->where('estado', 1)
		->find($id);
		if(is_null($marca)){
			$data = json_encode("El Id no existe");
		}
		else{
			$marca = $model->update( $id, $data );
			 
		}
		 return redirect()->to(base_url()."/index.php/Marca");
		
	}
	public function delete( $id )
	{
		$data = array(
			'estado' => 0
		);
		$model = new MarcaModel();
		$marca = $model->where('estado', 1)
		->find($id);
		if(is_null($marca)){
			$data = json_encode("El Id no existe");
		}
		else{
			$marca = $model->update( $id, $data );
			$data = json_encode("Registro ".$id." eliminado");
		}
		return redirect()->to(base_url()."/index.php/Marca");
	}

	public function formulario()
	{
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('marcas/form');
		echo view('includes/footer');
	}

}