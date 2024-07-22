<?php 
namespace App\Models; 
use CodeIgniter\Model;

Class usuario_model extends Model 
{     
	protected $table = 'usuarios'; //nombre de la tabla
	protected $primaryKey = 'id_usuario';            //identificador de la tabla     
	protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass','perfil_id','baja'];                                     //todos los campos de la tabla 
} 