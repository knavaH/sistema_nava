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
            <li  class="active"><a href="#">Clientes</a></li>
            <li><a href="entradas-salidas.php">Entradas/Salidas</a></li>
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
        <h2>Lista de clientes</h2>
            <p>
                <hr>
                <table style="width:100%" class="table">
                    <tr>
                        <th style="text-align-last: center">Matricula:</th>
                        <th>Nombre</th>
                        <th>Telefono</th> 
                        <th>Correo</th> 
                        <th>Status</th> 
                        <th>Plan</th> 
                    </tr>
                    <tr>
                    <?php cargarCliente(); ?>
                    </tr> 
                </table>
            </p>
    </div>
  </div>
</div>
<?php include("../footer.html"); ?>
</body>
</html>
