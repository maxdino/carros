<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsuarioModel; // Kuchiyose no jutsu del modelo

class Usuario extends Controller
{
	public function index()
	{
		$model = new UsuarioModel();          // Creando el objeto
		$data['usuario'] = $model->where('estado',1)
		->findAll();                      // usuario contiene toda la tabla
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('usuario/listar',$data);
		echo view('includes/footer');
	}

	public function show( $id ) //pueden colocar un nombre diferente a show
	{
		$model = new UsuarioModel();
		$data['usuario'] = $model->where('estado', 1)
		->find( $id );
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('usuario/form', $data);
		echo view('includes/footer');
	}

	public function create() //puede ser nombre diferente a create
	{
		$cadena = str_replace(' ','', $_FILES['imagen']['name']);
		$imagen = "usuario/".$cadena;  
		move_uploaded_file($_FILES['imagen']['tmp_name'], 'public/imagen/'.$imagen);
	    $data=array(
        	'nombre'=>$_POST['nombre'],
        	'apellido'=>$_POST['apellido'],
        	'nick'=>$_POST['usuario'],
        	'clave'=>$_POST['clave'],
        	'direccion'=>$_POST['direccion'],
        	'dni'=>$_POST['dni'],
        	'imagen'=>$imagen,

    );
        $model=new UsuarioModel();
        $usuario=$model-> insert($data);
		return redirect()->to(base_url()."/index.php/usuario");
	}
	public function update( $id ) //puede ser nombre diferente a create
	{
		if ($_FILES['imagen']['name']==null) {
			$imagen = $_POST['imagen_valida'];
		}else{
			$cadena = str_replace(' ','', $_FILES['imagen']['name']);
			$imagen = "usuario/".$cadena;  
			move_uploaded_file($_FILES['imagen']['tmp_name'], 'public/imagen/'.$imagen);
		}
		$data = array(
			'nombre'=>$_POST['nombre'],
        	'apellido'=>$_POST['apellido'],
        	'nick'=>$_POST['usuario'],
        	'clave'=>$_POST['clave'],
        	'direccion'=>$_POST['direccion'],
        	'dni'=>$_POST['dni'],
        	'imagen'=>$imagen,
		);
		$model = new UsuarioModel();
		$usuario = $model->where('estado', 1)
		->find($id);
		if(is_null($usuario)){
			$data = json_encode("El Id no existe");
		}
		else{
			$usuario = $model->update( $id, $data );
			$data = json_encode($model->find($id));
		}
		return redirect()->to(base_url()."/index.php/usuario");
	}
	public function delete( $id )
	{
		$data = array(
			'estado' => 0
		);
		$model = new UsuarioModel();
		$usuario = $model->where('estado', 1)
		->find($id);
		if(is_null($usuario)){
			$data = json_encode("El Id no existe");
		}
		else{
			$usuario = $model->update( $id, $data );
			$data = json_encode("Registro ".$id." eliminado");
		}
		return redirect()->to(base_url()."/index.php/usuario");
	}

	public function formulario()
	{
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('usuario/form');
		echo view('includes/footer');
	}

}