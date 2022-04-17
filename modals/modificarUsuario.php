<div class="modal fade" id="modiModal<?php echo $fileQUERY['usuarioID']; ?>" tabindex="-1"
    aria-labelledby="agregarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarModalLabel">Modificar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="form9" id="formUsuario" action="procesos/proceModificarUser.php" method="post">
                    <input type="hidden" value="<?php echo $fileQUERY['usuarioID']; ?>" name="usuarioID" id="usuarioID">
                    <div class="mb-3">
                        <label for="cedula" class="col-form-label">Cedula:</label>
                        <input type="number" name="cedula" value="<?php echo $fileQUERY['cedula']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="col-form-label">Nombre Completo:</label>
                        <input type="text" name="nombre" value="<?php echo $fileQUERY['nombreCompleto']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="col-form-label">Teléfono:</label>
                        <input type="tel" name="telefono" value="<?php echo $fileQUERY['telefono']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="col-form-label">Correo:</label>
                        <input type="email" name="correo" value="<?php echo $fileQUERY['correo']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="contra" class="col-form-label">Password:</label>
                        <input type="password" name="contra" value="<?php echo $fileQUERY['password']; ?>" required>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Modificar" name="btn">
            </div>
            </form>
        </div>
    </div>
</div>
</div>