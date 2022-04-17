<?php
        include_once('../conexion/conexion.php');
        session_start();
        $ID = NULL;
        $ced = null;
        $name = null;
        $tel = null;
        $correo = null;
        $pwd = null;

        if(isset($_POST['btn']) && $_POST['btn'] == 'Modificar'){
        if(isset($_POST['cedula']) && isset($_POST['nombre']) && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['contra']) && !empty($_POST['cedula']) && !empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['correo']) && !empty($_POST['contra'])){
                $ID = $_POST['usuarioID'];
                $ced = $_POST['cedula'];
                $name = $_POST['nombre'];
                $tel = $_POST['telefono'];
                $correo = $_POST['correo'];
                $query = "Select * from usuario Where usuarioID='$ID'";

                $rsquery = mysqli_query($con, $query) or die('Error: ' . mysqli_error($con));
                $filequery = mysqli_fetch_array($rsquery);
                if($filequery['password'] === md5($_POST['contra'])){
                    $pwd = $filequery['password'];
                }else{
                    $pwd = md5($_POST['contra']);
                }

                $QUERYmod = "UPDATE usuario SET cedula='$ced', nombreCompleto='$name', telefono='$tel', correo='$correo', password='$pwd'";
                $QUERYmod .= "WHERE usuarioID='$ID'";
                $rsQUERYmod = mysqli_query($con, $QUERYmod) or die('Error: ' . mysqli_error($con));
                if($rsQUERYmod == true){
                    header('Location: ../index.php');
                    exit();
                }
                if($rsQUERYmod == false){
                    echo 'Error no se pudo Actualizar el usuario';
                }
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
        }
?>