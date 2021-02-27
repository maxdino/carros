<?php 
namespace App\Models;
use CodeIgniter\Model;

class ModeloModel extends Model
{
	protected $table      = 'modelo';
	protected $primaryKey = 'id_modelo';
	protected $returnType     = 'array';
	protected $allowedFields = ['modelo', 'imagen', 'estado'];
}