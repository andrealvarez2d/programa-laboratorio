<div class="modal fade" id="agregarModal<?php echo $fileQUERY['citaID']; ?>" tabindex="-1"
    aria-labelledby="agregarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarModalLabel">Ingresar Resultados</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="form4" action="procesos/proceIngresarResultados.php" method="post" target="_BLACK">
                    <input type="hidden" value="<?php echo $fileQUERY['citaID']; ?>" name="idCita" id="idCita">
                    <input type="hidden" value="<?php echo $fileQUERY['tipoExamen']; ?>" name="tipoExamen"
                        id="tipoExamen">
                    <?php
                    if ($fileQUERY['tipoExamen'] == 'bioquimico'){?>
                    <div class="mb-3">
                        <label for="glucosa" class="col-form-label">Glucosa:</label>
                        <input type="number" class="form-control" id="glucosa" name="glucosa" step="0.01">
                        <p>mg/dl</p>
                    </div>
                    <div class="mb-3">
                        <label for="acido" class="col-form-label">Ácido Urico:</label>
                        <input type="number" class="form-control" id="acido" name="acido" step="0.01">
                        <p>mg/dl</p>
                    </div>
                    <div class="mb-3">
                        <label for="creatinina" class="col-form-label">Creatinina:</label>
                        <input type="number" class="form-control" id="creatinina" name="creatinina" step="0.01">
                        <p>mg/dl</p>
                    </div>
                    <div class="mb-3">
                        <label for="urea" class="col-form-label">Urea:</label>
                        <input type="number" class="form-control" id="urea" name="urea" step="0.01">
                        <p>mg/dl</p>
                    </div>
                    <div class="mb-3">
                        <label for="colesterol" class="col-form-label">Colesterol:</label>
                        <input type="number" class="form-control" id="colesterol" name="colesterol" step="0.01">
                        <p>mg/dl</p>
                    </div>
                    <div class="mb-3">
                        <label for="trigliceridos" class="col-form-label">Trigliceridos:</label>
                        <input type="number" class="form-control" id="trigliceridos" name="trigliceridos" step="0.01">
                        <p>mg/dl</p>
                    </div>
                    <div class="mb-3">
                        <label for="hierro" class="col-form-label">Hierro:</label>
                        <input type="number" class="form-control" id="hierro" name="hierro" step="0.01">
                        <p>mg/dl</p>
                    </div>
                    <div class="mb-3">
                        <label for="glicemia" class="col-form-label">Glicemia:</label>
                        <input type="number" class="form-control" id="glicemia" name="glicemia" step="0.01">
                        <p>mg/dl</p>
                    </div>

                    <?php } else if ($fileQUERY['tipoExamen'] == 'hematologico'){?>
                    <h4>Examen de Hemograma</h4>
                    <div class="mb-3">
                        <label for="rojo" class="col-form-label">GLOBULOS ROJOS:</label>
                        <input type="number" class="form-control" id="rojo" name="rojo" step="0.01" required>
                        <p>X mm^3</p>
                    </div>
                    <div class="mb-3">
                        <label for="hemoglobina" class="col-form-label">Hemoglobina:</label>
                        <input type="number" class="form-control" id="hemoglobina" name="hemoglobina" step="0.01"
                            required>
                        <p>gr/dl</p>
                    </div>
                    <div class="mb-3">
                        <label for="hematocrito" class="col-form-label">Hematòcrito:</label>
                        <input type="number" class="form-control" id="hematocrito" name="hematocrito" step="0.01"
                            required>
                        <p>%</p>
                    </div>
                    <div class="mb-3">
                        <label for="vgm" class="col-form-label">VGM:</label>
                        <input type="number" class="form-control" id="vgm" name="vgm" step="0.01" required>
                        <p>micras cùbicas</p>
                    </div>
                    <div class="mb-3">
                        <label for="hcm" class="col-form-label">HCM:</label>
                        <input type="number" class="form-control" id="hcm" name="hcm" step="0.01" required>
                        <p>micro microgramos</p>
                    </div>
                    <div class="mb-3">
                        <label for="chcm" class="col-form-label">CHCM:</label>
                        <input type="number" class="form-control" id="chcm" name="chcm" step="0.01" required>
                        <p>%</p>
                    </div>
                    <div class="mb-3">
                        <label for="blancos" class="col-form-label">GLOBULOS BLANCOS:</label>
                        <input type="number" class="form-control" id="blancos" name="blancos" step="0.01" required>
                        <p>X mm^3</p>
                    </div>
                    <div class="mb-3">
                        <label for="segmentado" class="col-form-label">Neutròfilos segmentados:</label>
                        <input type="number" class="form-control" id="segmentado" name="segmentado" step="0.01"
                            required>
                        <p>%</p>
                    </div>
                    <div class="mb-3">
                        <label for="banda" class="col-form-label">Neutròfilos en banda:</label>
                        <input type="number" class="form-control" id="banda" name="banda" step="0.01" required>
                        <p>%</p>
                    </div>
                    <div class="mb-3"></div>
                    <label for="linfocitos" class="col-form-label">Linfocitos:</label>
                    <input type="number" class="form-control" id="linfocitos" name="linfocitos" step="0.01" required>
                    <p>%</p>
                    <div class="mb-3">
                        <label for="monocitos" class="col-form-label">Monocitos:</label>
                        <input type="number" class="form-control" id="monocitos" name="monocitos" step="0.01" required>
                        <p>%</p>
                    </div>
                    <div class="mb-3">
                        <label for="eosinofilos" class="col-form-label">Eosinòfilos:</label>
                        <input type="number" class="form-control" id="eosinofilos" name="eosinofilos" step="0.01"
                            required>
                        <p>%</p>
                    </div>
                    <div class="mb-3">
                        <label for="basofilos" class="col-form-label">Basòfilos:</label>
                        <input type="number" class="form-control" id="basofilos" name="basofilos" step="0.01" required>
                        <p>%</p>
                    </div>

                    <?php } else if ($fileQUERY['tipoExamen'] == 'orina'){ ?>
                    <h4>Examen General de Orina</h4>
                    <div class="mb-3">
                        <label for="color" class="col-form-label">Color:</label>
                        <input type="text" class="form-control" id="color" name="color" required>
                    </div>
                    <div class="mb-3">
                        <label for="aspecto" class="col-form-label">Aspecto:</label>
                        <input type="text" class="form-control" id="aspecto" name="aspecto" required>
                    </div>
                    <div class="mb-3">
                        <label for="densidad" class="col-form-label">Densidad:</label>
                        <input type="number" class="form-control" id="densidad" name="densidad" step="0.01" required>
                        <p>gr/dl</p>
                    </div>
                    <div class="mb-3">
                        <label for="ph" class="col-form-label">PH:</label>
                        <input type="number" class="form-control" id="ph" name="ph" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="proteinas" class="col-form-label">Proteínas: </label>
                        <select id="proteinas" name="proteinas" required>
                            <option value="null">Selecciona una opcion</option>
                            <option value="Positivo(+++)">Positivo(+++)</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="urobilinogeno" class="col-form-label">Urobilinògeno: </label>
                        <select id="urobilinogeno" name="urobilinogeno" required>
                            <option value="null">Selecciona una opcion</option>
                            <option value="Normal (0.2 mg/dl)">Normal (0.2 mg/dl)</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nitratos" class="col-form-label">Nitratos: </label>
                        <select id="nitratos" name="nitratos" required>
                            <option value="null">Selecciona una opcion</option>
                            <option value="Positivo(+++)">Positivo(+++)</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="hemoglobina" class="col-form-label">Hemoglobina: </label>
                        <select id="hemoglobina" name="hemoglobina" required>
                            <option value="null">Selecciona una opcion</option>
                            <option value="Positivo(+++)">Positivo(+++)</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="glucosa" class="col-form-label">Glucosa: </label>
                        <select id="glucosa" name="glucosa" required>
                            <option value="null">Selecciona una opcion</option>
                            <option value="Positivo(+++)">Positivo(+++)</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cuerpos" class="col-form-label">Cuerpos Cetònicos: </label>
                        <select id="cuerpos" name="cuerpos" required>
                            <option value="null">Selecciona una opcion</option>
                            <option value="Positivo(+++)">Positivo(+++)</option>
                            <option value="Negativo">Negativo</option>
                        </select>
                    </div>

                    <?php } else if ($fileQUERY['tipoExamen'] == 'heces'){?>
                    <h4>Examen General de Heces</h4>
                    <div class="mb-3">
                        <label for="color" class="col-form-label">Color:</label>
                        <input type="text" class="form-control" id="color" name="color" required>
                    </div>
                    <div class="mb-3">
                        <label for="aspecto" class="col-form-label">Aspecto:</label>
                        <input type="text" class="form-control" id="aspecto" name="aspecto" required>
                    </div>
                    <div class="mb-3">
                        <label for="olor" class="col-form-label">Olor:</label>
                        <input type="text" class="form-control" id="olor" name="olor" required>
                    </div>
                    <div class="mb-3">
                        <label for="reaccion" class="col-form-label">Reacción:</label>
                        <input type="text" class="form-control" id="reaccion" name="reaccion" required>
                    </div>
                    <div class="mb-3">
                        <label for="consistencia" class="col-form-label">Consistencia:</label>
                        <input type="text" class="form-control" id="consistencia" name="consistencia" required>
                    </div>
                    <div class="mb-3">
                        <label for="sangre" class="col-form-label">Sangre: </label>
                        <select id="sangre" name="sangre" required>
                            <option value="null">Selecciona una opcion</option>
                            <option value="Presente">Presente</option>
                            <option value="Ausente">Ausente</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="moco" class="col-form-label">Moco: </label>
                        <select id="moco" name="moco" required>
                            <option value="null">Selecciona una opcion</option>
                            <option value="Ausente">Ausente</option>
                            <option value="Escaso">Escaso</option>
                            <option value="Abundante">Abundante</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pus" class="col-form-label">Pus: </label>
                        <select id="pus" name="pus" required>
                            <option value="null">Selecciona una opcion</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="restos" class="col-form-label">Restos alimenticios: </label>
                        <select id="restos" name="restos" required>
                            <option value="null">Selecciona una opcion</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="helmintos" class="col-form-label">Helmintos: </label>
                        <select id="helmintos" name="helmintos" required>
                            <option value="null">Selecciona una opcion</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <?php } ?>

            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" name="btn" value="Guardar">
            </div>
            </form>
        </div>
    </div>
</div>
</div>