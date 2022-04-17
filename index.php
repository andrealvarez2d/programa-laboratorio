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
    <div class="mx-auto my-5 p-5" style="width: 450px;">
        <div class="card" tabindex="-1" aria-hidden="true">
            <div>
                <div class="card-content">
                    <div class=" card-header">
                        <h2 class="card-title text-center">Bienvenido</h2>
                    </div>
                    <div class="card-body">
                        <form name="form1" action="procesos/proceLogin.php" method="post">
                            <div class="mb-3">
                                <label>Cedula:</label><br />
                                <input type="text" name="cedula" required><br />
                            </div>
                            <div class="mb-3">
                                <label>Password:</label><br />
                                <input type="password" name="contra" required><br />
                            </div>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" value="Entrar" name="btn" class="btn btn-primary m-1">
                        <a href="registroUsuario.php" class="btn btn-primary m-1">Registrar</a>
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

</html>