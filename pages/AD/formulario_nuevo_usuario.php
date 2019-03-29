
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
   