<?php
include_once 'funciones/funciones.php';
date_default_timezone_set('America/Lima');
if(isset($_POST['agregar-admin'])){
// die(json_encode($_POST));
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$password = $_POST['password'];

$opciones =array(
'cost'=>12
);

$password_hashed =password_hash($password, PASSWORD_BCRYPT, $opciones);
// echo $password_hashed;

try{
    include_once 'funciones/funciones.php';
    $stmt = $conn->prepare("INSERT INTO admin (usuario, nombre,password) VALUES (?,?,?)");
    $stmt->bind_param("sss",$usuario,$nombre,$password_hashed);
    $stmt->execute();
    $id_registro = $stmt->insert_id;
    if($id_registro > 0){
        $respuesta =array(
            'respuesta' => 'exito',
            'id_admin' => $id_registro
        );
    }else{
        $respuesta =array(
            'respuesta' => 'error'
        );
    }
    $stmt->close();
    $conn->close();
}catch (Exception $e){
    echo "Error:".$e->get_Message();
}

die(json_encode($respuesta));
}


if(isset($_POST['login-admin'])){
  $usuario=$_POST['usuario'];
  $password=$_POST['password'];
//   die(json_encode($_POST));
  try{
    include_once 'funciones/funciones.php';
    $stmt = $conn->prepare("SELECT * FROM admin where usuario=?;");
    $stmt->bind_param("s",$usuario);
    $stmt->execute();
    $stmt->bind_result($id_admin,$usuario_admin,$nombre_admin,$password_admin);
    if($stmt->affected_rows){
        $existe = $stmt->fetch();
        if($existe){
           if(password_verify($password,$password_admin)){
               session_start();
               $_SESSION['id_admin'] = $id_admin;
               $_SESSION['usuario'] = $usuario_admin;
               $_SESSION['nombre']=$nombre_admin;
               $_SESSION['password']=$password_admin;
               $respuesta=array(
                   'respuesta' => 'exitoso',
                   'usuario' => $nombre_admin,
                   'password' => $password_admin,
                   'id_admin' => $id_admin
               );
           }
           else{
            $respuesta=array(
                'respuesta' => 'password incorrecto'
            );
           }
        }else{
            $respuesta =array(
                'respuesta' => 'no existe'
            );
        }
    }
    $stmt->close();
    $conn->close();
}catch (Exception $e){
    echo "Error:".$e->getMessage();
}
die(json_encode($respuesta));
}

