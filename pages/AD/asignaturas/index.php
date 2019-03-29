<?php
    require_once('../verificar.php');
    $_SESSION['Pagina_Actual'] = 'asignaturas';
    include("../../../head.php");
?>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-6 text-left"> 
        <hr>
            <table class="table">
            <tr>
                <th><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/asignaturas/nuevo.php" ?>"><img src="<?php echo "$Ruta_Imagenes./calendario.jpg" ?>" width="130" height="120"></a></th>
                <th><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/asignaturas/gestion.php" ?>"><img src="<?php echo "$Ruta_Imagenes./entrada-salida.jpg" ?>" width="180" height="120"></a></th>
                <th><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/asignaturas/Exportar.php" ?>"><img src="<?php echo "$Ruta_Imagenes./entrada-salida.jpg" ?>" width="180" height="120"></a></th>
                <th><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/asignaturas/Importar.php" ?>"><img src="<?php echo "$Ruta_Imagenes./entrada-salida.jpg" ?>" width="180" height="120"></a></th>
            </tr>
            <tr>
                <th>Crear nueva asignatura</th>
                <th>Gestionar asignaturas</th>
                <th>Exportar asignaturas</th>
                <th>Inportar asignaturas</th>
            </tr> 
            </table>
    </div>
  </div>
</div>
<?php include("../../../footer.php"); ?>
</body>
</html>
