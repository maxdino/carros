<?php 
namespace App\Models;
use CodeIgniter\Model;

class MarcaModel extends Model
{
	protected $table      = 'marca';
	protected $primaryKey = 'id_marca';
	protected $returnType     = 'array';
	protected $allowedFields = ['marca','imagen','estado'];
}