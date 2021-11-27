<?php
include_once 'funciones/funciones1.php';
$id = $_POST['custId'];

$sql = "SELECT * FROM horariosrut h, reginsrut r, rutina u where h.id_horario = r.id_horar and r.id_rutin = u.id_rut and r.idregis =".$id;
	$result = mysqli_query($con,$sql);

$response = " <form role='form' method='post' name='insert-clienteah' id='insert-clienteah' action='insertar-horario.php'>
<div class='box-body'>";
while( $row = mysqli_fetch_array($result) ){

    $idr=$row['id_rutin'];
	$nomr=$row['nombre'];
    $idh=$row['id_horario'];
    $nomh=$row['horas'];


 $response.=  " <div class='form-group'>
    <label for='usuario'>Rutina</label>
    <input type='hidden' class='form-control' id='rutina' name='rutina' placeholder='' value='$idr'>
    <input type='text' class='form-control' id='usuario' name='usuario' placeholder='$nomr' readonly>
  </div>";
  $response.=  " <div class='form-group'>
  <label for='usuario'>Horario</label>
  <input type='hidden' class='form-control' id='horario' name='horario' placeholder='' value='$idh'>
  <input type='text' class='form-control' id='usuario' name='usuario' placeholder='$nomh' readonly>
</div>";

    $response.="<div class='form-group'>
                          <label for='usuario'>Cliente</label>
                                    <select name='cli' id='cli' required  class='form-control'>
                                    <option value=''>--Please Select--</option>";
                                    
                                    $query="SELECT dnic,nombrec FROM cliente c WHERE dnic !=ALL(SELECT h.idc FROM clihor h where h.idh='$idh') ";
                                    $result=mysqli_query($con,$query);
                                    if(mysqli_affected_rows($con)!=0){
                                      while($row=mysqli_fetch_row($result)){
                                        $response.= "<option value=".$row[0].">".$row[1]."</option>";
                                            }
                                      }

                                   
                                      $response.=                 "   </select>";
                                      $response.=    "</div>";
$response .="<input type='hidden' name='insert-clienteah' value='1'>
                                      <button type='submit' class='btn btn-primary'>Añadir</button>";
}
$response .="</div>";
$response.="</form>";
$response.="<script src='js/sweetalert2.min.js'></script>
<script src='js/admin-ajax.js'></script>";


echo $response;
exit;
?>