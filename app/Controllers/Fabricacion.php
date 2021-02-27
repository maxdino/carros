<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\FabricacionModel; // Kuchiyose no jutsu del modelo

class Fabricacion extends Controller
{
	public function index()
	{
		$model = new FabricacionModel();          // Creando el objeto
		$data['fabricacion'] = $model->where('estado',1)
		->findAll();                      // fabricacion contiene toda la tabla
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('fabricacion/listar',$data);
		echo view('includes/footer');
	}
	public function show( $id ) //pueden colocar un nombre diferente a show
	{
		$model = new FabricacionModel();
		$data['fabricacion'] = $model->where('estado', 1)
		->find( $id );
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('fabricacion/form',$data);
		echo view('includes/footer');
	}
	public function create() //puede ser nombre diferente a create
	{
		$cadena = str_replace(' ','', $_FILES['imagen']['name']);
		$imagen = "fabricacion/".$cadena;  
		move_uploaded_file($_FILES['imagen']['tmp_name'], 'public/fotos/'.$imagen);
	    $data=array(
        	'fabricacion'=>$_POST['fabricacion'],
        	'annio'=>$_POST['fecha'],
        	'imagen'=>$imagen,
    );
        $model=new FabricacionModel();
        $fabricacion=$model-> insert($data);
        return redirect()->to(base_url()."/index.php/fabricacion");
	}
	public function update( $id ) //puede ser nombre diferente a create
	{
		if ($_FILES['imagen']['name']==null) {
			$imagen = $_POST['imagen_valida'];
		}else{
			$cadena = str_replace(' ','', $_FILES['imagen']['name']);
			$imagen = "fabricacion/".$cadena;  
			move_uploaded_file($_FILES['imagen']['tmp_name'], 'public/fotos/'.$imagen);
		}
		$data = array(
			'fabricacion'=>$_POST['fabricacion'],
        	'annio'=>$_POST['fecha'],
        	'imagen'=>$imagen,
		);
		$model = new FabricacionModel();
		$fabricacion = $model->where('estado', 1)
		->find($id);
		if(is_null($fabricacion)){
			$data = json_encode("El Id no existe");
		}
		else{
			$fabricacion = $model->update( $id, $data );
			$data = json_encode($model->find($id));
		}
		return redirect()->to(base_url()."/index.php/fabricacion");
		
	}
	public function delete( $id )
	{
		$data = array(
			'estado' => 0
		);
		$model = new FabricacionModel();
		$fabricacion = $model->where('estado', 1)
		->find($id);
		if(is_null($fabricacion)){
			$data = json_encode("El Id no existe");
		}
		else{
			$fabricacion = $model->update( $id, $data );
			$data = json_encode("Registro ".$id." eliminado");
		}
		return redirect()->to(base_url()."/index.php/fabricacion");
	}

	public function formulario()
	{
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('fabricacion/form');
		echo view('includes/footer');
	}

}