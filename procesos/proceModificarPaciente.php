<?php
        include_once('../conexion/conexion.php');
        session_start();

        $id = $_POST['idPaciente'];
        $ced = $_POST['cedula'];
        $name = $_POST['nombre'];
        $edad = $_POST['edad'];
        $sex = $_POST['sexo'];
        $tel = $_POST['telefono'];
        $correo = $_POST['correo'];

        $query = "UPDATE paciente SET cedula='$ced', nombreCompleto='$name', edad='$edad' , sexo='$sex', telefono='$tel', correo='$correo' WHERE pacienteID='$id'";
        $rsQuery = mysqli_query($con, $query) or die(mysqli_error($con));

        if($rsQuery == true){
            header('Location: ../inicio.php');
            exit();
            mysqli_close($con);

            unset($_POST['btn']);
            unset($_POST['idPaciente']);
            unset($_POST['cedula']);
            unset($_POST['nombre']);
            unset($_POST['edad']);
            unset($_POST['sexo']);
            unset($_POST['telefono']);
            unset($_POST['correo']);
            unset($id);
            unset($ced);
            unset($name);
            unset($edad);
            unset($sex);
            unset($tel);
            unset($correo);
        }
        if($rsQuery == false){
            session_destroy();
            header('Location: ../inicio.php');
            exit();
            echo 'error', '<br />';
        }
?>