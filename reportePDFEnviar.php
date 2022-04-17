<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'libreria/PHPMailer/Exception.php';
    require 'libreria/PHPMailer/PHPMailer.php';
    require 'libreria/PHPMailer/SMTP.php';

    include_once('conexion/conexion.php');
    session_start();

    $IDE = $_GET['ID'];

    $queryE = "Select * from resultado_examen Where examenID='$IDE'";
    $rsqueryE = mysqli_query($con, $queryE) or die('Error: ' . mysqli_error($con));
    $fileQUERYE = mysqli_fetch_assoc($rsqueryE);

    $IDC = $fileQUERYE['citaID'];

    $queryC = "Select * from cita Where citaID='$IDC'";
    $rsqueryC = mysqli_query($con, $queryC) or die('Error: ' . mysqli_error($con));
    $fileQUERYC = mysqli_fetch_assoc($rsqueryC);

    $IDP = $fileQUERYC['pacienteID'];

    $queryP = "Select * from paciente Where PacienteID='$IDP'";
    $rsqueryP = mysqli_query($con, $queryP) or die('Error: ' . mysqli_error($con));
    $fileQUERYP = mysqli_fetch_assoc($rsqueryP);

    ob_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    html {
        height: 100%;
        font-family: Helvetica, Arial, sans-serif;
    }

    h2,
    h4 {
        text-align: center;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        width: 600px;
    }
    </style>
</head>

<body>
    <div style="width: 800px;">
        <h1><img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/programa_laboratorio/img/microscope.png">Laboratorio
            Clinico
        </h1>
        <br>
        <br>
        <div style="display: flex;">
            <div style="float: left; width: 50%; padding: 10px; height: 150px;">
                <p><strong>Paciente: </strong><?php echo $fileQUERYP['nombreCompleto'];?></p>
                <p><strong>Cedula: </strong><?php echo $fileQUERYP['cedula'];?></p>
                <p><strong>Fecha de Cita: </strong><?php echo $fileQUERYC['fechaCita'];?></p>
                <p><strong>TLF: </strong><?php echo $fileQUERYP['telefono'];?></p>
            </div>

            <div style="float: left; width: 50%; padding: 10px; height: 150px;">
                <p><strong>Edad: </strong><?php echo $fileQUERYP['edad'];?></p>
                <p><strong>Sexo: </strong><?php echo $fileQUERYP['sexo'];?></p>
                <p><strong>Fecha de entrega: </strong><?php echo $fileQUERYE['fechaEntrega'];?></p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <h2>Resultados:</h2>
        <table style="padding: 25px 50px;">
            <tr>
                <td>
                    <h4>Examen: <?php echo $fileQUERYC['tipoExamen'];?></h4>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        <?php echo $fileQUERYE['resultados'];?>
                    </p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>

<?php
    $html = ob_get_clean();
    require_once 'libreria/dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();

    $options = $dompdf->getOptions();
    $options->set(array('isRemoteEnabled' => true));
    $dompdf->setOptions($options);

    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();
    //$dompdf->stream();
    $pdfString = $dompdf->output();

    $nombrePaciente = $fileQUERYP['nombreCompleto'];
    $cedulaPaciente = $fileQUERYP['cedula'];
    $correoPaciente = $fileQUERYP['correo'];
    $fechaCita = $fileQUERYC['fechaCita'];
    $tipoExamen = $fileQUERYC['tipoExamen'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'abaj2099@gmail.com';
        $mail->Password   = ''; //aqui va el password del correo
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('abaj2099@gmail.com', 'Laboratorio Clinico');
        $mail->addAddress($correoPaciente, $nombrePaciente);

        //Attachments
        $filename = 'Examen'.'_'.$tipoExamen.'.pdf';
        $encoding = 'base64';
        $type = 'application/pdf';

        $mail->AddStringAttachment($pdfString,$filename,$encoding,$type);

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Resultado de examen de laboratorio '.$fechaCita;
        $mail->Body    = 'Se envia un cordial saludo de parte del "Laboratorio Clinico" al paciente "'.$nombrePaciente.'" '.$cedulaPaciente.'. Se le adjunta los resultados de su examen. Gracias por preferirnos';

        $mail->send();
        //echo 'Mensaje enviado';
        echo '<script language="javascript">alert("Mensaje enviado");</script>';
        echo '<script type="text/javascript">
            window.close();
            </script>';
    } catch (Exception $e) {
        //echo "el mensaje no se pudo enviar. Mailer Error: {$mail->ErrorInfo}";
        echo '<script language="javascript">alert("El mensaje no se pudo enviar. Mailer Error:'. $mail->ErrorInfo.'Posible solucion: si se usa el antivirus Avast, desactivar escudos);</script>';
        echo '<script type="text/javascript">
            window.close();
            </script>';
    }
?>