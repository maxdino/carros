<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\VehiculoModel; // Kuchiyose no jutsu del modelo
use App\Models\ColorModel;
use App\Models\FabricacionModel;
use App\Models\ModeloModel;
use App\Models\MotorModel;
use App\Models\Sub_caracteristicaModel;
use App\Models\MarcaModel;
use App\Models\Detalle_colorModel;
use App\Models\Detalle_sub_caracteristicaModel;

class Vehiculo extends Controller
{
	public function index()
	{
		$model = new VehiculoModel();          // Creando el objeto
		$data['vehiculo'] = $model->where('estado',1)
		->findAll();                      // vehiculo contiene toda la tabla
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('vehiculo/listar', $data);
		echo view('includes/footer');
	}
	public function show( $id ) //pueden colocar un nombre diferente a show
	{
		$model = new VehiculoModel();
		$data['vehiculo'] = $model->where('estado', 1)
		->find( $id );
		$model = new VehiculoModel();
		$data['color_vehiculo'] = $model->color_vehiculo($id);
		$model = new VehiculoModel();
		$data['caracteristica_vehiculo'] = $model->caracteristica_vehiculo($id);
		$model = new ColorModel();
		$data['color'] = $model->where('estado', 1)
		->findAll();
		$model = new FabricacionModel();
		$data['fabricacion'] = $model->where('estado', 1)
		->findAll();
		$model = new ModeloModel();
		$data['modelo'] = $model->where('estado', 1)
		->findAll();
		$model = new MotorModel();
		$data['motor'] = $model->where('estado', 1)
		->findAll();
		$model = new Sub_caracteristicaModel();
		$data['sub_caracteristica'] = $model->where('estado', 1)
		->findAll();
		$model = new MarcaModel();
		$data['marca'] = $model->where('estado', 1)
		->findAll();
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('vehiculo/form', $data);
		echo view('includes/footer');
	}
	public function create() //puede ser nombre diferente a create
	{
		$cadena = str_replace(' ','', $_FILES['imagen']['name']);
		$imagen = "vehiculo/".$cadena;  
		move_uploaded_file($_FILES['imagen']['tmp_name'], 'public/fotos/'.$imagen);
		$data=array(
			'vehiculo'=>$_POST['vehiculo'],
			'precio'=>$_POST['precio'],
			'imagen'=>$imagen,
			'id_fabricacion'=>$_POST['fabricacion'],
			'id_modelo'=>$_POST['modelo'],
			'id_marca'=>$_POST['marca'],
			'id_motor'=>$_POST['motor'],

		);
		$model=new VehiculoModel();
		$vehiculo=$model-> insert($data);
		for ($i=0; $i < count($_POST['color']); $i++) { 
			$data=array(
				'id_color'=>$_POST['color'][$i],
				'id_vehiculo'=>$vehiculo,
			);
			$model = new Detalle_colorModel();
			$detalle=$model-> insert($data);
		}
		for ($i=0; $i < count($_POST['caracteristica']); $i++) { 
			$data=array(
				'id_sub_caracteristica'=>$_POST['caracteristica'][$i],
				'id_vehiculo'=>$vehiculo,
			);
			$model = new Detalle_sub_caracteristicaModel();
			$detalle=$model-> insert($data);
		}
		return redirect()->to(base_url()."/index.php/vehiculo");
	}
	public function update( $id ) //puede ser nombre diferente a create
	{
		if ($_FILES['imagen']['name']==null) {
			$imagen = $_POST['imagen_valida'];
		}else{
			$cadena = str_replace(' ','', $_FILES['imagen']['name']);
			$imagen = "vehiculo/".$cadena;  
			move_uploaded_file($_FILES['imagen']['tmp_name'], 'public/fotos/'.$imagen);
		}
		$data=array(
			'vehiculo'=>$_POST['vehiculo'],
			'precio'=>$_POST['precio'],
			'imagen'=>$imagen,
			'id_fabricacion'=>$_POST['fabricacion'],
			'id_modelo'=>$_POST['modelo'],
			'id_marca'=>$_POST['marca'],
			'id_motor'=>$_POST['motor'],

		);
		$model = new VehiculoModel();
		$vehiculo = $model->where('estado', 1)
		->find($id);
		if(is_null($vehiculo)){
			$data = json_encode("El Id no existe");
		}
		else{
			$vehiculo = $model->update( $id, $data );

			$model->eliminar_detalle_color($id);
			$model->eliminar_detalle_caracteristica($id);

			for ($i=0; $i < count($_POST['color']); $i++) { 
				$data=array(
					'id_color'=>$_POST['color'][$i],
					'id_vehiculo'=>$id,
				);
				$model = new Detalle_colorModel();
				$detalle=$model-> insert($data);
			}
			for ($i=0; $i < count($_POST['caracteristica']); $i++) { 
				$data=array(
					'id_sub_caracteristica'=>$_POST['caracteristica'][$i],
					'id_vehiculo'=>$id,
				);
				$model = new Detalle_sub_caracteristicaModel();
				$detalle=$model-> insert($data);
			}
			return redirect()->to(base_url()."/index.php/vehiculo");
		}
		
		
	}
	public function delete( $id )
	{
		$data = array(
			'estado' => 0
		);
		$model = new VehiculoModel();
		$vehiculo = $model->where('estado', 1)
		->find($id);
		if(is_null($vehiculo)){
			$data = json_encode("El Id no existe");
		}
		else{
			$vehiculo = $model->update( $id, $data );
			$data = json_encode("Registro ".$id." eliminado");
		}
		return redirect()->to(base_url()."/index.php/vehiculo");
	}

	public function formulario()
	{
		$model = new ColorModel();
		$data['color'] = $model->where('estado', 1)
		->findAll();
		$model = new FabricacionModel();
		$data['fabricacion'] = $model->where('estado', 1)
		->findAll();
		$model = new ModeloModel();
		$data['modelo'] = $model->where('estado', 1)
		->findAll();
		$model = new MotorModel();
		$data['motor'] = $model->where('estado', 1)
		->findAll();
		$model = new Sub_caracteristicaModel();
		$data['sub_caracteristica'] = $model->where('estado', 1)
		->findAll();
		$model = new MarcaModel();
		$data['marca'] = $model->where('estado', 1)
		->findAll();
		echo view('includes/header');
		echo view('includes/navbar');
		echo view('vehiculo/form',$data);
		echo view('includes/footer');
	}

}