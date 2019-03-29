<?php
	class querys_insersiones
	{
		public function InsertarTablaUnica_1_Campos($NombreTabla, $Campo1 = NULL, $ValorCampo1 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1) 
			VALUES (:Campo1)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);		
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
				return "registro echo";
			}
		}
		public function InsertarTablaUnica_2_campos($NombreTabla, $Campo1 = NULL, $ValorCampo1 = NULL, $Campo2 = NULL, $ValorCampo2 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1, $Campo2) 
			VALUES (:Campo1, :Campo2)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);
			$statement->bindParam(':Campo2', $ValorCampo2);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
				return "registro echo";
			}
		}	
		public function InsertarTablaUnica_3_campos($NombreTabla, $Campo1 = NULL, $ValorCampo1 = NULL, $Campo2 = NULL, $ValorCampo2 = NULL,
		$Campo3 = NULL, $ValorCampo3 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1, $Campo2, $Campo3) 
			VALUES (:Campo1, :Campo2, :Campo3)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);
			$statement->bindParam(':Campo2', $ValorCampo2);
			$statement->bindParam(':Campo3', $ValorCampo3);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
				return "registro echo";
			}
		}
		public function InsertarTablaUnica_4_campos($NombreTabla, $Campo1 = NULL, $ValorCampo1 = NULL, $Campo2 = NULL, $ValorCampo2 = NULL, 
		$Campo3 = NULL, $ValorCampo3 = NULL, $Campo4 = NULL, $ValorCampo4 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1, $Campo2, $Campo3, $Campo4) 
			VALUES (:Campo1, :Campo2, :Campo3, :Campo4)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);
			$statement->bindParam(':Campo2', $ValorCampo2);
			$statement->bindParam(':Campo3', $ValorCampo3);
			$statement->bindParam(':Campo4', $ValorCampo4);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
				
				return "registro echo";
			}
		}
		public function InsertarTablaUnica_5_campos($NombreTabla, $Campo1 = NULL, $ValorCampo1 = NULL, $Campo2 = NULL, $ValorCampo2 = NULL, 
		$Campo3 = NULL, $ValorCampo3 = NULL, $Campo4 = NULL, $ValorCampo4 = NULL, $Campo5 = NULL, $ValorCampo5 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1, $Campo2, $Campo3, $Campo4,$Campo5) 
			VALUES (:Campo1, :Campo2, :Campo3, :Campo4, :Campo5)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);
			$statement->bindParam(':Campo2', $ValorCampo2);
			$statement->bindParam(':Campo3', $ValorCampo3);
			$statement->bindParam(':Campo4', $ValorCampo4);
			$statement->bindParam(':Campo5', $ValorCampo5);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
				
				return "registro echo";
			}
		}
		public function InsertarTablaUnica_6_campos($NombreTabla, $Campo1 = NULL, $ValorCampo1 = NULL, $Campo2 = NULL, $ValorCampo2 = NULL, 
		$Campo3 = NULL, $ValorCampo3 = NULL, $Campo4 = NULL, $ValorCampo4 = NULL, $Campo5 = NULL, $ValorCampo5 = NULL, 
		$Campo6 = NULL, $ValorCampo6 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1, $Campo2, $Campo3, $Campo4, $Campo5, $Campo6) 
			VALUES (:Campo1, :Campo2, :Campo3, :Campo4, :Campo5, :Campo6)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);
			$statement->bindParam(':Campo2', $ValorCampo2);
			$statement->bindParam(':Campo3', $ValorCampo3);
			$statement->bindParam(':Campo4', $ValorCampo4);
			$statement->bindParam(':Campo5', $ValorCampo5);
			$statement->bindParam(':Campo6', $ValorCampo6);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
				
				return "registro echo";
			}
		}
		public function InsertarTablaUnica_7_campos($NombreTabla, $Campo1 = NULL, $ValorCampo1 = NULL, $Campo2 = NULL, $ValorCampo2 = NULL, 
		$Campo3 = NULL, $ValorCampo3 = NULL, $Campo4 = NULL, $ValorCampo4 = NULL, $Campo5 = NULL, $ValorCampo5 = NULL, 
		$Campo6 = NULL, $ValorCampo6 = NULL, $Campo7 = NULL, $ValorCampo7 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1, $Campo2,$Campo3, $Campo4,$Campo5, $Campo6,$Campo7) 
			VALUES (:Campo1, :Campo2, :Campo3, :Campo4, :Campo5, :Campo6, :Campo7)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);
			$statement->bindParam(':Campo2', $ValorCampo2);
			$statement->bindParam(':Campo3', $ValorCampo3);
			$statement->bindParam(':Campo4', $ValorCampo4);
			$statement->bindParam(':Campo5', $ValorCampo5);
			$statement->bindParam(':Campo6', $ValorCampo6);
			$statement->bindParam(':Campo7', $ValorCampo7);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
				
				return "registro echo";
			}
		}
		public function InsertarTablaUnica_8_campos($NombreTabla, $Campo1 = NULL, $ValorCampo1 = NULL, $Campo2 = NULL, $ValorCampo2 = NULL, 
		$Campo3 = NULL, $ValorCampo3 = NULL, $Campo4 = NULL, $ValorCampo4 = NULL, $Campo5 = NULL, $ValorCampo5 = NULL, 
		$Campo6 = NULL, $ValorCampo6 = NULL, $Campo7 = NULL, $ValorCampo7 = NULL, $Campo8 = NULL, $ValorCampo8 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1, $Campo2,$Campo3, $Campo4,$Campo5, $Campo6,$Campo7, $Campo8) 
			VALUES (:Campo1, :Campo2, :Campo3, :Campo4, :Campo5, :Campo6, :Campo7, :Campo8)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);
			$statement->bindParam(':Campo2', $ValorCampo2);
			$statement->bindParam(':Campo3', $ValorCampo3);
			$statement->bindParam(':Campo4', $ValorCampo4);
			$statement->bindParam(':Campo5', $ValorCampo5);
			$statement->bindParam(':Campo6', $ValorCampo6);
			$statement->bindParam(':Campo7', $ValorCampo7);
			$statement->bindParam(':Campo8', $ValorCampo8);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
				
				return "registro echo";
			}
		}
		public function InsertarTablaUnica_9_campos($NombreTabla,$Campo1 = NULL, $ValorCampo1 = NULL, $Campo2 = NULL, $ValorCampo2 = NULL, 
		$Campo3 = NULL, $ValorCampo3 = NULL, $Campo4 = NULL, $ValorCampo4 = NULL, $Campo5 = NULL, $ValorCampo5 = NULL, 
		$Campo6 = NULL, $ValorCampo6 = NULL, $Campo7 = NULL, $ValorCampo7 = NULL, $Campo8 = NULL, $ValorCampo8 = NULL, 
		$Campo9 = NULL, $ValorCampo9 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1, $Campo2,$Campo3, $Campo4,$Campo5, $Campo6,$Campo7, $Campo8, $Campo9) 
			VALUES (:Campo1, :Campo2, :Campo3, :Campo4, :Campo5, :Campo6, :Campo7, :Campo8, :Campo9)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);
			$statement->bindParam(':Campo2', $ValorCampo2);
			$statement->bindParam(':Campo3', $ValorCampo3);
			$statement->bindParam(':Campo4', $ValorCampo4);
			$statement->bindParam(':Campo5', $ValorCampo5);
			$statement->bindParam(':Campo6', $ValorCampo6);
			$statement->bindParam(':Campo7', $ValorCampo7);
			$statement->bindParam(':Campo8', $ValorCampo8);
			$statement->bindParam(':Campo9', $ValorCampo9);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
				
				return "registro echo";
			}
		}
		public function InsertarTablaUnica_10_campos($NombreTabla,$Campo1 = NULL, $ValorCampo1 = NULL, $Campo2 = NULL, $ValorCampo2 = NULL, 
		$Campo3 = NULL, $ValorCampo3 = NULL, $Campo4 = NULL, $ValorCampo4 = NULL, $Campo5 = NULL, $ValorCampo5 = NULL, 
		$Campo6 = NULL, $ValorCampo6 = NULL, $Campo7 = NULL, $ValorCampo7 = NULL, $Campo8 = NULL, $ValorCampo8 = NULL, 
		$Campo9 = NULL, $ValorCampo9 = NULL, $Campo10 = NULL, $ValorCampo10 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1, $Campo2,$Campo3, $Campo4,$Campo5, $Campo6,$Campo7, $Campo8, $Campo9, $Campo10) 
			VALUES (:Campo1, :Campo2, :Campo3, :Campo4, :Campo5, :Campo6, :Campo7, :Campo8, :Campo9, :Campo10)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);
			$statement->bindParam(':Campo2', $ValorCampo2);
			$statement->bindParam(':Campo3', $ValorCampo3);
			$statement->bindParam(':Campo4', $ValorCampo4);
			$statement->bindParam(':Campo5', $ValorCampo5);
			$statement->bindParam(':Campo6', $ValorCampo6);
			$statement->bindParam(':Campo7', $ValorCampo7);
			$statement->bindParam(':Campo8', $ValorCampo8);
			$statement->bindParam(':Campo9', $ValorCampo9);
			$statement->bindParam(':Campo10', $ValorCampo10);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
				
				return "registro echo";
			}
		}
		public function InsertarTablaUnica_11_campos($NombreTabla,$Campo1 = NULL, $ValorCampo1 = NULL, $Campo2 = NULL, $ValorCampo2 = NULL, 
		$Campo3 = NULL, $ValorCampo3 = NULL, $Campo4 = NULL, $ValorCampo4 = NULL, $Campo5 = NULL, $ValorCampo5 = NULL, 
		$Campo6 = NULL, $ValorCampo6 = NULL, $Campo7 = NULL, $ValorCampo7 = NULL, $Campo8 = NULL, $ValorCampo8 = NULL, 
		$Campo9 = NULL, $ValorCampo9 = NULL, $Campo10 = NULL, $ValorCampo10 = NULL, $Campo11 = NULL, $ValorCampo11 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1, $Campo2,$Campo3, $Campo4,$Campo5, $Campo6,$Campo7, $Campo8, $Campo9, $Campo10, $Campo11) 
			VALUES (:Campo1, :Campo2, :Campo3, :Campo4, :Campo5, :Campo6, :Campo7, :Campo8, :Campo9, :Campo10, :Campo11)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);
			$statement->bindParam(':Campo2', $ValorCampo2);
			$statement->bindParam(':Campo3', $ValorCampo3);
			$statement->bindParam(':Campo4', $ValorCampo4);
			$statement->bindParam(':Campo5', $ValorCampo5);
			$statement->bindParam(':Campo6', $ValorCampo6);
			$statement->bindParam(':Campo7', $ValorCampo7);
			$statement->bindParam(':Campo8', $ValorCampo8);
			$statement->bindParam(':Campo9', $ValorCampo9);
			$statement->bindParam(':Campo10', $ValorCampo10);
			$statement->bindParam(':Campo11', $ValorCampo11);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
				return "registro echo";
			}
		}
		public function InsertarTablaUnica_12_campos($NombreTabla,$Campo1 = NULL, $ValorCampo1 = NULL, $Campo2 = NULL, $ValorCampo2 = NULL, 
		$Campo3 = NULL, $ValorCampo3 = NULL, $Campo4 = NULL, $ValorCampo4 = NULL, $Campo5 = NULL, $ValorCampo5 = NULL, 
		$Campo6 = NULL, $ValorCampo6 = NULL, $Campo7 = NULL, $ValorCampo7 = NULL, $Campo8 = NULL, $ValorCampo8 = NULL, 
		$Campo9 = NULL, $ValorCampo9 = NULL, $Campo10 = NULL, $ValorCampo10 = NULL, $Campo11 = NULL, $ValorCampo11 = NULL,
		$Campo12 = NULL, $ValorCampo12 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1, $Campo2, $Campo3, $Campo4, $Campo5, $Campo6, $Campo7, $Campo8, $Campo9, $Campo10, $Campo11, $Campo12) 
			VALUES (:Campo1, :Campo2, :Campo3, :Campo4, :Campo5, :Campo6, :Campo7, :Campo8, :Campo9, :Campo10, :Campo11, :Campo12)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);
			$statement->bindParam(':Campo2', $ValorCampo2);
			$statement->bindParam(':Campo3', $ValorCampo3);
			$statement->bindParam(':Campo4', $ValorCampo4);
			$statement->bindParam(':Campo5', $ValorCampo5);
			$statement->bindParam(':Campo6', $ValorCampo6);
			$statement->bindParam(':Campo7', $ValorCampo7);
			$statement->bindParam(':Campo8', $ValorCampo8);
			$statement->bindParam(':Campo9', $ValorCampo9);
			$statement->bindParam(':Campo10', $ValorCampo10);
			$statement->bindParam(':Campo11', $ValorCampo11);
			$statement->bindParam(':Campo12', $ValorCampo12);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
				
				return "registro echo";
			}
		}	
		public function InsertarTablaUnica_13_campos($NombreTabla,$Campo1 = NULL, $ValorCampo1 = NULL, $Campo2 = NULL, $ValorCampo2 = NULL, 
		$Campo3 = NULL, $ValorCampo3 = NULL, $Campo4 = NULL, $ValorCampo4 = NULL, $Campo5 = NULL, $ValorCampo5 = NULL, 
		$Campo6 = NULL, $ValorCampo6 = NULL, $Campo7 = NULL, $ValorCampo7 = NULL, $Campo8 = NULL, $ValorCampo8 = NULL, 
		$Campo9 = NULL, $ValorCampo9 = NULL, $Campo10 = NULL, $ValorCampo10 = NULL, $Campo11 = NULL, $ValorCampo11 = NULL,
		$Campo12 = NULL, $ValorCampo12 = NULL, $Campo13 = NULL, $ValorCampo13 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1, $Campo2,$Campo3, $Campo4,$Campo5, $Campo6,$Campo7, $Campo8, $Campo9, $Campo10, $Campo11, $Campo12, $Campo13) 
			VALUES (:Campo1, :Campo2, :Campo3, :Campo4, :Campo5, :Campo6, :Campo7, :Campo8, :Campo9, :Campo10, :Campo11, :Campo12, :Campo13)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);
			$statement->bindParam(':Campo2', $ValorCampo2);
			$statement->bindParam(':Campo3', $ValorCampo3);
			$statement->bindParam(':Campo4', $ValorCampo4);
			$statement->bindParam(':Campo5', $ValorCampo5);
			$statement->bindParam(':Campo6', $ValorCampo6);
			$statement->bindParam(':Campo7', $ValorCampo7);
			$statement->bindParam(':Campo8', $ValorCampo8);
			$statement->bindParam(':Campo9', $ValorCampo9);
			$statement->bindParam(':Campo10', $ValorCampo10);
			$statement->bindParam(':Campo11', $ValorCampo11);
			$statement->bindParam(':Campo12', $ValorCampo12);
			$statement->bindParam(':Campo13', $ValorCampo13);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{	
				return "registro echo";
			}
		}
		public function InsertarTablaUnica_18_campos($NombreTabla,$Campo1 = NULL, $ValorCampo1 = NULL, $Campo2 = NULL, $ValorCampo2 = NULL, 
		$Campo3 = NULL, $ValorCampo3 = NULL, $Campo4 = NULL, $ValorCampo4 = NULL, $Campo5 = NULL, $ValorCampo5 = NULL, 
		$Campo6 = NULL, $ValorCampo6 = NULL, $Campo7 = NULL, $ValorCampo7 = NULL, $Campo8 = NULL, $ValorCampo8 = NULL, 
		$Campo9 = NULL, $ValorCampo9 = NULL, $Campo10 = NULL, $ValorCampo10 = NULL, $Campo11 = NULL, $ValorCampo11 = NULL,
		$Campo12 = NULL, $ValorCampo12 = NULL, $Campo13 = NULL, $ValorCampo13 = NULL, $Campo14 = NULL, $ValorCampo14 = NULL,
		$Campo15 = NULL, $ValorCampo15 = NULL, $Campo16 = NULL, $ValorCampo16 = NULL, $Campo17 = NULL, $ValorCampo17 = NULL,
		$Campo18 = NULL, $ValorCampo18 = NULL)
		{
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "INSERT INTO $NombreTabla ($Campo1, $Campo2,$Campo3, $Campo4,$Campo5, $Campo6,$Campo7, $Campo8, $Campo9, $Campo10, $Campo11, $Campo12, $Campo13, $Campo14, $Campo15, $Campo16, $Campo17, $Campo18) 
			VALUES (:Campo1, :Campo2, :Campo3, :Campo4, :Campo5, :Campo6, :Campo7, :Campo8, :Campo9, :Campo10, :Campo11, :Campo12, :Campo13, :Campo14, :Campo15, :Campo16, :Campo17, :Campo18)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo1', $ValorCampo1);
			$statement->bindParam(':Campo2', $ValorCampo2);
			$statement->bindParam(':Campo3', $ValorCampo3);
			$statement->bindParam(':Campo4', $ValorCampo4);
			$statement->bindParam(':Campo5', $ValorCampo5);
			$statement->bindParam(':Campo6', $ValorCampo6);
			$statement->bindParam(':Campo7', $ValorCampo7);
			$statement->bindParam(':Campo8', $ValorCampo8);
			$statement->bindParam(':Campo9', $ValorCampo9);
			$statement->bindParam(':Campo10', $ValorCampo10);
			$statement->bindParam(':Campo11', $ValorCampo11);
			$statement->bindParam(':Campo12', $ValorCampo12);
			$statement->bindParam(':Campo13', $ValorCampo13);
			$statement->bindParam(':Campo14', $ValorCampo14);
			$statement->bindParam(':Campo15', $ValorCampo15);
			$statement->bindParam(':Campo16', $ValorCampo16);
			$statement->bindParam(':Campo17', $ValorCampo17);
			$statement->bindParam(':Campo18', $ValorCampo18);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{	
				return "registro echo";
			}
		}
		
		public function insertCliente($Nombre, $Apellido, $Telefono, $Correo, $plan)
		{
			//se llama la clase de la conexion
			$modelo = new conexion();
 			//la conexion sera igual a lo que regrese la funcion
			$conexion = $modelo->get_conexion();
			//se estipula el query
			$status = 'Activo';
			$Password = $Nombre[0].$Apellido;
			$sql = "INSERT INTO clientes (Nombre, Apellido, Telefono, Correo, Status, Password, Id_plan) 
			VALUES (:Nombre, :Apellido, :Telefono, :Correo, :Status, :Password, :Id_plan )";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Nombre', $Nombre);
			$statement->bindParam(':Apellido', $Apellido);
			$statement->bindParam(':Telefono', $Telefono);
			$statement->bindParam(':Correo', $Correo);
			$statement->bindParam(':Status', $status);
			$statement->bindParam(':Password', $Password);
			$statement->bindParam(':Id_plan', $plan);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
			
				return "registro echo";
			}
		}
		
		public function insertEntrada($fecha, $hora, $Matricula, $MatUsuario)
		{
			//se llama la clase de la conexion
			$modelo = new conexion();
 			//la conexion sera igual a lo que regrese la funcion
			$conexion = $modelo->get_conexion();
			//se estipula el query
			$sql = "INSERT INTO entrada (Fecha, hora_entrada, Matricula_Cliente, Matricula_usuario) 
			VALUES (:Fecha, :hora_entrada, :Matricula_Cliente, :Matricula_usuario)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Fecha', $fecha);
			$statement->bindParam(':hora_entrada', $hora);
			$statement->bindParam(':Matricula_Cliente', $Matricula);
			$statement->bindParam(':Matricula_usuario', $MatUsuario);
			$statement->execute();
			if(!$statement)
			{
				return "error al insertar";
			}
			else
			{
				
				return "registro echo";
			}
		}
		

	}
		
?>