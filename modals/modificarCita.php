<div class="modal fade" id="modiModal<?php echo $fileQUERY['citaID']; ?>" tabindex="-1"
    aria-labelledby="modificarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modificarModalLabel">Modificar cita del Paciente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="form4" id="formPaciente" action="procesos/proceModificarCita.php" method="post">
                    <input type="hidden" value="<?php echo $fileQUERY['citaID']; ?>" name="idCita" id="idCita">
                    <input type="hidden" value="<?php echo $fileQUERY['pacienteID']; ?>" name="idPaciente"
                        id="idPaciente">
                    <div class="mb-3">
                        <label for="tipoExamen" class="col-form-label">Tipo de Examen: </label>
                        <select id="tipoExamen" name="tipoExamen" required>
                            <option value="null">Seleccione una opcion</option>
                            <option value="bioquimico">
                                Bioquimico
                            </option>
                            <option value="hematologico">
                                Hematologico
                            </option>
                            <option value="orina">
                                Orina
                            </option>
                            <option value="heces">
                                Heces
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fechaCita" class="col-form-label">Fecha de la Cita:</label>
                        <input type="datetime-local" class="form-control" id="fechaCita" name="fechaCita"
                            value="<?php echo $fileQUERY['fechaCita']; ?>" required>
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