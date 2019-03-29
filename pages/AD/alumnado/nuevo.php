<?php
    require_once('../verificar.php');
    include("../../../head.php");
    require_once("../../../mvc/modelo/administracion/clase_consultas_administracion.php");
    $llamado = new consultas_administracion();
    if(isset($_POST['Nombres']) && isset($_POST['Apellido_1']) && isset($_POST['Apellido_2']) && isset($_POST['Correo']) && isset($_POST['Telefono']) && isset($_POST['Movil']) && isset($_POST['Curp']) && isset($_POST['Calle']) && isset($_POST['Colonia']) && isset($_POST['Num_Ext']) && isset($_POST['Num_Int']) && isset($_POST['Municipio']) )	
    {   	
        require_once("../../../mvc/modelo/administracion/clase_insersiones_administracion.php");
        $llamado = new insersiones_administracion();
        $llamado->RegistrarAlumno(
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
        htmlspecialchars($_POST['Municipio'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Carrera'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Turno'], ENT_QUOTES, 'UTF-8')
        );
    }
?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-12 text-left"> 
        <br>
            <h2>Registro de nuevo alumno</h2>
        <br>
        <form action="<?php echo $_SESSION['Ruta_web']."pages/AD/".$_SESSION['Pagina_Actual']."/nuevo.php" ?>" method="POST" autocomplete="OFF">
            <div class="form-group">
                <label for="inputNombres" class="col-lg-1 control-label">Nombre(s): </label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Nombres" required>
                </div>
                <label for="inputApelido_1" class="col-lg-1 control-label">Apellido 1:</label>
                <div class="col-lg-2">
                    <input type="text" class="form-control" id="Apellido_1" name="Apellido_1" placeholder="Apellido 1" required>
                </div>
                <label for="inputApelido_2" class="col-lg-1 control-label">Apellido 2:</label>
                <div class="col-lg-2">
                    <input type="text" class="form-control" id="Apellido_2" name="Apellido_2" placeholder="Apellido 2" required>
                </div>
            </div>
            <hr><hr>
            <div class="form-group">
                <label for="inputCorreo" class="col-lg-1 control-label">Correo: </label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" id="Correo" name="Correo" placeholder="Correo" required>
                </div>
                <label for="inputTelefono" class="col-lg-1 control-label">Telefono: </label>
                <div class="col-lg-2">
                    <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono" required>
                </div>
                <label for="inputMovil" class="col-lg-1 control-label">Movil: </label>
                <div class="col-lg-2">
                    <input type="text" class="form-control" id="Movil" name="Movil" placeholder="Movil" required>
                </div>
            </div>
            <hr><hr>
            <div class="form-group">
                <label for="inputCurp" class="col-lg-1 control-label">CURP: </label>
                <div class="col-lg-2">
                    <input type="text" class="form-control" id="Curp" name="Curp" placeholder="Curp" required> 
                </div>
                <label for="inputTurno" class="col-lg-1 control-label">Turno:</label>
                <div class="col-lg-2">
                        <select class="form-control" name= "Turno">
    			            <option value="Matutino">Matutino</option>
                            <option value="Vespertino">Vespertino</option>
                            <option value="Mixto">Mixto</option>
			            </select>
                </div>
            </div>
            <hr><hr>
            <div class="form-group">
            <label for="inputCarrera" class="col-lg-1 control-label">Carrera:</label>
                <div class="col-lg-5">
                        <select class="form-control" name= "Carrera">
    			            <option value="1">Clave - Nombre Carrera</option>
                            <?php $llamado->ConsultarCarrera(); ?>
			            </select>
                </div>
            </div>
            <hr><hr>
            <div class="form-group">
                <label for="inputCalle" class="col-lg-1 control-label">Calle: </label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" id="Calle" name="Calle" placeholder="Calle" required>
                </div>
                <label for="inputColonia" class="col-lg-1 control-label">Colonia: </label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" id="Colonia" name="Colonia" placeholder="Colonia" required>
                </div>
            </div>
            <hr><hr>
            <div class="form-group">
            <label for="inputNum_Ext" class="col-lg-1 control-label">Numero Exterior: </label>
                <div class="col-lg-1">
                    <input type="text" class="form-control" id="Num_Ext" name="Num_Ext" placeholder="ej. 100" required>
                </div>
                <label for="inputNum_Int" class="col-lg-1 control-label">Numero Interior: </label>
                <div class="col-lg-1">
                    <input type="text" class="form-control" id="Num_Int" name="Num_Int" placeholder="ej. 2" required>
                </div>
                <label for="inputMunicipio" class="col-lg-1 control-label">Municipio: </label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" id="Municipio" name="Municipio" placeholder="Municipio" required>
                </div>
            </div>
            <hr><hr><hr><hr>
            <div class="form-group">
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>
                </div>
                <div class="col-lg-2">
                    <a href="<?php echo $_SESSION['Ruta_web']."pages/AD/".$_SESSION['Pagina_Actual'] ?>"><button type="button" class="btn btn-primary btn-lg btn-block">Cancelar</button></a>
                </div>
            </div>
        </form>
   
    </div>
  </div>
</div>
<?php include("../../../footer.php"); ?>
</body>
</html>

