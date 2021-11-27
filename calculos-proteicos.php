<?php
$cont=rand(100000,999999);
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$resp= $peso*$altura;



//IMagen en texto
$rutaFuente = __DIR__ . "/" . "Praise-Regular.ttf";
$nombreImagen = "imgproteinas/file.png";
$imagen = imagecreatefrompng($nombreImagen);
$color = imagecolorallocate($imagen, 1, 37, 41);
$tamanio = 60;
$angulo = 0;
$x = 350;
$y = 320;
$texto = $resp." g/dia";
imagettftext($imagen, $tamanio, $angulo, $x, $y, $color, $rutaFuente, $texto);
$salida = "imgproteinas/file".$cont.".png";
imagepng($imagen, $salida);
imagedestroy($imagen);
//

$response = "<h3>Proteína en g / día :".$resp."</h3>";
$response .= "<input type='hidden' name='prote' id='prote' value='$resp'></input>";
$response .= "<div class='row' style='display:flex;margin-left: 10px;'>";
$response .= "<div class='' style='background-image: url($salida);background-repeat: no-repeat;width:220px;height:220px;background-size: 100% 100%;'></div><br>";
$response .= " <div class='pad margin no-print'>
<div class='callout callout-info' style='margin-bottom: 0!important;'>
  <h4><i class='fa fa-info'></i> Mensaje de recomendacion:</h4>
  <li>1 huevo = 13 g proteína
  <li>100 g de lentejas = 9 g proteína
  <li>1 vaso de quinoa cocida = 8 g proteína
  <li>100 g de pechuga de pollo = 27 g proteína
  <li>100 g de ternera = 26 g proteína
</div>
</div>
</div>";
echo $response;
exit;
?>