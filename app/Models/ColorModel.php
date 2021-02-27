<?php 
namespace App\Models;
use CodeIgniter\Model;

class ColorModel extends Model
{
	protected $table      = 'color';
	protected $primaryKey = 'id_color';
	protected $returnType     = 'array';
	protected $allowedFields = ['color', 'codigo','estado'];
}