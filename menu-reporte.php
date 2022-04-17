<?php
    include_once('conexion/conexion.php');
    session_start();

    $ID = $_GET['ID'];
    //$examT = $_GET['tipo'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/microscope.png">
    <title>Registro de Laboratorio Clínico</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#"><img src="img/microscope.png" alt="" width="30" height="30"
                    class="d-inline-block align-text-top">Laboratorio Clínico</a>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <?php
    $query = "Select * from resultado_examen Where citaID='$ID'";
    $rsquery = mysqli_query($con, $query) or die('Error: ' . mysqli_error($con));
    $fileQUERY = mysqli_fetch_assoc($rsquery);
    ?>
    <div class="mx-auto my-5 p-5" style="width: 800px;">
        <div class="card" tabindex="-1" aria-hidden="true">
            <div>
                <div class="card-content">
                    <div class=" card-header">
                        <h5 class="card-title text-center">ID de resultados: <?php echo $fileQUERY['examenID']; ?></h5>
                    </div>
                    <div class="card-body">
                        <input type="hidden" value="<?php echo $fileQUERY['examenID']; ?>" name="idExam" id="idExam">
                        <input type="hidden" value="<?php echo $fileQUERY['citaID']; ?>" name="idCita" id="idCita">
                        <div class="mb-3">
                            <label for="fechaR" class="col-form-label">Fecha de Resultados:</label>
                            <input type="text" class="form-control" id="fechaR" name="fechaR"
                                value="<?php echo $fileQUERY['fechaEntrega']; ?>" readonly>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a type="button" href="reportePDFEnviar.php?ID=<?php echo $fileQUERY['examenID']; ?>"
                            class="btn btn-primary m-1">Enviar reporte</a>
                        <button type="button" data-bs-toggle="modal"
                            data-bs-target="#borrarModal<?php echo $fileQUERY['examenID']; ?>"
                            class="btn btn-primary m-1">Borrar</button>
                        <?php
                            include('modals/borrarExamen.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="piepagina fixed-bottom text-light bg-dark text-center">
        © 2022. Todos los derechos reservados. <br />Maracaibo Venezuela
    </div>
</body>