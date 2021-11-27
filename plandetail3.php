<?php
include('funciones/funciones.php');
//include('../constant/layout/head.php');
$pid=$_GET['q'];
$query="select * from membresias where idmemb='".$pid."'";
$res=mysqli_query($conn,$query);
if($res){
	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
	// echo "<tr><td>".$row['amount']."</td></tr>";
	echo "
  <div class='row'>
  <label class='col-sm-2 control-label'>ID</label>
   <div class='col-sm-2' style='width:330px;'>
     <input type='text' name='idm' id='idm' value='".$row['idmemb']." ' maxlength='30' readonly class='form-control' ;'>
     </div>
     </div>
     <br>
  <div class='row'>
       <label class='col-sm-2 control-label'>Membresia</label>
        <div class='col-sm-2' style='width:330px;'>
          <input type='text' name='nommem' id='nommem' value='".$row['nommemb']." ' maxlength='30' readonly class='form-control' ;'>
          </div>
          </div>
          <br>
      <div class='row'>
        <label class='col-sm-2 control-label'>Tipo de Tiempo</label>
          <div class='col-sm-2' style='width:330px;'>
            <input type='text' name='tipot' id='tipot' value='".$row['tipo_tiempo']." ' maxlength='30' readonly class='form-control' ;'>
          </div>
          </div>
          <br>
             <div class='row'>
             <label class='col-sm-2 control-label'>Numero de Tiempo</label>
              <div class='col-sm-2' style='width:330px;'>
                <input type='text' name='numt' id='numt' value='".$row['numero_tiempo']." ' maxlength='30' readonly class='form-control' ;'>
                </div>
                </div>
                <br>
                <div class='row'>
                <label class='col-sm-2 control-label'>Precio</label>
                 <div class='col-sm-2' style='width:330px;'>
                   <input type='text' name='precio' id='precio' value='".$row['precio']." ' maxlength='30' readonly class='form-control' ;'>
                   </div>
                   </div>
	";
	       

}

?>