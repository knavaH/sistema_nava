<?php
	class querys_consultas
	{
		public function ConsultaTabla($DatosAConsultar, $NombreTabla)
		{
			$rows = null;
			$modelo = new conexion(); 
			$conexion = $modelo->get_conexion(); 
			$sql = "SELECT $DatosAConsultar FROM $NombreTabla";
			$statement = $conexion->prepare($sql);
			$statement->execute();
			while($result = $statement->fetch())
			{
				$rows[]=$result;
			}
			return $rows;
		}
		public function ConsultaTabla_WHERE($DatosAConsultar, $NombreTabla, $Campo_1, $Variable_Campo_1)
		{
			$rows = null;
			$modelo = new conexion(); 
			$conexion = $modelo->get_conexion(); 
			$sql = "SELECT $DatosAConsultar FROM $NombreTabla WHERE $Campo_1 = :Campo_1 ";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo_1', $Variable_Campo_1);
			$statement->execute();
			while($result = $statement->fetch())
			{
				$rows[]=$result;
			}
			return $rows;
		}
		public function ConsultaTabla_WHERE_2_AND($DatosAConsultar, $NombreTabla, $Campo_1, $Variable_Campo_1,$Campo_2, $Variable_Campo_2)
		{
			$rows = null;
			$modelo = new conexion(); 
			$conexion = $modelo->get_conexion(); 
			$sql = "SELECT $DatosAConsultar FROM $NombreTabla WHERE $Campo_1 = :Campo_1 AND $Campo_2 = :Campo_2";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo_1',$Variable_Campo_1);
			$statement->bindParam(':Campo_2',$Variable_Campo_2);  
			$statement->execute();
			while($result = $statement->fetch())
			{
				$rows[]=$result;
			}
			return $rows;
		}
		public function Consulta_INNERJOIN_1($DatosAConsultar, $NombreTabla_1, $NombreTabla_2, $DatoEmpatado_1, $DatoEmpatado_2)
		{
			$rows = null;
			$modelo = new conexion(); 
			$conexion = $modelo->get_conexion(); 
			$sql = "SELECT $DatosAConsultar FROM $NombreTabla_1 
			INNER JOIN $NombreTabla_2 ON $NombreTabla_2.$DatoEmpatado_1 = $NombreTabla_1.$DatoEmpatado_2";
			$statement = $conexion->prepare($sql);
			$statement->execute();
			while($result = $statement->fetch())
			{
				$rows[]=$result;
			}
			return $rows;
		}
		public function Consulta_INNERJOIN_2_WHERE(
			$DatoAFiltrar, $NombreTabla_1, $NombreTabla_2, $NombreTabla_3, 
			$DatoEmpatado_1, $DatoEmpatado_2, $DatoEmpatado_3, $DatoEmpatado_4,
			$Condicion, $CampoAComparar, $ValorComparar)
		{
			$rows = null;
			$modelo = new conexion(); 
			$conexion = $modelo->get_conexion(); 
			$sql = "SELECT $DatoAFiltrar
			FROM $NombreTabla_1
			INNER JOIN $NombreTabla_2 ON $DatoEmpatado_1 = $DatoEmpatado_2
			INNER JOIN $NombreTabla_3 ON $DatoEmpatado_3 = $DatoEmpatado_4
			WHERE $CampoAComparar = :Campo_1";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':Campo_1', $ValorComparar);
			$statement->execute();
			while($result = $statement->fetch())
			{
				$rows[]=$result;
			}
			return $rows;
		}		
		public function ConsultarTablaDistinct($DatosAConsultar, $NombreTabla)
		{
			$rows = null;
			$modelo = new conexion(); 
			$conexion = $modelo->get_conexion(); 
			$sql = "SELECT DISTINCT $DatosAConsultar FROM $NombreTabla";
			$statement = $conexion->prepare($sql);
			$statement->execute();
			while($result = $statement->fetch())
			{
				$rows[]=$result;
			}
			return $rows;
		}
	}	
?>