if(isset($_POST['agregar-instructor'])){
    // die(json_encode($_POST));
    $dni = $_POST['DNI'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $distrito = $_POST['distrito'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    
    try{
        include_once 'funciones/funciones1.php';
        $query="INSERT INTO instructor (dni, nombreins,apellido,distrito,correo,telefono,direccion,estado) VALUES ('$dni','$nombre','$apellido','$distrito','$correo','$telefono','$direccion',1)";
    if(empty($dni)|| empty($nombre) || empty($apellido) ||  empty($correo) ||empty($distrito) || empty($direccion)||empty($telefono)){
$respuesta = array(
    'respuesta'=> 'completa'
);
    }
    else if(mysqli_query($con,$query)==1){
        session_start();
        $_SESSION['DNI']=$dni;
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
    
if(isset($_POST['agregar-inst-hor-rut'])){
        // die(json_encode($_POST));
        $idins= $_POST['inst'];
        $idrut= $_POST['rutin'];
        $idhorut= $_POST['horxruti'];

        
        try{
            include_once 'funciones/funciones1.php';
            $query="INSERT INTO reginsrut (dnins,id_rutin,id_horar) VALUES ('$idins','$idrut','$idhorut')";
            $query1= "UPDATE horariosrut set estado=1 where id_horario=".$idhorut;
        if(mysqli_query($con,$query)==1 && mysqli_query($con,$query1)==1){
            // session_start();
            // $_SESSION['DNI']=$dni;
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
// if(isset($_POST['agregar-inst-hor-rut'])){
//             // die(json_encode($_POST));
//             $idins= $_POST['inst'];
//             $idrut= $_POST['rutina'];
//             $idhorut= $_POST['horxruti'];
    
            
//             try{
//                 include_once 'funciones/funciones1.php';
//                 $query="INSERT INTO reginsrut (dnins,id_rutin,id_horar) VALUES ('$idins','$idrut','$idhorut')";
//                 $query1= "UPDATE horariosrut set estado=1 where id_horario=".$idhorut;
//             if(mysqli_query($con,$query)==1 && mysqli_query($con,$query1)==1){
//                 // session_start();
//                 // $_SESSION['DNI']=$dni;
//                 $respuesta=array(
//                     'respuesta' => 'exitoso'
            
//                 );
//               }
        
//             else{
//                 $respuesta=array(
//                     'respuesta' => 'datos incorrectos'
//                 );
//               }
             
//             }catch (Exception $e){
//                 echo "Error:".$e->get_Message();
//             }
            
//             die(json_encode($respuesta));
// }

if(isset($_POST['agregar-inst-hor-rut1'])){
    // die(json_encode($_POST));
    $idins= $_POST['instr'];
    $idrut= $_POST['rutina'];
    $idhorut= $_POST['horxruti'];

    
    try{
        include_once 'funciones/funciones1.php';
        $query="INSERT INTO reginsrut (dnins,id_rutin,id_horar) VALUES ('$idins','$idrut','$idhorut')";
        $query1= "UPDATE horariosrut set estado=1 where id_horario=".$idhorut;
    if(mysqli_query($con,$query)==1 && mysqli_query($con,$query1)==1){
        // session_start();
        // $_SESSION['DNI']=$dni;
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

if(isset($_POST['crear-cliente'])){
    // die(json_encode($_POST));
    $dnicli= $_POST['DNIC'];
    $nomcli= $_POST['nombre'];
    $apecli= $_POST['apellido'];
    $correocli=$_POST['correo'];
    $telefono=$_POST['telefono'];

    
    try{
        include_once 'funciones/funciones1.php';
        $query="INSERT INTO cliente (dnic,nombrec,apellidoc,correo,telefono,estado) VALUES ('$dnicli','$nomcli','$apecli','$correocli','$telefono',1)";
       
    if(mysqli_query($con,$query)==1 ){
        session_start();
        $_SESSION['DNIC']=$dnicli;
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

if(isset($_POST['agregar-cli-memb'])){
    // die(json_encode($_POST));
    $idcli= $_POST['dnic'];
    $idmem= $_POST['idm'];
    // $tipotie= $_POST['tipot'];
    // $numertie= intval($_POST['numt']);


    
    try{
        include_once 'funciones/funciones1.php';
        $query8=mysqli_query($con,"select * from membresias  where idmemb='$idmem' ")or die(mysqli_error());

        while($row8=mysqli_fetch_array($query8)){
$numero_tiempo=$row8['numero_tiempo'];
    $tipo_tiempo=$row8['tipo_tiempo'];


}
        $dias=0;
        if ($tipo_tiempo=='meses') {
            $dias=30*$numero_tiempo;
        }
        if ($tipo_tiempo=='dias') {
            $dias=$numero_tiempo;
        }
        $fecha_inicio = date('Y-m-d');
        
        $di='+'.$dias.'day';
        $fecha_fin = date('Y-m-d', strtotime($di)) ;
                    $year = date("Y");
                    $cont=0;
                    $id_pl=0;
                   
                    $query3=mysqli_query($con,"select * from plan_cliente")or die(mysqli_error());

                    while($row3=mysqli_fetch_array($query3)){
 $id_pl=$row3['id_plan_cliente'];
}
$mes=date("m");
$dia=date("d");
$cont=$id_pl+1;
$codigo=$year.$mes.$dia.$cont;


        $query4="INSERT INTO plan_cliente(codigo,fecha_inicio,fecha_fin,id_cliente,id_plan)
        VALUES('$codigo','$fecha_inicio','$fecha_fin','$idcli','$idmem')";

    if(mysqli_query($con,$query4)==1){
        session_start();
        $_SESSION['codigo']=$codigo;
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
if(isset($_POST['modrut'])){
    $idins= $_POST['idrut'];
    $day1= $_POST['dia1'];
    $day2= $_POST['dia2'];
    $day3= $_POST['dia3'];
    $day4= $_POST['dia4'];
    $day5= $_POST['dia5'];
    
    try{
        include_once 'funciones/funciones1.php';
        $query= "UPDATE rutina SET DIA1 = '$day1', DIA2 ='$day2', DIA3='$day3',DIA4='$day4', DIA5='$day5' WHERE id_rut=".$idins;
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
     
    }catch (Exception $e){
        echo "Error:".$e->get_Message();
    }
    
    die(json_encode($respuesta));
    }
    if(isset($_POST['editar-instructor'])){
        $dnii=$_POST['DNI'];
        $correoc= $_POST['correo'];
        $telef= $_POST['telefono'];
      
        
        try{
            include_once 'funciones/funciones1.php';
            $query= "UPDATE instructor SET correo = '$correoc', telefono ='$telef' WHERE dni=".$dnii;
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
         
        }catch (Exception $e){
            echo "Error:".$e->get_Message();
        }
        
        die(json_encode($respuesta));
        }



if(isset($_POST['editar-cliente'])){
        $dnicliente=$_POST['DNIC'];
        $correoc= $_POST['correo'];
        $telef= $_POST['telefono'];
      
        
        try{
            include_once 'funciones/funciones1.php';
            $query= "UPDATE cliente SET correo = '$correoc', telefono ='$telef' WHERE dnic=".$dnicliente;
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
         
        }catch (Exception $e){
            echo "Error:".$e->get_Message();
        }
        
        die(json_encode($respuesta));
        }
        

if($_POST['registro']=='eliminar'){
$id_borrar = $_POST['id'];
try{
    include_once 'funciones/funciones1.php';
    $query= "UPDATE cliente SET estado = 0 WHERE dnic=".$id_borrar;
if(mysqli_query($con,$query)==1 ){
 
    $respuesta=array(
        'respuesta' => 'exitoso',
        'id_eliminado' => $id_borrar

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
    



  