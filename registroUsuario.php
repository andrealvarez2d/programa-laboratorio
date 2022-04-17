<?php
    include_once('conexion/conexion.php');
    session_start();
    $ced = null;
    $name = null;
    $tel = null;
    $correo = null;
    $pwd = null;

    if(isset($_POST['btn']) && $_POST['btn'] == 'Registrar'){
        if(isset($_POST['cedula']) && isset($_POST['nombre']) && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['contra']) && !empty($_POST['cedula']) && !empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['correo']) && !empty($_POST['contra'])){
            $ced = $_POST['cedula'];
            $name = $_POST['nombre'];
            $tel = $_POST['telefono'];
            $correo = $_POST['correo'];
            $pwd = md5($_POST['contra']);
            $query = "INSERT INTO usuario (cedula, nombreCompleto, telefono, correo, password) values('$ced', '$name', '$tel', '$correo', '$pwd')";
            $rsQuery = mysqli_query($con, $query) or die(mysqli_error($con));

            if($rsQuery == true){

            mysqli_close($con);

            unset($_POST['btn']);
            unset($_POST['cedula']);
            unset($_POST['nombre']);
            unset($_POST['telefono']);
            unset($_POST['correo']);
            unset($_POST['contra']);
            unset($ced);
            unset($name);
            unset($tel);
            unset($correo);
            unset($pwd);
        }
        if($rsQuery == false){
            session_destroy();
            header('Location: index.php');
            exit();
        }
    }else{
        session_destroy();
        header('Location: index.php');
        exit();
        }
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
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#"><img src="img/microscope.png" alt="" width="30" height="30"
                    class="d-inline-block align-text-top">Laboratorio Clínico</a>
        </div>
    </nav>
    <div class="mx-auto my-5 p-5" style="width: 650px;">
        <div class="card" tabindex="-1" aria-hidden="true">
            <div>
                <div class="card-content">
                    <div class=" card-header">
                        <h2 class="card-title text-center">Registrar Usuario</h2>
                    </div>
                    <div class="card-body">
                        <form name="form2" action="registroUsuario.php" method="post">
                            <div class="row">
                                <div class="col-6">
                                <div class="mb-3">
                                    <label>Cedula:</label><br />
                                    <input type="number" name="cedula" required><br />
                                </div>
                                <div class="mb-3">
                                    <label>Nombre Completo:</label><br />
                                    <input type="text" name="nombre" required><br />
                                </div>
                                <div class="mb-3">
                                    <label>Teléfono:</label><br />
                                    <input type="tel" name="telefono" required><br />
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-3">
                                    <label>Correo:</label><br />
                                    <input type="email" name="correo" required><br />
                                </div>
                                <div class="mb-3">
                                    <label>Password:</label><br />
                                    <input type="password" name="contra" required><br />
                                </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" value="Registrar" name="btn" data-bs-toggle="modal"
                            data-bs-target="#guardarModal" class="btn btn-primary m-1">
                        <a href="index.php" class="btn btn-primary m-1"> Regresar</a>
                    </div>
                    <?php
            include('modals/alertaRegistro.php');
            ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="piepagina fixed-bottom text-light bg-dark">
        © 2022. Todos los derechos reservados. <br />Maracaibo Venezuela
    </div>
</body>

</html>