<?php
    include_once('conexion/conexion.php');
    session_start();

        if(isset($_SESSION['usuarioID'])){
            $ID = $_SESSION['usuarioID'];
            $query = "Select * from usuario Where usuarioID='$ID'";
            $rsquery = mysqli_query($con, $query) or die('Error: ' . mysqli_error($con));
            $countQUERY = mysqli_num_rows($rsquery);
            if($countQUERY<=0){
            header('Location: index.php');
            exit();
            }
            }else{
            header('Location: index.php');
            exit();
            }
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#"><img src="img/microscope.png" alt="" width="30" height="30"
                    class="d-inline-block align-text-top">Laboratorio Clínico</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="" data-bs-toggle="modal"
                            data-bs-target="#agregarModal">Ingresar
                            Paciente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usuario.php">Opciones de usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="procesos/proceLogout.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php include('modals/agregarPaciente.php'); ?>
    <br>
    <br>
    <br>
    <h3 class="text-center">Pacientes:</h3>
    <div class="mx-auto my-5 p-5" style="width: 800px;">
        <table class="table table-light table-hover">
            <thead>
            <tr>
                <td>ID</td>
                <td>Cedula</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Sexo</td>
                <td>Teléfono</td>
                <td>Correo</td>
                <td>Opciones</td>
            </tr>
        </thead>
            <?php
    $query = "Select * from paciente";
    $rsquery = mysqli_query($con, $query) or die('Error: ' . mysqli_error($con));
    while($fileQUERY = mysqli_fetch_assoc($rsquery)){
    ?>
            <tr>
                <td><?php echo $fileQUERY['pacienteID']; ?></td>
                <td><?php echo $fileQUERY['cedula']; ?></td>
                <td><?php echo $fileQUERY['nombreCompleto']; ?></td>
                <td><?php echo $fileQUERY['edad']; ?></td>
                <td><?php echo $fileQUERY['sexo']; ?></td>
                <td><?php echo $fileQUERY['telefono']; ?></td>
                <td><?php echo $fileQUERY['correo']; ?></td>
                <td>
                    <button type="button" data-bs-toggle="modal"
                        data-bs-target="#agregarModal<?php echo $fileQUERY['pacienteID']; ?>"
                        class="btn btn-primary m-1">Agendar examen</button>
                    <a type="button" href="examenes.php?ID=<?php echo $fileQUERY['pacienteID']; ?>"
                        class="btn btn-primary m-1">Ver
                        examenes</a>
                    <button type="button" data-bs-toggle="modal"
                        data-bs-target="#modiModal<?php echo $fileQUERY['pacienteID']; ?>"
                        class="btn btn-primary m-1">Modificar</button>
                    <button type="button" data-bs-toggle="modal"
                        data-bs-target="#borrarModal<?php echo $fileQUERY['pacienteID']; ?>"
                        class="btn btn-primary m-1">Borrar</button>
                </td>
            </tr>
            <?php
    include('modals/agregarCita.php');
    include('modals/modificarPaciente.php');
    include('modals/borrarPaciente.php');
} ?>
        </table>
        <?php
    mysqli_close($con);
    ?>
    </div>
     <div class="piepagina fixed-bottom text-light bg-dark text-center">
        © 2022. Todos los derechos reservados. <br />Maracaibo Venezuela
    </div>
</body>

</html>