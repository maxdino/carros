<?php 
namespace App\Models;
use CodeIgniter\Model;

class HomeModel extends Model
{
	function marca(){
		return $this->db->table('marca ')
		->where("estado",1)
		->get()->getResultArray();
	}

	function modelo(){
		return $this->db->table('modelo')
		->where("estado",1)
		->get()->getResultArray();
	}

	function vehiculo(){
		return $this->db->table('vehiculo')
		->where("estado",1)
		->get()->getResultArray();
	}

	function fabricacion(){
		return $this->db->table('fabricacion')
		->where("estado",1)
		->get()->getResultArray();
	}

	function motor(){
		return $this->db->table('motor')
		->where("estado",1)
		->get()->getResultArray();
	}

	function vehiculo_seleccion($id){
		return $this->db->table('vehiculo')
		->where("estado",1)
		->where("id_vehiculo",$id)
		->get()->getResultArray();
	}

	function vehiculo_fabricacion($id){
		return $this->db->table('vehiculo')
		->where("estado",1)
		->where("id_fabricacion",$id)
		->get()->getResultArray();
	}

	function fabricacion_seleccion($id){
		return $this->db->table('fabricacion')
		->where("estado",1)
		->where("id_fabricacion",$id)
		->get()->getResultArray();
	}

	function vehiculo_marca($id){
		return $this->db->table('vehiculo')
		->where("estado",1)
		->where("id_marca",$id)
		->get()->getResultArray();
	}

	function vehiculo_modelo($id){
		return $this->db->table('vehiculo')
		->where("estado",1)
		->where("id_modelo",$id)
		->get()->getResultArray();
	}

	function detalle_color($id){
		return $this->db->table('detalle_color')
		->where("estado",1)
		->where("id_vehiculo",$id)
		->join("color","color.id_color=detalle_color.id_color")
		->get()->getResultArray();
	}

	function detalle_caracteristicas($id){
		return $this->db->table('detalle_sub_caracteristica')
		->where("estado",1)
		->where("id_vehiculo",$id)
		->join("sub_caracteristica","sub_caracteristica.id_sub_caracteristica=detalle_sub_caracteristica.id_sub_caracteristica")
		->get()->getResultArray();
	}
}