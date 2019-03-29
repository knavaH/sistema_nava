<?php
class acceso_usuario
{
	public function personal($Clv_Usuario, $Password)
	{
		require_once('clase_conexion.php');
		require_once('clase_querys_consultas.php');
		session_start();
		$_SESSION['Ruta_web'] = "http://localhost/sistema_nava/";
		$llamado = new querys_consultas();
		$filas = $llamado->ConsultaTabla_WHERE_2_AND("Clv_Usuario, Rol",'usuario','Clv_Usuario',$Clv_Usuario,'Password',$Password);
		if (count($filas) == 0)
		{
			Alumno($Clv_Usuario, $Password);
		}	
		else
		{
			foreach ($filas as $fila)
			{
				$Rol = $fila['Rol'];
				$Clv_Usuario = $fila['Clv_Usuario'];
				SELF::$Rol($Clv_Usuario);
			}	
		}	
	}
	public function Administrador($Clv_Usuario)
	{
		require_once('clase_conexion.php');
		require_once('clase_querys_consultas.php');
		$llamado = new querys_consultas();
		$filas = $llamado->ConsultaTabla_WHERE('Matricula, Nombres','administrador','Clv_Usuario', $Clv_Usuario);
		foreach ($filas as $fila)
		{
			$_SESSION['Matricula'] = $fila['Matricula'];
			$_SESSION['Nombre'] = $fila['Nombres'];
			$_SESSION['Rol'] = "Administrador"; 
			$_SESSION['ultimoAcceso']=time();
		}
		header("Location: pages/AD/");
	}
	public function ControlEscolar($Clv_Usuario)
	{
		$consultas = new querys_consultas();
		$filas = $consultas->ConsultaTabla('Nombres, Matricula','control_escolar');
		foreach ($filas as $fila)
		{
			$_SESSION['Matricula'] = $fila['Matricula'];
			$_SESSION['Nombre'] = $fila['Nombres'];
			$_SESSION['Rol'] = "ControlEscolar"; 
			$_SESSION['ultimoAcceso']=time();
		}
		header("Location: pages/CE/");
	}
	public function Coordinador($Clv_Usuario)
	{
		$consultas = new querys_consultas();
		$filas = $consultas->ConsultaTabla('Nombres, Matricula','coordinador');
		foreach ($filas as $fila)
		{
			$_SESSION['Matricula'] = $fila['Matricula'];
			$_SESSION['Nombre'] = $fila['Nombres'];
			$_SESSION['Rol'] = "Coordinador"; 
			$_SESSION['ultimoAcceso']=time();
		}
		header("Location: pages/CO/");
	}	
	public function Directivo($Clv_Usuario)
	{
		$consultas = new querys_consultas();
		$filas = $consultas->ConsultaTabla('Nombres, Matricula','directivo');
		foreach ($filas as $fila)
		{
			$_SESSION['Matricula'] = $fila['Matricula'];
			$_SESSION['Nombre'] = $fila['Nombres'];
			$_SESSION['Rol'] = "Directivo"; 
			$_SESSION['ultimoAcceso']=time();
		}
		header("Location: pages/DI/");
	}	
	public function Maestro($Clv_Usuario)
	{
		$consultas = new querys_consultas();
		$filas = $consultas->ConsultaTabla('Nombres, Matricula','maestro');
		foreach ($filas as $fila)
		{
			$_SESSION['Matricula'] = $fila['Matricula'];
			$_SESSION['Nombre'] = $fila['Nombres'];
			$_SESSION['Rol'] = "Maestro"; 
			$_SESSION['ultimoAcceso']=time();
		}
		header("Location: pages/MA/");
	}
	public function Alumno($Matricula_Usuario, $Password)
	{
		$consulta = new querys_consultas();
		$filas = $consulta->ConsultaTabla_WHERE_2_AND('Nombres, Matricula','alumno','Matricula',$Matricula_Usuario,'Password',$Password);
		if (count($filas) == 0)
		{
			echo "<script> alert('No se encontro usuario.'); window.location.href='".$_SESSION['Ruta_web']."'; </script>";
		}
		else
		{
			foreach ($filas as $fila)
			{
				$_SESSION['Matricula'] = $fila['Matricula'];
				$_SESSION['Nombre'] = $fila['Nombres'];
				$_SESSION['Rol'] = "Alumno"; 
				$_SESSION['ultimoAcceso']=time();
			}
			header("Location: pages/AL/");
		}	
	}
}