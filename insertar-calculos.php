<?php
date_default_timezone_set('America/Lima');
include_once 'funciones/funciones1.php';
if(isset($_POST['crear-calculos'])){
    $imc = $_POST['imc'];
    $menimc = $_POST['men'];
    $hidr=$_POST['calch'];
    $men=$_POST['menh'];
    $prot=$_POST['prote'];
    $idu=$_POST['idu'];
    $fechah=date('Y-m-d');
    // echo $imc."<br>";
    // echo $menimc."<br>";
    // echo $hidr."<br>";
    // echo $men."<br>";
    // echo $idu."<br>";
    // echo $prot;
    // echo $fechah;


    try{

        $query ="INSERT INTO `calculos` (`imc`, `calculohidrico`, `calculoproteico`, `idcliente`, `mensajeimc`, `mensajehidrico`, `fecharegist`) 
        VALUES ('$imc', '$hidr', '$prot', '$idu', '$menimc', '$men', '$fechah');";
    if(mysqli_query($con,$query)==1 ){
        session_start();
$_SESSION['imc']=$imc;
$_SESSION['men']=$menimc;
$_SESSION['calch']=$hidr;
$_SESSION['menh']=$men;
$_SESSION['prote']=$prot;
$_SESSION['idu']=$idu;

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