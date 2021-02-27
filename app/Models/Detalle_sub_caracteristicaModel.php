<?php 
namespace App\Models;
use CodeIgniter\Model;

class Detalle_sub_caracteristicaModel extends Model
{
	protected $table = "detalle_sub_caracteristica";
	protected $primaryKey = ['id_sub_caracteristica','id_vehiculo'];
  	protected $returnType = 'array';
   	protected $allowedFields = ['id_sub_caracteristica', 'id_vehiculo'];
}   		