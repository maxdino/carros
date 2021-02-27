<?php 
namespace App\Models;
use CodeIgniter\Model;

class VehiculoModel extends Model
{
	protected $table      = 'vehiculo';
	protected $primaryKey = 'id_vehiculo';
	protected $returnType     = 'array';
	protected $allowedFields = ['vehiculo','precio','imagen','id_fabricacion','id_modelo','id_marca','id_motor','estado'];

	function color_vehiculo($id){
		return $this->db->table('detalle_color dc')
		->where("dc.id_vehiculo",$id)
		->join("color as c","dc.id_color=c.id_color")
		->get()->getResultArray();
	}

	function caracteristica_vehiculo($id){
		return $this->db->table('detalle_sub_caracteristica dsc')
		->where("dsc.id_vehiculo",$id)
		->join("sub_caracteristica as sc","dsc.id_sub_caracteristica=sc.id_sub_caracteristica")
		->get()->getResultArray();
	}

	function eliminar_detalle_color($id){
		$db      = \Config\Database::connect();
		$builder = $db->table('detalle_color');
		$builder->where('id_vehiculo', $id);
		$builder->delete();
	}

	function eliminar_detalle_caracteristica($id){
		$db      = \Config\Database::connect();
		$builder = $db->table('detalle_sub_caracteristica');
		$builder->where('id_vehiculo', $id);
		$builder->delete();
	}
}