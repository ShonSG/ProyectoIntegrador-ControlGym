<?php
include_once 'funciones/funciones1.php';

if(isset($_POST['custId'])){
	$id = $_POST['custId'];

	$sql = "select * from cliente WHERE dnic=".$id;
	$result = mysqli_query($con,$sql);

$response = " <form role='form' method='post' name='editar-cliente' id='editar-cliente' action='insertar-admin.php'>
<div class='box-body'>";
while( $row = mysqli_fetch_array($result) ){
	$dnic=$row['dnic'];
	$nom=$row['nombrec'];
	$ape=$row['apellidoc'];
	$cor=$row['correo'];
	$tel=$row['telefono'];

	$response .="
	<div class='form-group has-feedback formulario__grupo ' id='grupo__DNIC'>
	<label for='DNIC' class='formulario__label'>DNI</label>
	<div class='formulario__grupo-input'>
	<input type='text' class='form-control formulario__input' id='DNIC' name='DNIC' placeholder='DNI' value='$dnic' readonly>
	<span class='glyphicon glyphicon-user form-control-feedback'></span>
	<i class='formulario__validacion-estado fa fa-times-circle'></i> 
	</div>
	<p class='formulario__input-error'>Solo debe contener numeros y el maximo es de 8 digitos no signos ni letras.</p>
  </div>";

  $response .="
  <div class='form-group has-feedback formulario__grupo' id='grupo__nombre'>
	<label for='nombre' class='formulario__label'>Nombres</label>
	<div class='formulario__grupo-input'>
	<input type='text' class='form-control formulario__input' id='nombre' name='nombre' placeholder='Nombre Completo' value='$nom' readonly>
	<span class='glyphicon glyphicon-duplicate form-control-feedback'></span> 
	<i class='formulario__validacion-estado fa fa-times-circle'></i> 
	</div>
	<p class='formulario__input-error'>Solo debe contener caracteres no signos ni numeros.</p>
  </div>";

  $response .="
  <div class='form-group has-feedback formulario__grupo' id='grupo__apellido'>
	<label for='apellidos' class='formulario__label'>Apellidos</label>
	<div class='formulario__grupo-input'>
	<input type='text' class='form-control formulario__input' id='apellido' name='apellido' placeholder='Apellido Completo' value='$ape' readonly>
	<span class='glyphicon glyphicon-duplicate form-control-feedback'></span> 
	<i class='formulario__validacion-estado fa fa-times-circle'></i> 
	</div>
	<p class='formulario__input-error'>Solo debe contener caracteres no signos.</p>
  </div>  ";

  $response .="
  <div class='form-group has-feedback formulario__grupo' id='grupo__correo'>
	<label for='correo'  class='formulario__label'>Correo</label>
	<div class='formulario__grupo-input'>
	<input type='email' class='form-control formulario__input' id='correo' name='correo' placeholder='Correo' value='$cor' required>
	<span class='glyphicon glyphicon-envelope form-control-feedback'></span>
	<i class='formulario__validacion-estado fa fa-times-circle'></i> 
	</div> 
	<p class='formulario__input-error'>Debe cumplir el formato de correo(usuario,@,dominio).</p>
  </div>  ";

  $response .="
  <div class='form-group has-feedback formulario__grupo' id='grupo__telefono'>
	<label for='telefono'>Telefono</label>
	<div class='formulario__grupo-input'>
	<input type='number' class='form-control formulario__input' id='telefono' name='telefono' placeholder='Telefono' value='$tel' required>
	<span class='glyphicon glyphicon-earphone form-control-feedback'></span> 
	<i class='formulario__validacion-estado fa fa-times-circle'></i> 
	</div>
	<p class='formulario__input-error'>Solo debe contener 9 digitos no signos ni caracteres.</p> 
  </div> ";   

  $response .="</div>";
  $response .="
<input type='hidden' name='editar-cliente' value='1'>
<button type='submit' class='btn btn-primary'>Editar</button>";
}

$response.="</form>";
$response.="<script src='js/sweetalert2.min.js'></script>
<script src='js/admin-ajax.js'></script>
";


	echo $response;
	exit;
}

?>
