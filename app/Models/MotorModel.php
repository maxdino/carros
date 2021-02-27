<?php 
namespace App\Models;
use CodeIgniter\Model;

class MotorModel extends Model
{
	protected $table      = 'motor';
	protected $primaryKey = 'id_motor';
	protected $returnType     = 'array';
	protected $allowedFields = ['motor','estado'];
}