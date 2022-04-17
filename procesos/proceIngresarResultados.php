<?php
    include_once('../conexion/conexion.php');
    session_start();

    $idC = $_POST['idCita'];
    $tipoE = $_POST['tipoExamen'];
    date_default_timezone_set('America/Caracas');
    $fecha = date ('Y-m-d');

    if(isset($_POST['btn']) && $_POST['btn'] == 'Guardar'){

        if($tipoE == 'bioquimico'){
            $glu = $_POST['glucosa'];
            $aci = $_POST['acido'];
            $crea = $_POST['creatinina'];
            $urea = $_POST['urea'];
            $col = $_POST['colesterol'];
            $tri = $_POST['trigliceridos'];
            $hie = $_POST['hierro'];
            $gli = $_POST['glicemia'];
            $cadena = 'Glucosa: '.$glu.' mg/dl <br>'.'Ácido Urico: '.$aci.' mg/dl <br>'.'Creatinina: '.$crea.' mg/dl <br>'.'Urea: '.$urea.' mg/dl <br>'.'Colesterol: '.$col.' mg/dl <br>'.'Trigliceridos: '.$tri.' mg/dl <br>'.'Hierro: '.$hie.' mg/dl <br>'.'Glicemina: '.$gli.' mg/dl ';

            $QUERY = "INSERT INTO resultado_examen (citaID, resultados, fechaEntrega) values('$idC', '$cadena','$fecha')";
            $rsQUERY = mysqli_query($con, $QUERY) or die(mysqli_error($con));

                if($rsQUERY == true){

                mysqli_close($con);
                header('Location: ../menu-reporte.php?ID='.$idC);

            }
            if($rsQUERY == false){
                session_destroy();
                header('Location: ../examenes.php');
                exit();
                echo 'error', '<br />';
            }

        } else if($tipoE == 'hematologico'){
            $red = $_POST['rojo'];
            $hemo = $_POST['hemoglobina'];
            $hema = $_POST['hematocrito'];
            $vgm = $_POST['vgm'];
            $hcm = $_POST['hcm'];
            $chcm = $_POST['chcm'];
            $white = $_POST['blancos'];
            $seg = $_POST['segmentado'];
            $banda = $_POST['banda'];
            $linfo = $_POST['linfocitos'];
            $mono = $_POST['monocitos'];
            $eos = $_POST['eosinofilos'];
            $baso = $_POST['basofilos'];
            $cadena = 'GLOBULOS ROJOS: '.$red.' X mm^3 <br>'.'Hemoglobina: '.$hemo.' gr/dl <br>'.'Hematòcrito: '.$hema.' % <br>'.'VGM: '.$vgm.' micras cùbicas <br>'.'HCM: '.$hcm.' micro microgramos <br>'.'CHCM: '.$chcm.' % <br>'.'GLOBULOS BLANCOS: '.$white.' X mm^3 <br>'.'Neutròfilos segmentados: '.$seg.' % <br>'.'Neutròfilos en banda: '.$banda.' % <br>'.'Linfocitos: '.$linfo.' % <br>'.'Monocitos: '.$mono.' % <br>'.'Eosinòfilos: '.$eos.' % <br>'.'Basòfilos: '.$baso.' % <br>';

            $QUERY = "INSERT INTO resultado_examen (citaID, resultados, fechaEntrega) values('$idC', '$cadena','$fecha')";
            $rsQUERY = mysqli_query($con, $QUERY) or die(mysqli_error($con));

                if($rsQUERY == true){

                mysqli_close($con);
                header('Location: ../menu-reporte.php?ID='.$idC);
            }

            if($rsQUERY == false){
                session_destroy();
                header('Location: ../examenes.php');
                exit();
                echo 'error', '<br />';
            }

        } else if($tipoE == 'orina'){
            $color = $_POST['color'];
            $aspec = $_POST['aspecto'];
            $den = $_POST['densidad'];
            $ph = $_POST['ph'];
            $prot = $_POST['proteinas'];
            $uro = $_POST['urobilinogeno'];
            $nit = $_POST['nitrato'];
            $hemo = $_POST['hemoglobina'];
            $glu = $_POST['glucosa'];
            $ceta = $_POST['cuerpos'];
            $cadena = 'Color: '.$color.'<br>'.'Aspecto: '.$aspec.'<br>'.'Densidad: '.$den.' gr/dl <br>'.'PH: '.$ph.'<br>'.'Proteínas: '.$prot.'<br>'.'Urobilinògeno: '.$uro.'<br>'.'Nitratos: '.$nit.'<br>'.'Hemoglobina: '.$hemo.'<br>'.'Glucosa: '.$glu.'<br>'.'Cuerpos Cetònicos: '.$ceta;

            $QUERY = "INSERT INTO resultado_examen (citaID, resultados, fechaEntrega) values('$idC', '$cadena','$fecha')";
            $rsQUERY = mysqli_query($con, $QUERY) or die(mysqli_error($con));

                if($rsQUERY == true){

                mysqli_close($con);
                header('Location: ../menu-reporte.php?ID='.$idC);

            }
            if($rsQUERY == false){
                session_destroy();
                header('Location: ../examenes.php');
                exit();
                echo 'error', '<br />';
            }


        } else if($tipoE == 'heces'){
            $color = $_POST['color'];
            $aspec = $_POST['aspecto'];
            $olor = $_POST['olor'];
            $reat = $_POST['reaccion'];
            $cons = $_POST['consistencia'];
            $blood = $_POST['sangre'];
            $moco = $_POST['moco'];
            $pus = $_POST['pus'];
            $rest = $_POST['restos'];
            $helm = $_POST['helmintos'];
            $cadena = 'Color: '.$color.'<br>'.'Aspecto: '.$aspec.'<br>'.'Olor: '.$olor.'<br>'.'Reacción: '.$reat.'<br>'.'Consistencia: '.$cons.'<br>'.'Sangre: '.$blood.'<br>'.'Moco: '.$moco.'<br>'.'Pus: '.$pus.'<br>'.'Restos alimenticios: '.$rest.'<br>'.'Helmintos: '.$helm;

            $QUERY = "INSERT INTO resultado_examen (citaID, resultados, fechaEntrega) values('$idC', '$cadena','$fecha')";
            $rsQUERY = mysqli_query($con, $QUERY) or die(mysqli_error($con));

            if($rsQUERY == true){

            mysqli_close($con);
            header('Location: ../menu-reporte.php?ID='.$idC);

            }
            if($rsQUERY == false){
            session_destroy();
            header('Location: ../examenes.php');
            exit();
            echo 'error', '<br />';
            }
            }
            }
?>