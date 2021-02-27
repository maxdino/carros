<?php 
namespace App\Models;
use CodeIgniter\Model;

class ClientesModel extends Model
{
	protected $table      = 'clientes';
	protected $primaryKey = 'id';
	protected $returnType     = 'array';
	protected $allowedFields = ['nombre', 'correo', 'zip', 'telefono1', 'telefono2', 'pais', 'direccion', 'estado'];
}