<?php 
namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model
{
	protected $table      = 'usuario';
	protected $primaryKey = 'id_usuario';
	protected $returnType     = 'array';
	protected $allowedFields = ['nombre','apellido','nick','clave','direccion','dni','imagen','estado'];

	function validar($usuario,$clave){
		return $this->db->table('usuario u')
		->where("u.estado",1)
		->where("u.nick",$usuario)
		->where("u.clave",$clave)
		->get()->getResultArray();
	}
}