<?php
        include_once('../conexion/conexion.php');
        session_start();
        $id = $_REQUEST["id"];

        $QUERYdel = "DELETE from resultado_examen WHERE examenID='$id'";
        $rsQUERYdel = mysqli_query($con, $QUERYdel) or die('Error: ' . mysqli_error($con));
        if($rsQUERYdel == true){
            //header('Location: ../inicio.php');
            echo '<script type="text/javascript">
            window.close();
            </script>';
            exit();
        }
        if($rsQUERYdel == false){
            echo 'Error no se pudo Eliminar';
            echo '<a href="inicio.php">Regresar</a>';
        }
        mysqli_close($con);
?>