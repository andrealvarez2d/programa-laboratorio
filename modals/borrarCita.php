<div class="modal fade" id="borrarModal<?php echo $fileQUERY['citaID']; ?>" tabindex="-1"
    aria-labelledby="borrarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="borrarModalLabel">Eliminar Cita</h5>
            </div>
            <div class="modal-body">
                ¿Desea eliminar la cita programada a las "<?php echo $fileQUERY['fechaCita']; ?>"?
            </div>
            <div class="modal-footer">
                <form action="procesos/proceEliminarCita.php">
                    <button type="submit" value="<?php echo $fileQUERY['citaID']; ?>"
                        class="btn btn-primary btnBorrar" data-bs-dismiss="modal" name="id">SI</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
                </form>
            </div>
        </div>
    </div>
</div>