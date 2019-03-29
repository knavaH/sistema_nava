<?php
    require_once('../verificar.php');
    $_SESSION['Pagina_Actual'] = 'alumnado';
    include("../../../head.php");
?>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-6 text-left"> 
        <hr>
            <table class="table">
            <tr>
                <th><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/alumnado/nuevo.php" ?>"><img src="<?php echo "$Ruta_Imagenes./calendario.jpg" ?>" width="130" height="120"></a></th>
                <th><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/alumnado/gestion.php" ?>"><img src="<?php echo "$Ruta_Imagenes./entrada-salida.jpg" ?>" width="180" height="120"></a></th>
                <th><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/alumnado/exportar.php" ?>"><img src="<?php echo "$Ruta_Imagenes./calendario.jpg" ?>" width="180" height="120"></a></th>
                <th><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/alumnado/importar.php" ?>"><img src="<?php echo "$Ruta_Imagenes./entrada-salida.jpg" ?>" width="180" height="120"></a></th>
            </tr>
            <tr>
                <th>Registrar alumno</th>
                <th>Gestionar alumnos</th>
                <th>Exportar alumnos</th>
                <th>Importar alumnos</th>
            </tr> 
            </table>
    </div>
  </div>
</div>
<?php include("../../../footer.php"); ?>
</body>
</html>

