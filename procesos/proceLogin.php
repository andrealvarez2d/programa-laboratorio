<?php
        include_once('../conexion/conexion.php');
        session_start();
        $ced = null;
        $pwd = null;

        if(isset($_POST['btn']) && $_POST['btn'] == 'Entrar'){
            if(isset($_POST['cedula']) && isset($_POST['contra']) && !empty($_POST['cedula']) && !
            empty($_POST['contra'])){
                $ced = $_POST['cedula'];
                $pwd = md5($_POST['contra']);
                $query = "Select * From usuario Where cedula ='$ced' And password='$pwd'";
                $rsQuery = mysqli_query($con, $query) or die(mysqli_error($con));
                $fileQUERY = mysqli_fetch_array($rsQuery);
                if($rsQuery == true){

                $_SESSION['usuarioID'] = $fileQUERY['usuarioID'];
                $_SESSION['cedula'] = $fileQUERY['cedula'];
                header('Location: ../inicio.php');
                exit();
                mysqli_close($con);

                unset($_POST['btn']);
                unset($_POST['cedula']);
                unset($_POST['contra']);
                unset($ced);
                unset($pwd);
                }
                if($rsQuery == false){
                    session_destroy();
                    header('Location: index.php');
                    exit();
                    echo 'error', '<br />';
                }
            }
        }
?>