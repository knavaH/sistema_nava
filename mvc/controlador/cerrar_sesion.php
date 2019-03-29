<?php
session_start();

if($_SESSION['Matricula']){
	session_destroy();
	header("location: ".$_SESSION['Ruta_web']." ");
}
else{
	header("location: ".$_SESSION['Ruta_web']." ");
}
?>
