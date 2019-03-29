<?php
    require_once('../verificar.php');
    include("../../../head.php");
    require_once("../../../mvc/modelo/administracion/clase_consultas_administracion.php");
    $llamado = new consultas_administracion();
?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-12 text-left"> 
        <br>
        <h2><?php if(!isset($_GET['Clave'])){echo "Lista de Carreras";}else{echo "Lista asginaturas de la carrera ".$_GET['Clave']."";}?></h2>
            <p>
                <hr>
                <table style="width:100%" class="table">
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th><?php if(!isset($_GET['Clave'])){echo "";}else{ echo "Creditos";}?></th> 
                        <th><?php if(!isset($_GET['Clave'])){echo "";}else{ echo "Semestre";}?></th> 
                    </tr>
                    <tr>
                    <?php if(!isset($_GET['Clave'])){$llamado->ConsultarCarreras_link();}else{ $llamado->ConsultarAsignaturas($_GET['Clave']);}?>
                    </tr> 
                </table>
            </p>
    </div>
    <div class="form-group">
        <div class="col-lg-2">
            <?php if(!isset($_GET['Clave']))
            {
                echo '<a href="'.$_SESSION['Ruta_web'].'pages/AD/asignaturas/"><button type="button" class="btn btn-primary btn-lg btn-block">Regresar</button></a>';
            }
            else
            { 
                echo '<a href="'.$_SESSION['Ruta_web'].'pages/AD/asignaturas/gestion.php"><button type="button" class="btn btn-primary btn-lg btn-block">Regresar</button></a>';
            }
            ?>
        </div>
    </div>
  </div>
</div>
    <?php include("../../../footer.php"); ?>
</body>
</html>
