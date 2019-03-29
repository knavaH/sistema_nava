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
            <li><a href="entradas-salidas.php">Entradas/Salidas</a></li>
            <li class="active"><a href="#">Nuevo Usuario</a></li>
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
        <h2>Registro de nuevo usuarios</h2>
        <br>
        <h3>Nuevo usuarios no es un cliente es un recepcionista</h3>
        <br><br>
        <form action="../../php/insertar.php" method="POST">
            <div class="form-group">
                <label for="inputNombre" class="col-lg-1 control-label">Nombre: </label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre">
                </div>
            </div>
            <hr><hr>
            <div class="form-group">
                <label for="inputApellido" class="col-lg-1 control-label">Apellido(s): </label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="Apellidos" name="Apellido" placeholder="Apellido">
                </div>
            </div>
            <hr><hr>
            <div class="form-group">
                <label for="inputTelefono" class="col-lg-1 control-label">Telefono: </label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono">
                </div>
            </div>
            <hr><hr>
            <div class="form-group">
                <label for="inputCorreo" class="col-lg-1 control-label">Correo: </label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="Correo" name="Correo" placeholder="Correo">
                </div>
            </div>
            <hr><hr>
            <div class="form-group">
                <label for="inputCorreo" class="col-lg-1 control-label"></label>
                <div class="col-lg-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>
                </div>
            </div>
        </form>
        <hr><hr><hr>
        <h3>Usuarios registrados</h3>
        <hr>
                <table style="width:100%" class="table">
                    <tr>
                        <th>Matricula</th>
                        <th>Nombre</th> 
                        <th>Apellido(s)</th> 
                        <th>Telefono</th> 
                        <th>Correo</th> 
                    </tr>
                    <?php cargarUsuarios();?>
                </table>
                <hr><hr><hr><hr>
    </div>
  </div>
</div>
<?php include("../footer.html"); ?>
</body>
</html>
