<?php
    require_once('../verificar.php');
    include("../../../head.php");
    include("../../index.php");
    if(isset($_POST['Nombres']) && isset($_POST['Apellido_1']) 
    && isset($_POST['Apellido_2']) && isset($_POST['Correo']) 
    && isset($_POST['Telefono']) && isset($_POST['Movil']) 
    && isset($_POST['Curp']) && isset($_POST['Calle']) 
    && isset($_POST['Colonia']) && isset($_POST['Num_Ext']) 
    && isset($_POST['Num_Int']) && isset($_POST['Municipio']) )	
    {   	
        RegistrarAlumno($_POST['Nombres'],$_POST['Apellido_1'],$_POST['Apellido_2']
        ,$_POST['Correo'],$_POST['Telefono'],$_POST['Movil'],$_POST['Curp']
        ,$_POST['Calle'],$_POST['Colonia'],$_POST['Num_Ext'],$_POST['Num_Int'],$_POST['Municipio'],$_POST['Carrera'],$_POST['Turno']);
    }
?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-12 text-left"> 
        <br>
            <h2>Exportar lista alumnos</h2>
        <br>
      
   
    </div>
  </div>
</div>
<?php include("../../../footer.php"); ?>
</body>
</html>

