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
        <h2>Lista de carreras</h2>
            <p>
                <hr>
                <table style="width:100%" class="table">
                    <tr>
                        <th style="text-align-last: center">Clave</th>
                        <th>Nombre</th>
                        <th>Creditos</th> 
                        <th>Creditos para iniciar servicios social</th> 
                        <th>Coordinador designado</th> 
                    </tr>
                    <tr>
                    <?php $llamado->ConsultarCarreras(); ?>
                    </tr> 
                </table>
            </p>
    </div>
    <div class="form-group">
                
                <div class="col-lg-2">
                    <a href="http://localhost/sistema_nava/pages/AD/carreras/"><button type="button" class="btn btn-primary btn-lg btn-block">Regresar</button></a>
                </div>
            </div>
  </div>
</div>
<?php include("../../../footer.php"); ?>
</body>
</html>
