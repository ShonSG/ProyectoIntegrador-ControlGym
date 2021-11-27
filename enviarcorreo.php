<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

date_default_timezone_set('America/Lima');
$mail = new PHPMailer(true);
$rutin=$_POST['rutina'];
try{ 

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'salvadorjhon00@gmail.com';
    $mail->Password = 'musicaligeraenmimente2000#';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
 
    $mail->setFrom('salvadorjhon00@gmail.com', 'Jhon Salvador');
    $mail->addAddress($_POST['correoins'],  $_POST['nombreins']);
    $mail->addCC('salvadorjhon00@gmail.com');

    $mail->addAttachment('docs/Captura.png', 'Formulario.png');

    $mail->isHTML(true);
    $mail->Subject = 'LLENAR LA RUTINA:'.$rutin;
    $mail->Body = '<br>Mensaje: '.$_POST['textarea'].'<br>https://docs.google.com/forms/d/e/1FAIpQLSfQhopNF6fNIRSt8B66j8ztv0RHhvLajguqGN0AsqFuuk4rMA/viewform';

    if(!$mail->send()){
       
        $respuesta=array(
            'respuesta' => 'datos incorrectos'
        );
    }
    else{
        include_once 'funciones/funciones1.php';
    
        $query="INSERT INTO rutina (nombre,DIA1,DIA2,DIA3,DIA4,DIA5) VALUES ('$rutin','','','','','')";
        if(mysqli_query($con,$query)==1){
        $respuesta=array(
            'respuesta' => 'exitoso'
        );
    }
    }
    // $mail->send();
    // echo 'Correo enviado';
  } catch (Exception $e) {
      echo 'Mensaje ' . $mail->ErrorInfo;
}
die(json_encode($respuesta));
?>