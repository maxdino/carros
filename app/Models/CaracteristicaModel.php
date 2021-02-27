<?php 
namespace App\Models;
use CodeIgniter\Model;

class CaracteristicaModel extends Model
{
	protected $table      = 'caracteristica';
	protected $primaryKey = 'id_caracteristica';
	protected $returnType     = 'array';
	protected $allowedFields = ['caracteristica','estado'];
}