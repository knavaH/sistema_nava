<?php
class consultas_administracion
{
	public function ConsultarAdministrador() //funcion para consultar a todos los administradores
	{	
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla('*', 'administrador');
		if (count($filas) == 0)
		{
			echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td</td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></1td>";
				echo "<td></td>";
				echo "<td></td>";
			echo "</tr>"; 
		}
		else
		{
			foreach ($filas as $fila)
			{  
				echo "<tr>";
					echo "<td>".$fila['Matricula']."</td>";
					echo "<td>".$fila['Nombres']." ".$fila['Apellido_1']." ".$fila['Apellido_2']."</td>";
					echo "<td>".$fila['Correo']."</td>";
					echo "<td>".$fila['Telefono']."</td>";
					echo "<td>".$fila['Movil']."</td>";
					echo "<td>".$fila['CURP']."</td>";
					echo "<td>".$fila['Calle']."</td>";
					echo "<td>".$fila['Numero_Exterior']."</td>";
					echo "<td>".$fila['Numero_Interior']."</td>";
					echo "<td>".$fila['Colonia']."</td>";
					echo "<td>".$fila['Municipio']."</td>";
					echo "<td>".$fila['Clv_Usuario']."</td>";
				echo "</tr>";
			}
		}
	}
	public function ConsultarCoordinadores() //funcion para consultar a todos los coordinadores
	{	
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla('*', 'coordinador');
		if (count($filas) == 0)
		{
			echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td</td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></1td>";
				echo "<td></td>";
				echo "<td></td>";
			echo "</tr>"; 
		}
		else
		{
			foreach ($filas as $fila)
			{  
				echo "<tr>";
					echo "<td>".$fila['Matricula']."</td>";
					echo "<td>".$fila['Nombres']." ".$fila['Apellido_1']." ".$fila['Apellido_2']."</td>";
					echo "<td>".$fila['Correo']."</td>";
					echo "<td>".$fila['Telefono']."</td>";
					echo "<td>".$fila['Movil']."</td>";
					echo "<td>".$fila['CURP']."</td>";
					echo "<td>".$fila['Calle']."</td>";
					echo "<td>".$fila['Numero_Exterior']."</td>";
					echo "<td>".$fila['Numero_Interior']."</td>";
					echo "<td>".$fila['Colonia']."</td>";
					echo "<td>".$fila['Municipio']."</td>";
					echo "<td>".$fila['Clv_Usuario']."</td>";
				echo "</tr>";
			}
		}
	}
	public function ConsultarDocente() //funcion para consultar a todos los docentes
	{	
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla('*', 'maestro');
		if (count($filas) == 0)
		{
			echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td</td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></1td>";
				echo "<td></td>";
				echo "<td></td>";
			echo "</tr>"; 
		}
		else
		{
			foreach ($filas as $fila)
			{  
				echo "<tr>";
					echo "<td>".$fila['Matricula']."</td>";
					echo "<td>".$fila['Nombres']." ".$fila['Apellido_1']." ".$fila['Apellido_2']."</td>";
					echo "<td>".$fila['Correo']."</td>";
					echo "<td>".$fila['Telefono']."</td>";
					echo "<td>".$fila['Movil']."</td>";
					echo "<td>".$fila['CURP']."</td>";
					echo "<td>".$fila['Calle']."</td>";
					echo "<td>".$fila['Numero_Exterior']."</td>";
					echo "<td>".$fila['Numero_Interior']."</td>";
					echo "<td>".$fila['Colonia']."</td>";
					echo "<td>".$fila['Municipio']."</td>";
					echo "<td>".$fila['Clv_Usuario']."</td>";
				echo "</tr>";
			}
		}
	}
	public function ConsultarDirectivo() //funcion para consultar a todos los directivos
	{	
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla('*', 'directivo');
		if (count($filas) == 0)
		{
			echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td</td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></1td>";
				echo "<td></td>";
				echo "<td></td>";
			echo "</tr>"; 
		}
		else
		{
			foreach ($filas as $fila)
			{  
				echo "<tr>";
					echo "<td>".$fila['Matricula']."</td>";
					echo "<td>".$fila['Nombres']." ".$fila['Apellido_1']." ".$fila['Apellido_2']."</td>";
					echo "<td>".$fila['Correo']."</td>";
					echo "<td>".$fila['Telefono']."</td>";
					echo "<td>".$fila['Movil']."</td>";
					echo "<td>".$fila['CURP']."</td>";
					echo "<td>".$fila['Calle']."</td>";
					echo "<td>".$fila['Numero_Exterior']."</td>";
					echo "<td>".$fila['Numero_Interior']."</td>";
					echo "<td>".$fila['Colonia']."</td>";
					echo "<td>".$fila['Municipio']."</td>";
					echo "<td>".$fila['Clv_Usuario']."</td>";
				echo "</tr>";
			}
		}
	}
	public function ConsultarBiblioteca() //funcion para consultar  a todo el personal de biblioteca
	{	    
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla('*', 'libreria');
		if (count($filas) == 0)
		{
			echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td</td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></1td>";
				echo "<td></td>";
				echo "<td></td>";
			echo "</tr>"; 
		}
		else
		{
			foreach ($filas as $fila)
			{  
				echo "<tr>";
					echo "<td>".$fila['Matricula']."</td>";
					echo "<td>".$fila['Nombres']." ".$fila['Apellido_1']." ".$fila['Apellido_2']."</td>";
					echo "<td>".$fila['Correo']."</td>";
					echo "<td>".$fila['Telefono']."</td>";
					echo "<td>".$fila['Movil']."</td>";
					echo "<td>".$fila['CURP']."</td>";
					echo "<td>".$fila['Calle']."</td>";
					echo "<td>".$fila['Numero_Exterior']."</td>";
					echo "<td>".$fila['Numero_Interior']."</td>";
					echo "<td>".$fila['Colonia']."</td>";
					echo "<td>".$fila['Municipio']."</td>";
					echo "<td>".$fila['Clv_Usuario']."</td>";
				echo "</tr>";
			}
		}
	}
	public function ConsultarCoordinador() //funcion para mostrar los coordinadores en la interfaz de nueva carrera
	{	
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla('Matricula, Nombres, Apellido_1, Apellido_2', 'coordinador');
		if (count($filas) == 0)
		{
			echo '<option value=""></option>';
		}
		else
		{
			foreach ($filas as $fila)
			{  
				$Matricula = $fila["Matricula"];
				echo '<option value= "'.$Matricula.'">'.$Matricula."  - ".$fila["Nombres"]." ".$fila["Apellido_1"]." ".$fila["Apellido_2"].'</option>';
			}
		}
	}
	public function ConsultarCarreras() //funcion para mostrar todas las carreras
	{	    
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla('*', 'carrera');
		if (count($filas) == 0)
		{
			echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
			echo "</tr>"; 
		}
		else
		{
			foreach ($filas as $fila)
			{  
				echo "<tr>";
					echo "<td>".$fila['Clave']."</td>";
					echo "<td>".$fila['Nombre']."</td>";
					echo "<td>".$fila['Creditos']."</td>";
					echo "<td>".$fila['Creditos_Minimos_Servicio_Social']."</td>";
					echo "<td>".SELF::ConsultarCoordinadorDesignado($fila['Matricula_Coordinador'])."</td>";
				echo "</tr>";
			}
		}
	}	
	public function ConsultarCoordinadorDesignado($Matricula) //funcion para mostrar que coordinador esta designado en que carrera
	{	    
		$querys = new querys_consultas();
		$filas = $querys->ConsultaTabla_WHERE('Matricula, Nombres, Apellido_1, Apellido_2', 'coordinador','Matricula',$Matricula);
		$Datos = "";
		foreach ($filas as $fila)
		{  
			$Datos = $fila['Matricula']." - ".$fila['Nombres']." ".$fila['Apellido_1']." ".$fila['Apellido_2'];
		}
		return $Datos;
	}
	public function ConsultarCarrera() 
	{	
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla('Clave, Nombre', 'carrera');
		if (count($filas) == 0)
		{
			echo '<option value=""></option>';
		}
		else
		{
			foreach ($filas as $fila)
			{  
				$Clave = $fila["Clave"];
				echo '<option value= "'.$Clave.'">'.$Clave."  - ".$fila["Nombre"].'</option>';
			}
		}
	}	
	public function ConsultarCarreras_link()
	{	    
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla('Clave, Nombre', 'carrera');
		if (count($filas) == 0)
		{
			echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
			echo "</tr>"; 
		}
		else
		{
			foreach ($filas as $fila)
			{  
				echo "<tr>";
					echo "<td>".$fila['Clave']."</td>";
					echo "<td>".$fila['Nombre']."</td>";
					echo "<td><a href='http://localhost/sistema_nava/pages/AD/asignaturas/gestion.php?Clave=".$fila['Clave']."'><button type='button' class='btn btn-primary btn-lg btn-block'>Gestionar</button></a></td>";
				echo "</tr>";
			}
		}
	}
	public function ConsultarAsignaturas($Clv_Carrera)
	{	    
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla_WHERE('Clave, Nombre, Creditos, Semestre','asignatura','Clv_Carrera',$Clv_Carrera);
		if (count($filas) == 0)
		{
			echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
			echo "</tr>"; 
		}
		else
		{
			foreach ($filas as $fila)
			{  
				echo "<tr>";
					echo "<td>".$fila['Clave']."</td>";
					echo "<td>".$fila['Nombre']."</td>";
					echo "<td>".$fila['Creditos']."</td>";
					echo "<td>".$fila['Semestre']."</td>";
				echo "</tr>";
			}
		}
	}
	public function ConsultarCarreras_link_alumnado()
	{	    
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla('Clave, Nombre', 'carrera');
		if (count($filas) == 0)
		{
			echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
			echo "</tr>"; 
		}
		else
		{
			foreach ($filas as $fila)
			{  
				echo "<tr>";
					echo "<td>".$fila['Clave']."</td>";
					echo "<td>".$fila['Nombre']."</td>";
					echo "<td><a href='http://localhost/sistema_nava/pages/AD/alumnado/gestion.php?Clave=".$fila['Clave']."'><button type='button' class='btn btn-primary btn-lg btn-block'>Gestionar</button></a></td>";
				echo "</tr>";
			}
		}
	}
	public function ConsultarAlumnos($Clv_Carrera)
	{	    
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		//$filas = $query->ConsultaTabla('Clave, N', 'Asignatura');
		$filas = $query->ConsultaTabla_WHERE('Matricula, Nombres, Apellido_1, Apellido_2, Correo, Telefono, Turno, Semestre, Status','alumno','Clv_Carrera',$Clv_Carrera);
		if (count($filas) == 0)
		{
			echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
			echo "</tr>"; 
		}
		else
		{
			foreach ($filas as $fila)
			{  
				echo "<tr>";
					echo "<td>".$fila['Matricula']."</td>";
					echo "<td>".$fila['Nombres']." ".$fila['Apellido_1']." ".$fila['Apellido_2']."</td>";
					echo "<td>".$fila['Correo']."</td>";
					echo "<td>".$fila['Telefono']."</td>";
					echo "<td>".$fila['Turno']."</td>";
					echo "<td>".$fila['Semestre']."</td>";
					echo "<td>".$fila['Status']."</td>";
				echo "</tr>";
			}
		}
	}
	public function UsuarioDisponible($Clv_Usuario, $Rol)
	{
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla_WHERE('Clv_Usuario','usuario','Clv_Usuario',$Clv_Usuario);
		if(count($filas) >= 1)
		{
			$Clv_Usuario = $Clv_Usuario.random_int(2,100);
		}
		return $Clv_Usuario;
	}
	public function ValidaRegistroUsuario($Clv_Usuario,$Rol)
	{
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla_WHERE('Clv_Usuario','usuario','Clv_Usuario',$Clv_Usuario);
		if(count($filas) == 0)
		{
			echo "<script> alert('No se pudo completar el registro, intentelo de nuevo.'); window.location.href='".$_SESSION['Ruta_web']."pages/AD/".$_SESSION['Pagina_Actual']."/nuevo.php'; </script>";
		}
		else
		{
			echo "<script> alert('El registro se logro de forma exitosa.'); window.location.href='".$_SESSION['Ruta_web']."pages/AD/".$_SESSION['Pagina_Actual']."/gestion.php'; </script>";
		}
	}
	public function ValidaRegistroAlumno($Matricula)
	{
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla_WHERE('Matricula','alumno','Matricula',$Matricula);
		if(count($filas) == 0)
		{
			echo "<script> alert('No se pudo completar el registro, intentelo de nuevo.'); window.location.href='".$_SESSION['Ruta_web']."pages/AD/".$_SESSION['Pagina_Actual']."/nuevo.php'; </script>";
		}
		else
		{
			echo "<script> alert('El registro se logro de forma exitosa.'); window.location.href='".$_SESSION['Ruta_web']."pages/AD/".$_SESSION['Pagina_Actual']."/gestion.php'; </script>";
		}
	}

