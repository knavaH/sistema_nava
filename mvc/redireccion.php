<?php
class redireccion
{
	public function acceso_usuario($Usuario, $Password)
	{
		require_once('controlador/acceso_usuario.php');
		$llamado = new acceso_usuario();
		$llamado->personal($_POST['Usuario'],$_POST['Password']);
	}
}
