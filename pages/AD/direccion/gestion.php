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
        <h2>Lista de administradores</h2>
            <p>
                <hr>
                <table style="width:100%" class="table">
                    <tr>
                        <th style="text-align-last: center">Matricula:</th>
                        <th>Nombre Completo</th>
                        <th>Correo</th> 
                        <th>Telefono</th> 
                        <th>Movil</th> 
                        <th>CURP</th> 
                        <th>Calle</th> 
                        <th>Num. Exterior</th> 
                        <th>Num. Interior</th> 
                        <th>Colonia</th> 
                        <th>Municipio</th> 
                        <th>Clave de Usuario</th> 
                    </tr>
                    <tr>
                    <?php $llamado->ConsultarDirectivo(); ?>
                    </tr> 
                </table>
            </p>
    </div>
    <div class="form-group">
                <div class="col-lg-2">
                    <a href="http://localhost/sistema_nava/pages/AD/direccion/"><button type="button" class="btn btn-primary btn-lg btn-block">Regresar</button></a>
                </div>
            </div>
  </div>
</div>
<?php include("../../../footer.php"); ?>
</body>
</html>
