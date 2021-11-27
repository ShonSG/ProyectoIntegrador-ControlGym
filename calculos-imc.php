<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$respuesta=round((($peso)/pow(($altura),2)),2);
// $response = "<h1>".$peso."</h1>";
// $response .= "<h1>".$altura."</h1>";
$response = "<h3>IMC:".$respuesta."</h3>";
$response .= "<input type='hidden' name='imc' id='imc' value='$respuesta'></input>";
$var="imgcalculos/personabajopeso.jpg";
$var1="imgcalculos/personapesonormal.jpg";
$var2="imgcalculos/personaconsobrepeso.png";
$var3="imgcalculos/personaconobesidad.png";
if($respuesta < 18.5){
  $mensaje="El usuario esta con bajo de peso";
  $response .="<input type='hidden' name='men' id='men' value='$mensaje'></input>";
    $response .= "<div class='row' style='display: flex;margin-left: 10px;'>
    <div class='' style='background-image: url($var);background-repeat: no-repeat;width:220px;height:220px;background-size: 100% 100%;'></div>
    <div class='pad margin no-print'>
<div class='callout callout-info' style='margin-bottom: 0!important;'>
  <h4><i class='fa fa-info'></i> Mensaje sobre el resultado:</h4>
  <br>El usuario esta con bajo de peso
</div>
</div></div>";
}
else if($respuesta >=18.5 && $respuesta<24.9){
  $mensaje="El usuario esta con peso normal";
  $response .="<input type='hidden' name='men' id='men' value='$mensaje'></input>";
    $response.= "<div class='row' style='display: flex;margin-left: 10px;'>
    <div class='' style='background-image: url($var1);background-repeat: no-repeat;width:220px;height:220px;background-size: 100% 100%;'></div>
    <div class='pad margin no-print'>
<div class='callout callout-info' style='margin-bottom: 0!important;'>
  <h4><i class='fa fa-info'></i> Mensaje sobre el resultado:</h4><br>
  El usuario esta con peso normal
</div>
</div>
</div>";
}
else if($respuesta >=25 && $respuesta<29.9){
  $mensaje=" El usuario esta con sobrepeso";
  $response .="<input type='hidden' name='men' id='men' value='$mensaje'></input>";
    $response.= "<div class='row' style='display: flex;margin-left: 10px;'>
    <div class='' style='background-image: url($var2);background-repeat: no-repeat;width:220px;height:220px;background-size: 100% 100%;'></div>
    <div class='pad margin no-print'>
    <div class='callout callout-info' style='margin-bottom: 0!important;'>
      <h4><i class='fa fa-info'></i> Mensaje sobre el resultado:</h4><br>
      El usuario esta con sobrepeso
    </div>
    </div>
  </div>";
}
else if ($respuesta >=30){
  $mensaje="   El usuario esta con obesidad";
  $response .="<input type='hidden' name='men' id='men' value='$mensaje'></input>";
    $response.= "<div class='row' style='display: flex;margin-left: 10px;'>
    <div class='' style='background-image: url($var3);background-repeat: no-repeat;width:220px;height:220px;background-size: 100% 100%;'></div>
    <div class='pad margin no-print'>
    <div class='callout callout-info' style='margin-bottom: 0!important;'>
      <h4><i class='fa fa-info'></i> Mensaje sobre el resultado:</h4><br>
      El usuario esta con obesidad
    </div>
    </div>
    </div>";

}

echo $response;
exit;
?>