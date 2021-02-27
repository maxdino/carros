<?php 
namespace App\Models;
use CodeIgniter\Model;

class Sub_caracteristicaModel extends Model
{
	protected $table      = 'sub_caracteristica';
	protected $primaryKey = 'id_sub_caracteristica';
	protected $returnType     = 'array';
	protected $allowedFields = ['sub_caracteristica','id_caracteristica','estado'];
}