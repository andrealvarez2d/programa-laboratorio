<div class="modal fade" id="modiModal<?php echo $fileQUERY['pacienteID']; ?>" tabindex="-1"
    aria-labelledby="modificarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modificarModalLabel">Modificar Datos del Paciente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="form4" id="formPaciente" action="procesos/proceModificarPaciente.php" method="post">
                    <input type="hidden" value="<?php echo $fileQUERY['pacienteID']; ?>" name="idPaciente"
                        id="idPaciente">
                    <div class="mb-3">
                        <label for="cedula" class="col-form-label">Cedula:</label>
                        <input type="number" class="form-control" id="cedula" name="cedula"
                            value="<?php echo $fileQUERY['cedula']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="col-form-label">Nombre Completo:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="<?php echo $fileQUERY['nombreCompleto']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="col-form-label">Edad:</label>
                        <input type="number" class="form-control" id="edad" name="edad"
                            value="<?php echo $fileQUERY['edad']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="sexo" class="col-form-label">Sexo:</label>
                        <input type="radio" id="M" name="sexo" <?php if($fileQUERY['sexo']=="M") {echo "checked";}?>
                            value="M">
                        <label for="M">Masculino</label><br>
                        <input type="radio" id="F" name="sexo" <?php if($fileQUERY['sexo']=="F") {echo "checked";}?>
                            value="F">
                        <label for="F">Femenino</label><br>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="col-form-label">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono"
                            value="<?php echo $fileQUERY['telefono']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="col-form-label">Correo:</label>
                        <input type="email" class="form-control" id="correo" name="correo"
                            value="<?php echo $fileQUERY['correo']; ?>" required>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" name="btn" value="Guardar">
            </div>
            </form>
        </div>
    </div>
</div>
</div>