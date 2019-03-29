<?php
session_start();
if($_SESSION)
{
    if ($_SESSION['Rol'] == 'ControlEscolar')
    {
        echo "<script> alert('Credenciales no validas.'); window.location.href='".$_SESSION['Ruta_web']."pages/CE/'; </script>";
    }
    else  if ($_SESSION['Rol'] == 'Alumno')
    {
        echo "<script> alert('Credenciales no validas.'); window.location.href='".$_SESSION['Ruta_web']."pages/AL/'; </script>";
    }
    else  if ($_SESSION['Rol'] == 'Coordinador')
    {
        echo "<script> alert('Credenciales no validas.'); window.location.href='".$_SESSION['Ruta_web']."pages/CO/'; </script>";
    }
    else  if ($_SESSION['Rol'] == 'Directivo')
    {
        echo "<script> alert('Credenciales no validas.'); window.location.href='".$_SESSION['Ruta_web']."pages/DI/'; </script>";
    }
    else  if ($_SESSION['Rol'] == 'Maestro')
    {
        echo "<script> alert('Credenciales no validas.'); window.location.href='".$_SESSION['Ruta_web']."pages/MA/'; </script>";
    }
}
else
{
    echo "<script> alert('No estas logeado.'); window.location.href='".$_SESSION['Ruta_web']."pages/CE/'; </script>";
}
?>