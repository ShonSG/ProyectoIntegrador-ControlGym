<?php
     include_once 'funciones/funciones1.php';
if(isset($_POST['consultac'])){
    $imc = $_POST['DNI'];



    try{
   
        $query="Select * from cliente where estado=1 and dnic=".$imc;
        $result=mysqli_query($con,$query);
       
    if($result->num_rows >0){
        session_start();
        $_SESSION['DNI']=$imc;
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
   

?>