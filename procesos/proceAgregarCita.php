<?php
        include_once('../conexion/conexion.php');
        session_start();

        $idP = NULL;
        $tipoE = NULL;
        $fecha = NULL;

        if(isset($_POST['btn']) && $_POST['btn'] == 'Guardar'){
                $idP = $_POST['idPaciente'];
                $tipoE = $_POST['tipoExamen'];
                $fecha = $_POST['fechaCita'];

                $QUERY = "INSERT INTO cita (pacienteID, tipoExamen, fechaCita) values('$idP', '$tipoE', '$fecha')";
                $rsQUERY = mysqli_query($con, $QUERY) or die(mysqli_error($con));

                if($rsQUERY == true){

                mysqli_close($con);

                unset($_POST['btn']);
                unset($_POST['idPaciente']);
                unset($_POST['tipoExamen']);
                unset($_POST['fechaCita']);
                unset($idP);
                unset($tipoE);
                unset($fecha);
                header('Location: ../inicio.php');

            }
            if($rsQUERY == false){
                session_destroy();
                header('Location: ../inicio.php');
                exit();
                echo 'error', '<br />';
            }
            }
?>