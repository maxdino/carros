<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ColorModel; // Kuchiyose no jutsu del modelo

class Color extends Controller
{
	public function index()
	{
		$model = new ColorModel();          // Creando el objeto
		$data['color'] = $model->where('estado',1)
		->findAll();                      // color contiene toda la tabla
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('color/listar', $data);
		echo view('includes/footer'); 
	}
	public function show( $id ) //pueden colocar un nombre diferente a show
	{
		$model = new ColorModel();
		$data['color'] = $model->where('estado', 1)
		->find( $id );
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('color/form', $data);
		echo view('includes/footer'); 
	}
	public function create() //puede ser nombre diferente a create
	{
	    $data=array(
        	'color'=>$_POST['color'],
        	'codigo'=>$_POST['codigo']
    );
        $model=new ColorModel();
        $color=$model-> insert($data);
        $data = json_encode($model->find($color));
         return redirect()->to(base_url()."/index.php/Color");
	}
	public function update( $id ) //puede ser nombre diferente a create
	{
		$data = array(
			'color'=>$_POST['color'],
        	'codigo'=>$_POST['codigo']
		);
		$model = new ColorModel();
		$color = $model->where('estado', 1)
		->find($id);
		$color = $model->update( $id, $data );
		$data = json_encode($model->find($id));
		return redirect()->to(base_url()."/index.php/Color");
		
	}
	public function delete( $id )
	{
		$data = array(
			'estado' => 0
		);
		$model = new ColorModel();
		$color = $model->where('estado', 1)
		->find($id);
		if(is_null($color)){
			$data = json_encode("El Id no existe");
		}
		else{
			$color = $model->update( $id, $data );
			$data = json_encode("Registro ".$id." eliminado");
		}
		return redirect()->to(base_url()."/index.php/Color");
	}

	public function formulario()
	{
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('color/form');
		echo view('includes/footer');
	}

}