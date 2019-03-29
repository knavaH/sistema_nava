<?php
    require_once('verificar.php');
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
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="clientes.php">Clientes</a></li>
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
        <h2>Lista de clientes dentro del Gimnasio, hoy <?php echo date("d-m-Y");  echo $_SESSION['Nombre']; echo " hola";?></h2>
            <p>
                <hr>
                <table style="width:100%" class="table">
                    <tr>
                        <th>Matricula:</th>
                        <th>Nombre</th>
                        <th>Hora entrada</th> 
                        <th>Hora salida</th> 
                        <th>Marco entrada</th> 
                        <th>Marco salida</th> 
                    </tr>
                    <tr>
                       
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
