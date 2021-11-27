<?php
if($_POST['registros']=='eliminado'){
            $id_borra = $_POST['id'];
            try{
                include_once 'funciones/funciones1.php';
                $query= "UPDATE instructor SET estado = 0 WHERE dni=".$id_borra;
            if(mysqli_query($con,$query)==1 ){
             
                $respuesta=array(
                    'respuesta' => 'exitoso',
                    'id_eliminar' => $id_borra
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