<?php
    require_once('../verificar.php');
    include("../../../head.php");
    require_once("../../../mvc/modelo/administracion/clase_consultas_administracion.php");
    $llamado = new consultas_administracion();
    if(isset($_POST['Nombre']) && isset($_POST['Clave']) && isset($_POST['Creditos']) && isset($_POST['Semestre']) && isset($_POST['Carrera']))	
    {   
        require_once("../../../mvc/modelo/administracion/clase_insersiones_administracion.php");
        $llamado = new insersiones_administracion();
        $llamado->RegistrarAsignatura(
        htmlspecialchars($_POST['Nombre'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Clave'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Creditos'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Semestre'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Carrera'], ENT_QUOTES, 'UTF-8')
        );
    }
?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-12 text-left"> 
      <div class="col-lg-2">
                
                </div>
        <br>
            <h2>Registro de nueva Asignatura</h2>
        <br>
        <form action="<?php echo $_SESSION['Ruta_web']."pages/AD/".$_SESSION['Pagina_Actual']."/nuevo.php" ?>" method="POST" autocomplete="OFF">
            <div class="form-group">
                <label for="inputCarrera" class="col-lg-1 control-label">Nombre Asignatura: </label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
                </div>
                <label for="inputClave" class="col-lg-1 control-label">Clave de la asignatura:</label>
                <div class="col-lg-1">
                    <input type="text" class="form-control" id="Clave" name="Clave" placeholder="Clave" required>
                </div>
                <label for="inputCreditos" class="col-lg-1 control-label">Creditos: </label>
                <div class="col-lg-1">
                    <input type="text" class="form-control" id="Creditos" name="Creditos" placeholder="Creditos" required>
                </div>
            </div>
            <hr><hr><hr>
            <div class="form-group">
            <label for="inputSemestre" class="col-lg-1 control-label">Semestre:</label>
                <div class="col-lg-1">
                    <input type="text" class="form-control" id="Semestre" name="Semestre" placeholder="Semestre" required>
                </div>
            </div>
            <hr><hr><hr>

            <div class="form-group">
            <label for="inputCarrera" class="col-lg-1 control-label">Carrera:</label>
                <div class="col-lg-5">
                        <select class="form-control" name= "Carrera">
    			            <option value="1">Clave - Nombre Carrera</option>
                            <?php $llamado->ConsultarCarrera(); ?>
			            </select>
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
