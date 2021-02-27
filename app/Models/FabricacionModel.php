<?php 
namespace App\Models;
use CodeIgniter\Model;

class FabricacionModel extends Model
{
	protected $table      = 'fabricacion';
	protected $primaryKey = 'id_fabricacion';
	protected $returnType     = 'array';
	protected $allowedFields = ['fabricacion', 'annio','imagen','estado'];
}