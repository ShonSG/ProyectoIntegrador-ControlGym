<?php
require 'modelo_excel.php';
$ME = new Modelo_Excel();

$idrut = htmlspecialchars($_POST['idrutina'],ENT_QUOTES,'UTF-8');
$day1= htmlspecialchars($_POST['dia1'],ENT_QUOTES,'UTF-8');
$day2= htmlspecialchars($_POST['dia2'],ENT_QUOTES,'UTF-8');
$day3= htmlspecialchars($_POST['dia3'],ENT_QUOTES,'UTF-8');
$day4= htmlspecialchars($_POST['dia4'],ENT_QUOTES,'UTF-8');
$day5= htmlspecialchars($_POST['dia5'],ENT_QUOTES,'UTF-8');

$array_id = explode(',',$idrut);
$array_dia1 = explode(',',$day1);
$array_dia2 = explode(',',$day2);
$array_dia3 = explode(',',$day3);
$array_dia4 = explode(',',$day4);
$array_dia5 = explode(',',$day5);

for($i=0;$i < count($array_id);$i++){
 $consulta= $ME -> Registrar_Excel($array_id[$i],$array_dia1[$i],$array_dia2[i],$array_dia3[i],$array_dia4[i],$array_dia5[i]);   
}


?>