<?php
    require_once('verificar.php');
    require_once('../../php/cargar_registros.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../head.html"); ?>
    <style>
        .table,,td {border: 1px solid black;}
    </style>
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
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="clientes.php">Clientes</a></li>
            <li class="active"><a href="#">Entradas/Salidas</a></li>
            <li><a href="registro.php">Nuevo Usuario</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="../../php/cerrar.php"><span class="glyphicon glyphicon-log-in"></span>Cerrar sesion</a></li>
        </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-12 text-left"> 
        <br>
        <h2>Registros de entradas/salidas</h2>
        <br>
        <h4>clic en las fechas para mas detalles</h3>
            <p>
                <hr>
                <table style="width:100%" class="table">
                    <tr>
                        <th>Fechas</th>
                        <!--<th>Total de clientes</th> -->
                    </tr>
                    <tr>
                       <?php cargarEntradas_Salidas(); ?>
                    </tr> 
                </table>
            </p>
    </div>
    
  </div>
</div>

<?php include("../footer.html"); ?>
asds
</body>
</html>
