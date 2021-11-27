<?php
include_once 'funciones/sesiones.php';
include_once 'funciones/funciones.php';
date_default_timezone_set('America/Lima');
$sql= "SELECT nommemb as label,COUNT(`id_plan`) as value from membresias m,plan_cliente p,cliente c WHERE m.idmemb=p.id_plan and p.id_cliente=c.dnic and estado=1 GROUP BY nommemb;";
$resultado =$conn->query($sql);

$arreglo_registros = array();
while($registro_dia = $resultado->fetch_assoc()){
    // echo "<pre>";
    // var_dump(json_encode($registro_dia));
    // echo "</pre>";
    $fecha = $registro_dia['label'];
    $registro['label']= $fecha;
    $registro['value']= $registro_dia['value'];

    $arreglo_registros[]=$registro;
}

echo json_encode(($arreglo_registros));

?>