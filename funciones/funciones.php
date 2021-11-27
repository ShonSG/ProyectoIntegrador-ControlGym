<?php
$conn = new mysqli('localhost','root','','gymnasioo');
if($conn->connect_error){
    echo $error ->$conn->connect_error;
// }else{
//     echo "Conexion exitosa";
}
?>