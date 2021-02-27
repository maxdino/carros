<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Sub_caracteristicaModel; // Kuchiyose no jutsu del modelo
use App\Models\CaracteristicaModel;

class Sub_caracteristica extends Controller
{
	public function index()
	{
		$model = new Sub_caracteristicaModel();          // Creando el objeto
		$data['sub_caracteristica'] = $model->where('estado',1)
		->findAll();                      // sub_caracteristica contiene toda la tabla
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('subcaracteristica/listar', $data);
		echo view('includes/footer');
	}
	
	public function show( $id ) //pueden colocar un nombre diferente a show
	{
		$model = new Sub_caracteristicaModel();
		$data['sub_caracteristica'] = $model->where('estado', 1)
		->find( $id );
		$model = new CaracteristicaModel();
		$data['caracteristica'] = $model->where('estado', 1)
		->findAll();
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('subcaracteristica/form', $data);
		echo view('includes/footer');
	}

	public function create() //puede ser nombre diferente a create
	{
	    $data=array(
        	'sub_caracteristica'=>$_POST['sub_caracteristica'],
        	'id_caracteristica'=>$_POST['caracteristica'],
    );
        $model=new Sub_caracteristicaModel();
        $sub_caracteristica=$model-> insert($data);
        $data = json_encode($model->find($sub_caracteristica));
       return redirect()->to(base_url()."/index.php/Sub_caracteristica");
	}

	public function update( $id ) //puede ser nombre diferente a create
	{
		$data = array(
			'sub_caracteristica'=>$_POST['sub_caracteristica'],
        	'id_caracteristica'=>$_POST['caracteristica'],
		);
		$model = new Sub_caracteristicaModel();
		$sub_caracteristica = $model->where('estado', 1)
		->find($id);
		if(is_null($sub_caracteristica)){
			$data = json_encode("El Id no existe");
		}
		else{
			$sub_caracteristica = $model->update( $id, $data );
			$data = json_encode($model->find($id));
		}
		return redirect()->to(base_url()."/index.php/Sub_caracteristica");
		
	}

	public function delete( $id )
	{
		$data = array(
			'estado' => 0
		);
		$model = new Sub_caracteristicaModel();
		$sub_caracteristica = $model->where('estado', 1)
		->find($id);
		if(is_null($sub_caracteristica)){
			$data = json_encode("El Id no existe");
		}
		else{
			$sub_caracteristica = $model->update( $id, $data );
			$data = json_encode("Registro ".$id." eliminado");
		}
		return redirect()->to(base_url()."/index.php/Sub_caracteristica");
	}

	public function formulario()
	{
		$model = new CaracteristicaModel();
		$data['caracteristica'] = $model->where('estado', 1)
		->findAll();
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('subcaracteristica/form',$data);
		echo view('includes/footer');
	}
}