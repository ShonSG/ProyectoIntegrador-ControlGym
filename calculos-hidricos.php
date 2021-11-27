<?php
$cont=rand(100000,999999);
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$respuesta=($peso*35)+($altura*750);
$var="imgcalculos/descarga.png";
$calculo1=$peso*5;
$calculo2=$peso*7;
//IMagen en texto
$rutaFuente = __DIR__ . "/" . "Praise-Regular.ttf";
$nombreImagen = "imgcalculos/descarga.png";
$imagen = imagecreatefrompng($nombreImagen);
$color = imagecolorallocate($imagen, 1, 37, 41);
$tamanio = 30;
$angulo = 0;
$x = 55;
$y = 140;
$texto = $respuesta." ml";
imagettftext($imagen, $tamanio, $angulo, $x, $y, $color, $rutaFuente, $texto);
$salida = "imgcalculos/descarga".$cont.".png";
imagepng($imagen, $salida);
imagedestroy($imagen);
// echo "Imagen guardada correctamente como " . $salida;
//


// $response = "<h1>".$peso."</h1>";
// $response .= "<h1>".$altura."</h1>";
$response = "<h3>Liquido en ml/dia:".$respuesta."</h3>";
$response .= "<input type='hidden' name='calch' id='calch' value='$respuesta'></input>";
$response .= "<input type='hidden' name='menh' id='menh' value='Tomar de 5-7 mililitros por $peso kg de peso por lo menos 4 horas antes del ejercicio.<br>
Debera consumir entre $calculo1 - $calculo2 ,ml(un vaso común tiene 250 ml) antes del ejercicio.'></input>";
$response .= "<div class='row' style='display: flex;margin-left: 10px;'>";
$response .= "<div class='' style='background-image: url($salida);background-repeat: no-repeat;width:220px;height:220px;background-size: 100% 100%;'></div>";
$response .= " <div class='pad margin no-print'>
<div class='callout callout-info' style='margin-bottom: 0!important;'>
  <h4><i class='fa fa-info'></i> Mensaje de recomendacion:</h4>
  Tomar de 5-7 mililitros por $peso kg de peso por lo menos 4 horas antes del ejercicio.
  Debera consumir entre $calculo1 - $calculo2 ,ml(un vaso común tiene 250 ml) antes del ejercicio.
</div>
</div>
</div>";

echo $response;
exit;
?>