<?php
    require_once('../verificar.php');
    include("../../../head.php");
    require_once("../../../mvc/modelo/administracion/clase_consultas_administracion.php");
    $llamado = new consultas_administracion();
    if(isset($_POST['Nombre']) && isset($_POST['Clave']) && isset($_POST['Creditos']) && isset($_POST['CreditosM']) && isset($_POST['Matricula_Coordinador']))	
    {  
        require_once("../../../mvc/modelo/administracion/clase_insersiones_administracion.php");
        $llamado = new insersiones_administracion();
        $llamado->RegistrarCarrera(
        htmlspecialchars($_POST['Nombre'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Clave'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Creditos'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['CreditosM'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['Matricula_Coordinador'], ENT_QUOTES, 'UTF-8')
        );
    }
?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-12 text-left"> 
        <br>
            <h2>Registro de nueva carrera</h2>
        <br>
        <form action="<?php echo $_SESSION['Ruta_web']."pages/AD/".$_SESSION['Pagina_Actual']."/nuevo.php" ?>" method="POST" autocomplete="OFF">
            <div class="form-group">
                <label for="inputCarrera" class="col-lg-1 control-label">Nombre Carrera: </label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
                </div>
                <label for="inputClave" class="col-lg-1 control-label">Clave de la carrera:</label>
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
            <label for="inputCreditosM" class="col-lg-2 control-label">Creditos minimos para realizar el servicio social:</label>
                <div class="col-lg-1">
                    <input type="text" class="form-control" id="CreditosM" name="CreditosM" placeholder="Creditos" required>
                </div>
            </div>
            <hr><hr><hr>

            <div class="form-group">
            <label for="inputCoordinador" class="col-lg-2 control-label">Coordinador designado:</label>
                <div class="col-lg-4">
                        <select class="form-control" name= "Matricula_Coordinador">
    			            <option value="1">Matricula - Nombre completo</option>
                            <?php $llamado->ConsultarCoordinador(); ?>
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
