<?php
session_start();
if($_SESSION)
{
    if ($_SESSION['Rol'] == 'RE')
    {
        echo"<script> alert('no tienes los permisos necesarios');  window.location.href=\"../RE/index.php\"</script>";  
    }
}
else
{
    echo"<script> alert('no estas logeado');  window.location.href=\"../../index.php\"</script>";
}
?>