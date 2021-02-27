<?php namespace App\Controllers;
use App\Models\HomeModel; 
class Home extends BaseController
{
	public function index()
	{
		$model = new HomeModel();
		$data['marca'] = $model->marca();
		$data['modelo'] = $model->modelo();
		echo view('includes/header_portal');
		echo view('includes/navbar_portal');
		echo view('index',$data);
		echo view('includes/footer_portal');
	}

	public function tipo_vehiculo()
	{
		$model = new HomeModel();
		$data['modelo'] = $model->modelo();
		echo view('includes/header_portal');
		echo view('includes/navbar_portal');
		echo view('tipo_vehiculo',$data);
		echo view('includes/footer_portal');
	}


	public function marcas()
	{
		$model = new HomeModel();
		$data['marca'] = $model->marca();
		echo view('includes/header_portal');
		echo view('includes/navbar_portal');
		echo view('marca',$data);
		echo view('includes/footer_portal');
	}

	public function vehiculo()
	{
		$model = new HomeModel();
		$data['vehiculo'] = $model->vehiculo();
		echo view('includes/header_portal');
		echo view('includes/navbar_portal');
		echo view('vehiculo',$data);
		echo view('includes/footer_portal');
	}

	public function fabricacion()
	{
		$model = new HomeModel();
		$data['fabricacion'] = $model->fabricacion();
		echo view('includes/header_portal');
		echo view('includes/navbar_portal');
		echo view('fabricacion',$data);
		echo view('includes/footer_portal');
	}

	public function vehiculo_fabricacion($id)
	{
		$model = new HomeModel();
		$data['vehiculo'] = $model->vehiculo_fabricacion($id);
		echo view('includes/header_portal');
		echo view('includes/navbar_portal');
		echo view('vehiculo',$data);
		echo view('includes/footer_portal');
	}

	public function vehiculo_marca($id)
	{
		$model = new HomeModel();
		$data['vehiculo'] = $model->vehiculo_marca($id);
		echo view('includes/header_portal');
		echo view('includes/navbar_portal');
		echo view('vehiculo',$data);
		echo view('includes/footer_portal');
	}

	public function vehiculo_modelo($id)
	{
		$model = new HomeModel();
		$data['vehiculo'] = $model->vehiculo_modelo($id);
		echo view('includes/header_portal');
		echo view('includes/navbar_portal');
		echo view('vehiculo',$data);
		echo view('includes/footer_portal');
	}

	public function detalle_vehiculo($id)
	{
		$model = new HomeModel();
		$data['vehiculo'] = $model->vehiculo_seleccion($id);
		
		$data['marca'] = $model->marca();
		$data['motor'] = $model->motor();
		$data['modelo'] = $model->modelo();
		$data['fabricacion'] = $model->fabricacion();
		$data['detalle_color'] = $model->detalle_color($id);
		$data['detalle_caracteristicas'] = $model->detalle_caracteristicas($id);
		echo view('includes/header_portal');
		echo view('includes/navbar_portal');
		echo view('detalle_vehiculo',$data);
		echo view('includes/footer_portal');
	}
	//--------------------------------------------------------------------

}
