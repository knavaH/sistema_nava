<?php
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
        include('../menu.php');
    ?>
  </div>
</nav>
