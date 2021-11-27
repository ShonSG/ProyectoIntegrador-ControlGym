<?php
include_once 'funciones/sesiones.php';
include_once 'funciones/funciones.php';
date_default_timezone_set('America/Lima');
$sql= "SELECT fecha_inicio,SUM(precio) as resultado from membresias m,plan_cliente p,cliente c WHERE m.idmemb=p.id_plan and p.id_cliente=c.dnic and estado=1 GROUP BY fecha_inicio ORDER BY fecha_inicio asc";
// $sql1="SELECT DATE_FORMAT(fecha_inicio, '%m-%d-%y'),SUM(precio) as resultado from plan_cliente p,membresias m WHERE p.id_plan=m.idmemb GROUP BY fecha_inicio";
$resultado =$conn->query($sql);

$arreglo_registros = array();
while($registro_dia = $resultado->fetch_assoc()){
    // echo "<pre>";
    // var_dump(json_encode($registro_dia));
    // echo "</pre>";
    $fecha = $registro_dia['fecha_inicio'];
    $registro['fecha']= date("Y-m-d",strtotime($fecha));
    $registro['cantidad']= $registro_dia['resultado'];

    $arreglo_registros[]=$registro;
}

echo json_encode(($arreglo_registros));

?>