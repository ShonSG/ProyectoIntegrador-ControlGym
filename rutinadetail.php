<?php
include('funciones/funciones.php');
//include('../constant/layout/head.php');
$pid=$_GET['q'];
$query="select * from instructor where dni='".$pid."'";
$res=mysqli_query($conn,$query);
if($res){
	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
	// echo "<tr><td>".$row['amount']."</td></tr>";
	echo "
	    <div class='row'>
              <label class='col-sm-2 control-label'>Nombre:</label>
               <div class='col-sm-2' style='width:330px;'>
                <input type='text' name='nombreins' id='nombreins' value='".$row['nombreins']."' maxlength='30' readonly class='form-control' ;'>
            </div>
            </div>
            <br>
      <div class='row'>
       <label class='col-sm-2 control-label'>Correo:</label>
        <div class='col-sm-2' style='width:330px;'>
          <input type='text' name='correoins' id='correoins' value='".$row['correo']." ' maxlength='30' readonly class='form-control' ;'>
          </div>
          </div>
         
	";
	       

}

?>