<?php
        include_once('../conexion/conexion.php');
        session_start();

        $ced = NULL;
        $name = NULL;
        $edad = NULL;
        $sex = NULL;
        $tel = NULL;
        $correo = NULL;

        if(isset($_POST['btn']) && $_POST['btn'] == 'Guardar'){
                $ced = $_POST['cedula'];
                $name = $_POST['nombre'];
                $edad = $_POST['edad'];
                $sex = $_POST['sexo'];
                $tel = $_POST['telefono'];
                $correo = $_POST['correo'];

                $QUERY = "INSERT INTO paciente (cedula, nombreCompleto, edad, sexo, telefono, correo) values('$ced', '$name','$edad' , '$sex', '$tel', '$correo')";
                $rsQUERY = mysqli_query($con, $QUERY) or die(mysqli_error($con));

                if($rsQUERY == true){

                mysqli_close($con);

                unset($_POST['btn']);
                unset($_POST['cedula']);
                unset($_POST['nombre']);
                unset($_POST['edad']);
                unset($_POST['sexo']);
                unset($_POST['telefono']);
                unset($_POST['correo']);
                unset($ced);
                unset($name);
                unset($edad);
                unset($sex);
                unset($tel);
                unset($correo);
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