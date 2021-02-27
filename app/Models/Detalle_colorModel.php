<?php 
namespace App\Models;
use CodeIgniter\Model;

class Detalle_colorModel extends Model
{
	protected $table = "detalle_color";
	protected $primaryKey = ['id_color','id_vehiculo'];
  	protected $returnType = 'array';
   	protected $allowedFields = ['id_color', 'id_vehiculo'];
}   		