<?php
include_once 'funciones/funciones1.php';
date_default_timezone_set('America/Lima');
if(isset($_POST['crear-horario'])){
$texto ="";
$idhorar= $_POST['horar'];
$dias= $_POST['dias'];
$horai= $_POST['horai'];
$horaf= $_POST['horaf'];
$fechai= $_POST['fechai'];
$newfecha =date('Y-m-d',strtotime($fechai));
$fechahoy = date('Y-m-d');
// echo $idhorar;
// echo $horai;
// echo $horaf;
// echo $newfecha;

for ($i=0;$i<count($dias);$i++)    
{     
// echo "<br> Dia " . $i . ": " . $dias[$i];  
$texto1 = $dias[$i];
$texto .= $texto1."-";
if($i == end($dias)){
    $texto .= $texto1;
}
}
$concat =substr($texto, 0, -1);
// echo $concat;
$horas = $horai."-".$horaf;
// echo $horas;

try{
    include_once 'funciones/funciones1.php';
    $query="INSERT INTO horariosrut (horas,dias,estado,fechainicio,id_rutin) VALUES ('$horas','$concat',0,'$newfecha',$idhorar)";
   
if($newfecha <= $fechahoy){
    $respuesta=array(
        'respuesta' => 'fechamenor'

    );
}

    else if(mysqli_query($con,$query)==1 ){
     $respuesta=array(
        'respuesta' => 'exitoso'

    );
  }

else{
    $respuesta=array(
        'respuesta' => 'datos incorrectos'
    );
  }
 
}catch (Exception $e){
    echo "Error:".$e->get_Message();
}

die(json_encode($respuesta));

}

if(isset($_POST['insert-clienteah'])){
    $id_hor = $_POST['horario'];
    $id_cli = $_POST['cli'];
    
    try{
        include_once 'funciones/funciones1.php';
        $query= "INSERT INTO clihor (idc,idh) VALUES ('$id_cli','$id_hor')";
    if(mysqli_query($con,$query)==1 ){
     
        $respuesta=array(
            'respuesta' => 'exitoso'
        );
      }
    
    else{
        $respuesta=array(
            'respuesta' => 'datos incorrectos'
        );
      }
    }catch(Exception $e){
    $respuesta =array(
        'respuesta' => $e->getMessage()
    );
    
    }
        die(json_encode($respuesta));

}
    ?>