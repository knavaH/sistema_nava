<?php
    require_once('../verificar.php');
    include("../../../head.php");
    if(isset($_POST['Nombres']) && isset($_POST['Apellido_1']) && isset($_POST['Apellido_2']) && isset($_POST['Correo']) && isset($_POST['Telefono']) && isset($_POST['Movil']) && isset($_POST['Curp']) && isset($_POST['Calle']) && isset($_POST['Colonia']) && isset($_POST['Num_Ext']) && isset($_POST['Num_Int']) && isset($_POST['Municipio']) )	
    {   	
        require_once("../../../mvc/modelo/administracion/clase_insersiones_administracion.php");
        $llamado = new insersiones_administracion();
        $llamado->RegistrarDirectivo(
        htmlspecialchars($_POST['Nombres'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Apellido_1'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Apellido_2'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Correo'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Telefono'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Movil'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Curp'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Calle'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Colonia'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Num_Ext'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Num_Int'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Municipio'], ENT_QUOTES, 'UTF-8')
        );
    }
?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-12 text-left"> 
      <div class="col-lg-2">
                
                </div>
        <br>
            <h2>Registro de nuevo usuario</h2>
        <br>
        
        <?php include("../formulario_nuevo_usuario.php"); ?>
    </div>
  </div>
</div>
<?php include("../../../footer.php"); ?>
</body>
</html>