	public function ConsultarCarrerasP() //funcion para mostrar todas las carreras con paginacion
	{	    
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_consultas.php");
		$query = new querys_consultas();
		$filas = $query->ConsultaTabla('*', 'carrera');
		$_SESSION['Carreras'] = array();
		$i=0;
		if (count($filas) == 0)
		{	

		}
		else
		{
			foreach ($filas as $fila)
			{  
				$_SESSION['Carreras'][$i][0] = $fila['Clave'];
				$_SESSION['Carreras'][$i][1] = $fila['Nombre'];
				$_SESSION['Carreras'][$i][2] = $fila['Creditos'];
				$_SESSION['Carreras'][$i][3] = $fila['Creditos_Minimos_Servicio_Social'];
				$_SESSION['Carreras'][$i][4] = SELF::ConsultarCoordinadorDesignado($fila['Matricula_Coordinador']);
				$i++;
			}
		}
	}
	public function ConsultarCarrerasPagina($Pagina) //funcion para mostrar todas las carreras con paginacion
	{	  
		if($Pagina == 1)  
		{
			for ($i=$Pagina; $i < ($Pagina + 10) ; $i++)
			{  
				echo "<tr>";
					echo "<td>".$_SESSION['Carreras'][$i][0]."</td>";
					echo "<td>".$_SESSION['Carreras'][$i][1]."</td>";
					echo "<td>".$_SESSION['Carreras'][$i][2]."</td>";
					echo "<td>".$_SESSION['Carreras'][$i][3]."</td>";
					echo "<td>".$_SESSION['Carreras'][$i][4]."</td>";
				echo "</tr>";
			}
		}else
		{
			for ($i=($Pagina + 10); $i < ($Pagina + 20) ; $i++)
			{  
				echo "<tr>";
					echo "<td>".$_SESSION['Carreras'][$i][0]."</td>";
					echo "<td>".$_SESSION['Carreras'][$i][1]."</td>";
					echo "<td>".$_SESSION['Carreras'][$i][2]."</td>";
					echo "<td>".$_SESSION['Carreras'][$i][3]."</td>";
					echo "<td>".$_SESSION['Carreras'][$i][4]."</td>";
				echo "</tr>";
			}

		}
	}
}