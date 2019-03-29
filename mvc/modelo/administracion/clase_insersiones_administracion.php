<?php
class insersiones_administracion
{
	public function RegistrarAdministrador($Nombres,$Apellido_1,$Apellido_2,$Correo,$Telefono,$Movil,$Curp,$Calle,$Colonia,$Num_Ext,$Num_Int,$Municipio)
	{	
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_insersiones.php");
		require('../../../mvc/modelo/administracion/clase_consultas_administracion.php');
		$Clv_Usuario = SELF::UsuarioDisponible($Nombres[0].$Apellido_1.$Apellido_2, "administrador");
		$query = new querys_insersiones();
		$query->InsertarTablaUnica_3_campos("usuario","Clv_Usuario",$Clv_Usuario,"Password",$Clv_Usuario,"Rol","Administrador");
		$query->InsertarTablaUnica_13_campos("administrador",
		"Nombres",$Nombres,
		"Apellido_1",$Apellido_1,
		"Apellido_2",$Apellido_2,
		"Correo",$Correo, 
		"Telefono",$Telefono,
		"Movil",$Movil,
		"CURP",$Curp,
		"Calle",$Calle, 
		"Numero_Exterior",$Num_Ext,
		"Numero_Interior",$Num_Int,
		"Colonia",$Colonia,
		"Municipio",$Municipio,
		"Clv_Usuario",$Clv_Usuario
		);
		SELF::ValidaRegistroUsuario($Clv_Usuario, "administrador");
	}
	public function RegistrarCoordinador($Nombres,$Apellido_1,$Apellido_2,$Correo,$Telefono,$Movil,$Curp,$Calle,$Colonia,$Num_Ext,$Num_Int,$Municipio)
	{	
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_insersiones.php");
		require('../../../mvc/modelo/administracion/clase_consultas_administracion.php');
		$Clv_Usuario = SELF::UsuarioDisponible($Nombres[0].$Apellido_1.$Apellido_2, "coordinador");
		$query = new querys_insersiones();
		$query->InsertarTablaUnica_3_campos("usuario","Clv_Usuario",$Clv_Usuario,"Password",$Clv_Usuario,"Rol","Coordinador");
		$query->InsertarTablaUnica_13_campos("coordinador",
		"Nombres",$Nombres,
		"Apellido_1",$Apellido_1,
		"Apellido_2",$Apellido_2,
		"Correo",$Correo, 
		"Telefono",$Telefono,
		"Movil",$Movil,
		"CURP",$Curp,
		"Calle",$Calle, 
		"Numero_Exterior",$Num_Ext,
		"Numero_Interior",$Num_Int,
		"Colonia",$Colonia,
		"Municipio",$Municipio,
		"Clv_Usuario",$Clv_Usuario
		);
		SELF::ValidaRegistroUsuario($Clv_Usuario, "coordinador");
	}
	public function RegistrarDocente($Nombres,$Apellido_1,$Apellido_2,$Correo,$Telefono,$Movil,$Curp,$Calle,$Colonia,$Num_Ext,$Num_Int,$Municipio)
	{	
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_insersiones.php");
		require('../../../mvc/modelo/administracion/clase_consultas_administracion.php');
		$Clv_Usuario = SELF::UsuarioDisponible($Nombres[0].$Apellido_1.$Apellido_2, "maestro");
		$query = new querys_insersiones();
		$query->InsertarTablaUnica_3_campos("usuario","Clv_Usuario",$Clv_Usuario,"Password",$Clv_Usuario,"Rol","Maestro");
		$query->InsertarTablaUnica_13_campos("maestro",
		"Nombres",$Nombres,
		"Apellido_1",$Apellido_1,
		"Apellido_2",$Apellido_2,
		"Correo",$Correo, 
		"Telefono",$Telefono,
		"Movil",$Movil,
		"CURP",$Curp,
		"Calle",$Calle, 
		"Numero_Exterior",$Num_Ext,
		"Numero_Interior",$Num_Int,
		"Colonia",$Colonia,
		"Municipio",$Municipio,
		"Clv_Usuario",$Clv_Usuario
		);
		SELF::ValidaRegistroUsuario($Clv_Usuario, "maestro");
	}
	public function RegistrarDirectivo($Nombres,$Apellido_1,$Apellido_2,$Correo,$Telefono,$Movil,$Curp,$Calle,$Colonia,$Num_Ext,$Num_Int,$Municipio)
	{	
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_insersiones.php");
		require('../../../mvc/modelo/administracion/clase_consultas_administracion.php');
		$Clv_Usuario = SELF::UsuarioDisponible($Nombres[0].$Apellido_1.$Apellido_2, "directivo");
		$query = new querys_insersiones();
		$query->InsertarTablaUnica_3_campos("usuario","Clv_Usuario",$Clv_Usuario,"Password",$Clv_Usuario,"Rol","Directivo");
		$query->InsertarTablaUnica_13_campos("directivo",
		"Nombres",$Nombres,
		"Apellido_1",$Apellido_1,
		"Apellido_2",$Apellido_2,
		"Correo",$Correo, 
		"Telefono",$Telefono,
		"Movil",$Movil,
		"CURP",$Curp,
		"Calle",$Calle, 
		"Numero_Exterior",$Num_Ext,
		"Numero_Interior",$Num_Int,
		"Colonia",$Colonia,
		"Municipio",$Municipio,
		"Clv_Usuario",$Clv_Usuario 
		);
		SELF::ValidaRegistroUsuario($Clv_Usuario, "directivo");
	}
	public function RegistrarBiblioteca($Nombres,$Apellido_1,$Apellido_2,$Correo,$Telefono,$Movil,$Curp,$Calle,$Colonia,$Num_Ext,$Num_Int,$Municipio)
	{	
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_insersiones.php");
		require('../../../mvc/modelo/administracion/clase_consultas_administracion.php');
		$Clv_Usuario = SELF::UsuarioDisponible($Nombres[0].$Apellido_1.$Apellido_2, "libreria");
		$query = new querys_insersiones();
		$query->InsertarTablaUnica_3_campos("usuario","Clv_Usuario",$Clv_Usuario,"Password",$Clv_Usuario,"Rol","Biblioteca");
		$query->InsertarTablaUnica_13_campos("libreria",
		"Nombres",$Nombres,
		"Apellido_1",$Apellido_1,
		"Apellido_2",$Apellido_2,
		"Correo",$Correo, 
		"Telefono",$Telefono,
		"Movil",$Movil,
		"CURP",$Curp,
		"Calle",$Calle, 
		"Numero_Exterior",$Num_Ext,
		"Numero_Interior",$Num_Int,
		"Colonia",$Colonia,
		"Municipio",$Municipio,
		"Clv_Usuario",$Clv_Usuario
		);
		SELF::ValidaRegistroUsuario($Clv_Usuario, "libreria");
	}

