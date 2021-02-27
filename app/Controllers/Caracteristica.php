<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CaracteristicaModel; // Kuchiyose no jutsu del modelo

class Caracteristica extends Controller
{
 
	public function index()
	{
		$model = new CaracteristicaModel();          // Creando el objeto
		$data['caracteristica'] = $model->where('estado',1)
		->findAll();                      // cliente contiene toda la tabla
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('caracteristica/listar', $data);
		echo view('includes/footer');
	}
	public function show( $id ) //pueden colocar un nombre diferente a show
	{
		$model = new CaracteristicaModel();
		$data['caracteristica'] = $model->where('estado', 1)
		->find( $id );
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('caracteristica/form', $data);
		echo view('includes/footer');
	}
	public function create() //puede ser nombre diferente a create
	{
	    $data=array(
        	'caracteristica'=>$_POST['caracteristica'],
    );
        $model=new CaracteristicaModel();
        $caracteristica=$model-> insert($data);
        return redirect()->to(base_url()."/index.php/caracteristica");
	}
	public function update( $id ) //puede ser nombre diferente a create
	{
		$data = array(
			'caracteristica'=>$_POST['caracteristica'],
		);
		$model = new CaracteristicaModel();
		$cliente = $model->where('estado', 1)
		->find($id);
		if(is_null($cliente)){
			$data = json_encode("El Id no existe");
		}
		else{
			$cliente = $model->update( $id, $data );
			$data = json_encode($model->find($id));
		}
		return redirect()->to(base_url()."/index.php/caracteristica");
		
	}
	public function delete( $id )
	{
		$data = array(
			'estado' => 0
		);
		$model = new CaracteristicaModel();
		$cliente = $model->where('estado', 1)
		->find($id);
		if(is_null($cliente)){
			$data = json_encode("El Id no existe");
		}
		else{
			$cliente = $model->update( $id, $data );
			$data = json_encode("Registro ".$id." eliminado");
		}
		return redirect()->to(base_url()."/index.php/caracteristica");
	}
	
	public function formulario()
	{
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('caracteristica/form');
		echo view('includes/footer');
	}
}