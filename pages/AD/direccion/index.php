<?php
    require_once('../verificar.php');
    $_SESSION['Pagina_Actual'] = 'direccion';
    include("../../../head.php");
?>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-6 text-left"> 
        <hr>
            <table class="table">
            <tr>
                <th><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/direccion/nuevo.php" ?>"><img src="<?php echo "$Ruta_Imagenes./calendario.jpg" ?>" width="130" height="120"></a></th>
                <th><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/direccion/gestion.php" ?>"><img src="<?php echo "$Ruta_Imagenes./entrada-salida.jpg" ?>" width="180" height="120"></a></th>
            </tr>
            <tr>
                <th>Crear nuevo directivo</th>
                <th>Gestionar usuarios</th>
            </tr> 
            </table>
    </div>
  </div>
</div>
<?php include("../../../footer.php"); ?>
</body>
</html>