	public function RegistrarCarrera($Nombre,$Clave,$Creditos,$CreditosM,$Matricula_Coordinador)
	{	
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_insersiones.php");
		$query = new querys_insersiones();
		$query->InsertarTablaUnica_5_campos("carrera",
		"Clave",$Clave,
		"Nombre",$Nombre,
		"Matricula_Coordinador",$Matricula_Coordinador,
		"Creditos",$Creditos, 
		"Creditos_Minimos_Servicio_Social",$CreditosM
		);
		echo"<script> alert('se ha regisrado una nueva carrera');  window.location.href=\"http://localhost/sistema_nava/pages/AD/carreras/gestion.php\"</script>";  
	}
	public function RegistrarAsignatura($Nombre,$Clave,$Creditos,$Semestre,$Carrera)
	{	
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_insersiones.php");
		$query = new querys_insersiones();
		$query->InsertarTablaUnica_5_campos("asignatura",
		"Clave",$Clave,
		"Nombre",$Nombre,
		"Clv_Carrera",$Carrera,
		"Creditos",$Creditos, 
		"Semestre",$Semestre
		);
		echo"<script> alert('se ha regisrado una nueva asignatura');  window.location.href=\"http://localhost/sistema_nava/pages/AD/asignaturas/gestion.php\"</script>";  
	}
	public function RegistrarAlumno($Nombres,$Apellido_1,$Apellido_2,$Correo,$Telefono,$Movil,$Curp,$Calle,$Colonia,$Num_Ext,$Num_Int,$Municipio,$Carrera,$Turno)
	{
		require('../../../mvc/controlador/clase_conexion.php');		
		require("../../../mvc/controlador/clase_querys_insersiones.php");
		$query = new querys_insersiones();
		$query->InsertarTablaUnica_18_campos("alumno",
		"Nombres",$Nombres,
		"Apellido_1",$Apellido_1,
		"Apellido_2",$Apellido_2,
		"Correo",$Correo, 
		"Telefono",$Telefono,
		"Movil",$Movil,
		"CURP",$Curp,
		"Password",$Nombres[0].$Apellido_1.$Apellido_2,
		"Turno",$Turno, 
		"Clv_Carrera",$Carrera,
		"Semestre",'1',
		"Status",'Activo',
		"Fecha_Registro",date("Y-m-d"),
		"Calle",$Calle, 
		"Numero_Interior",$Num_Int,
		"Numero_Exterior",$Num_Ext,
		"Colonia",$Colonia,
		"Municipio",$Municipio
		);
		SELF::ValidaRegistroAlumno(LAST_INSERT_ID());
		//echo"<script> alert('se ha registrado un nuevo alumno');  window.location.href=\"http://localhost/sistema_nava/pages/AD/alumnado/gestion.php\"</script>";  
	}
	public function UsuarioDisponible($Clv_Usuario, $Rol)
	{
		$retornar = '';
		$llamado = new consultas_administracion();
		$retornar = $llamado->UsuarioDisponible($Clv_Usuario, $Rol);
		return $retornar;
	}
	public function ValidaRegistroUsuario($Clv_Usuario, $Rol)
	{
		$llamado = new consultas_administracion();
		$llamado->ValidaRegistroUsuario($Clv_Usuario, $Rol);
	}
	public function ValidaRegistroAlumno($Matricula)
	{
		$llamado = new consultas_administracion();
		$llamado->ValidaRegistroAlumno($Matricula);
	}

}