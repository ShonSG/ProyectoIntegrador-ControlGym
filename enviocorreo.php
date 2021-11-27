<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
date_default_timezone_set('America/Lima');
$mail = new PHPMailer(true);


    $imc = $_POST['imc'];
    $menimc = $_POST['menimc'];
    $hidr=$_POST['hidr'];
    $men=$_POST['mens'];
    $prot=$_POST['prot'];
    $correoc=$_POST['correoc'];
    $nombre=$_POST['nombrec'];

 
    try{ 

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'salvadorjhon00@gmail.com';
        $mail->Password = 'musicaligeraenmimente2000#';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
     
        $mail->setFrom('salvadorjhon00@gmail.com', 'Jhon Salvador');
        $mail->addAddress($correoc, $nombre);
        $mail->addCC('salvadorjhon00@gmail.com');
    
        $mail->isHTML(true);
        $mail->Subject = 'Informacion sobre los calculos:';
        $mail->Body = "

  <div class='row'>
  <div class='col-md-6'>
  
        <div class='box box-widget widget-user-2'>
          <div class='widget-user-header bg-yellow'>
            
            
            <h3 class='widget-user-username'>$nombre</h3>
            <h5 class='widget-user-desc'>Cliente</h5>
          </div>
          <div class='box-footer no-padding'>
            <ul class='nav nav-stacked'>
              <li><a >IMC : <span class='pull-right badge bg-blue'>$imc</span></a></li>
              <li><a >CALCULO HIDRICO : <span class='pull-right badge bg-aqua'>$hidr</span></a></li>
              <li><a >CALCULO PROTEICO: <span class='pull-right badge bg-green'>$prot</span></a></li>
    
            </ul>
          </div>
        </div>
      
  </div>
</div>

<div class='row'>
<div class='col-md-6'>
  <div class='box box-solid'>
    <div class='box-header with-border'>
      <h3 class='box-title'>Mensajes de recomendaciones</h3>
    </div>
   
    <div class='box-body'>
      <div class='box-group' id='accordion'>
  
        <div class='panel box box-primary'>
          <div class='box-header with-border'>
            <h4 class='box-title'>
              <a data-toggle='collapse' data-parent='#accordion' href='#collapseOne'>
              Mensaje de recomendacion #1
              </a>
            </h4>
          </div>
          <div id='collapseOne' class='panel-collapse collapse in'>
            <div class='box-body'>
            $menimc
            </div>
          </div>
        </div>
      
        <div class='panel box box-primary'>
          <div class='box-header with-border'>
            <h4 class='box-title'>
              <a data-toggle='collapse' data-parent='#accordion' href='#collapseOne'>
              Mensaje de recomendacion #2
              </a>
            </h4>
          </div>
          <div id='collapseOne' class='panel-collapse collapse in'>
            <div class='box-body'>
            $men
            </div>
          </div>
        </div>
      </div> 
    </div> 
  </div>
</div>
</div>   



        ";
    
        if(!$mail->send()){
       
            $respuesta=array(
                'respuesta' => 'datos incorrectos'
            );
        }
        else{
           
            $respuesta=array(
                'respuesta' => 'exitoso'
            );
        
        }
    
    }catch (Exception $e) {
        echo 'Mensaje ' . $mail->ErrorInfo;
  }
  die(json_encode($respuesta));

?>