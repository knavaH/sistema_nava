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
        <h2><?php if(!isset($_GET['Clave'])){echo "Lista de Carreras";}else{echo "Lista alumnos de la carrera ".$_GET['Clave']."";}?></h2>
            <p>
                <hr>
                <table style="width:100%" class="table">
                    <tr>
                        <th><?php if(!isset($_GET['Clave'])){echo "Clave";}else{ echo "Matricula";}?></th>
                        <th><?php if(!isset($_GET['Clave'])){echo "Nombre";}else{ echo "Nombre completo";}?></th>
                        <th><?php if(!isset($_GET['Clave'])){echo "";}else{ echo "Correo";}?></th> 
                        <th><?php if(!isset($_GET['Clave'])){echo "";}else{ echo "Telefono";}?></th> 
                        <th><?php if(!isset($_GET['Clave'])){echo "";}else{ echo "Turno";}?></th> 
                        <th><?php if(!isset($_GET['Clave'])){echo "";}else{ echo "Semestre";}?></th> 
                        <th><?php if(!isset($_GET['Clave'])){echo "";}else{ echo "Status";}?></th> 
                    </tr>
                    <tr>
                    <?php if(!isset($_GET['Clave'])){$llamado->ConsultarCarreras_link_alumnado();}else{$llamado->ConsultarAlumnos($_GET['Clave']);}?>
                    </tr> 
                </table>
            </p>
    </div>
    <div class="form-group">
        <div class="col-lg-2">
            <?php if(!isset($_GET['Clave']))
            {
                echo '<a href="'.$_SESSION['Ruta_web'].'pages/AD/alumnado/"><button type="button" class="btn btn-primary btn-lg btn-block">Regresar</button></a>';
            }
            else
            { 
                echo '<a href="'.$_SESSION['Ruta_web'].'pages/AD/alumnado/gestion.php"><button type="button" class="btn btn-primary btn-lg btn-block">Regresar</button></a>';
            }
            ?>
        </div>
    </div>
  </div>
</div>
    <?php include("../../../footer.php"); ?>
</body>
</html>
