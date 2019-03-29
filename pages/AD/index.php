<?php
    require_once('verificar.php');
    $_SESSION['Pagina_Actual'] = 'inicio';
    $Ruta_Imagenes = $_SESSION['Ruta_web'].'images/icons/';
?>  
<!DOCTYPE html>
<html lang="en">
<head>
<title>sistema nava</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['Ruta_web'];?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['Ruta_web'];?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['Ruta_web'];?>css/main.css">
<script src="<?php echo $_SESSION['Ruta_web'];?>js/jquery.min.js"></script>
<script src="<?php echo $_SESSION['Ruta_web'];?>js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <?php
        include('menu.php');
    ?>
  </div>
</nav> 
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-6 text-left"> 
        <br>
        <h2>Bienvenido <?php echo $_SESSION['Nombre']; ?></h2>
            <p>
                <hr>
                <table class="table">
                    <tr>
                        <th><img src="<?php echo $Ruta_Imagenes."calendario.jpg" ?>" width="130" height="120"></th>
                        <th><img src="<?php echo $Ruta_Imagenes."entrada-salida.jpg" ?>" width="180" height="120"></th>
                        <th><img src="<?php echo $Ruta_Imagenes."aviso.png" ?>" width="120" height="120"></th> 
                    </tr>
                    <tr>
                        <th>Generar evento</th>
                        <th>Registros entrada / salida</th>
                        <th>Generar Aviso</th> 
                    </tr> 
                </table>
            </p>
    </div>
  </div>
</div>
<?php 
    include("../../footer.php"); 
?>
</body>
</html>
