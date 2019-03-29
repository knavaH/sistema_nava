<?php
	require_once('clase_conexion.php');
	require_once('yo/clase_querys_consultas.php');
	function cargarUsuarios()
	{
		$consultas = new querys_consultas();
		$filas = $consultas->ConsultaTabla("Matricula,Nombre,Apellido,Telefono,Correo", "usuarios");
		foreach ($filas as $fila)
		{  
			echo "<tr>";
				echo "<td>".$fila['Matricula']."</td>";
				echo "<td>".$fila['Nombre']."</td>";
				echo "<td>".$fila['Apellido']."</td>";
				echo "<td>".$fila['Telefono']."</td>";
				echo "<td>".$fila['Correo']."</td>";
			echo "</tr>";
		}
	}
	
	function cargarCliente()
	{
		$consultas = new querys_consultas();
		$filas = $consultas->Consulta_INNERJOIN_1('Matricula,Nombre,Apellido,Telefono,Correo,Alias', 'clientes', 'planes','Id', 'Id_plan');
		foreach ($filas as $fila)
		{  
			echo "<tr>";
				echo "<td>".$fila['Matricula']."</td>";
				echo "<td>".$fila['Nombre']."</td>";
				echo "<td>".$fila['Apellido']."</td>";
				echo "<td>".$fila['Telefono']."</td>";
				echo "<td>".$fila['Correo']."</td>";
				echo "<td>".$fila['Alias']."</td>";
			echo "</tr>";
		}
	}
	
	function cargarEntradas_Salidas()
	{
		$consultas = new querys_consultas();
		$filas = $consultas->ConsultarTablaDistinct('Fecha','entrada');
		foreach ($filas as $fila)
		{  
			echo "<tr>";
				
				echo '<td> <a href="detalles.php?Fecha='.$fila['Fecha'].'">
				<button type="submit" style="color: black; inline-size: 190px; text-align-last: center; block-size: 30px">
				'.$fila['Fecha'].'
				</button></a></td>';
			echo "</tr>";
		}
	}

	function cargarDetalles($fecha)
	{
		$consultas = new querys_consultas();
		//$filas = $consultas->cargarDetalles($fecha);
	$filas = $consultas->Consulta_INNERJOIN_2_WHERE('entrada.hora_entrada, salida.Hora_Salida, clientes.Nombre, clientes.Matricula'
	,'entrada','clientes','salida','clientes.Matricula','entrada.Matricula_Cliente', 'salida.Id_entrada','entrada.Id','='
	,'entrada.Fecha','2019-02-19');
		foreach ($filas as $fila)
		{  
			echo "<tr>";
				echo "<td>".$fila['Matricula']."</td>";
				echo "<td>".$fila['Nombre']."</td>";
				echo "<td>".$fila['hora_entrada']."</td>";
				echo "<td>".$fila['Hora_Salida']."</td>";
			echo "</tr>";
		}
	}
	
	function cargarHoy()
	{
		/*$consultas = new querys_consultas();
		$filas = $consultas->pre_cargarHoy();
	
		foreach ($filas as $fila)
		{  	
			echo "paso: ".$fila['Id'];

			$filass = $consultas->cargarHoy($fila['Id']);
			
			if($filass != null)
			foreach ($filass as $fil)
			{
				echo "<tr>";
				echo "<td>".$fil['Id']."</td>";
				echo "<td>".$fil['Nombre']."</td>";
				//echo '<td> <a href="#"><button type="submit" style="color: black; inline-size: 190px; text-align-last: center; block-size: 30px">Registrar Salida</button></a></td>';				
				echo "</tr>";
			}
		}*/
	}
?>

