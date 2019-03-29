<?php
//clase para la conexion
	class conexion
	{
		//funcion que regrsa el estado de la conexion
		public function get_conexion()
		{
			//usuario de host para la conexion
			$user="root";
			//contraseña para la conexion con el host
			$pass="";
			//direccion del host
			$host="localhost";
			//nombre de la base de datos
			$db="sistema_nava";

			//se establece la conexion
			$conexion = new PDO("mysql:host=$host; dbname=$db;",$user, $pass);
			return $conexion;
		}
	}

?>







