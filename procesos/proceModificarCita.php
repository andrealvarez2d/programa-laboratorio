<?php
        include_once('../conexion/conexion.php');
        session_start();

        $id = $_POST['idCita'];
        $idP = $_POST['idPaciente'];
        $tExam = $_POST['tipoExamen'];
        $fecha = $_POST['fechaCita'];

        $query = "UPDATE cita SET tipoExamen='$tExam', fechaCita='$fecha' WHERE citaID='$id' AND pacienteID='$idP'";
        $rsQuery = mysqli_query($con, $query) or die(mysqli_error($con));

        if($rsQuery == true){
            header('Location: ../examenes.php?ID='.$idP);
            exit();
            mysqli_close($con);

            unset($_POST['btn']);
            unset($_POST['citaID']);
            unset($_POST['tipoExamen']);
            unset($_POST['fechaCita']);
            unset($id);
            unset($tExam);
            unset($fecha);
        }
        if($rsQuery == false){
            session_destroy();
            header('Location: ../inicio.php');
            exit();
            echo 'error', '<br />';
        }
?>