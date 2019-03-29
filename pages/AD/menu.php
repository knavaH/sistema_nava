
<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
        <li <?php if($_SESSION['Pagina_Actual'] == 'inicio'){echo 'class="active"';} ?>><a href="<?php echo $_SESSION['Ruta_web']."pages/AD"?>">Inicio</a></li>
        <li <?php if($_SESSION['Pagina_Actual'] == 'alumnado'){echo 'class="active"';} ?>><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/alumnado/"?>">Alumnado</a></li>
        <li <?php if($_SESSION['Pagina_Actual'] == 'docentes'){echo 'class="active"';} ?>><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/docentes"?>">Docentes</a></li>
        <li <?php if($_SESSION['Pagina_Actual'] == 'coordinacion'){echo 'class="active"';} ?>><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/coordinacion"?>">Coordinacion</a></li>
        <li <?php if($_SESSION['Pagina_Actual'] == 'direccion'){echo 'class="active"';} ?>><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/direccion"?>">Direccion</a></li>
        <li <?php if($_SESSION['Pagina_Actual'] == 'administracion'){echo 'class="active"';} ?>><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/administracion"?>">Administracion</a></li>
        <li <?php if($_SESSION['Pagina_Actual'] == 'biblioteca'){echo 'class="active"';} ?>><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/biblioteca"?>">Biblioteca</a></li>
        <li <?php if($_SESSION['Pagina_Actual'] == 'carreras'){echo 'class="active"';} ?>><a href="<?php echo $_SESSION['Ruta_web']."pages/AD/carreras"?>">Carreras</a></li>
        <li <?php if($_SESSION['Pagina_Actual'] == 'asignaturas'){echo 'class="active"';} ?>>    <a href="<?php echo $_SESSION['Ruta_web']."pages/AD/asignaturas"?>">Asignaturas</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo $_SESSION['Ruta_web']."mvc/controlador/cerrar_sesion.php" ?>"><span class=""></span>Perfil</a></li>
    </ul>
</div>