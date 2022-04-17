<div class="modal fade" id="agregarModal" tabindex="-1" aria-labelledby="agregarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarModalLabel">Ingresar Paciente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="form4" action="procesos/proceAgregarPaciente.php" method="post">
                    <div class="mb-3">
                        <label for="cedula" class="col-form-label">Cedula:</label>
                        <input type="number" class="form-control" id="cedula" name="cedula" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="col-form-label">Nombre Completo:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="col-form-label">Edad:</label>
                        <input type="number" class="form-control" id="edad" name="edad" required>
                    </div>
                    <div class="mb-3">
                        <label for="sexo" class="col-form-label">Sexo:</label>
                        <br>
                        <input type="radio" id="M" name="sexo" value="M">
                        <label for="M">Masculino</label><br>
                        <input type="radio" id="F" name="sexo" value="F">
                        <label for="F">Femenino</label><br>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="col-form-label">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="col-form-label">Correo:</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
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