<?php
include_once 'funciones/funciones1.php';

if(isset($_POST['custId'])){
	$id = $_POST['custId'];

	$sql = "select DISTINCTROW dni,nombreins,apellido,distrito,correo from rutina r, reginsrut e, instructor i where r.id_rut=e.id_rutin and e.dnins=i.dni and id_rut=".$id;
	$result = mysqli_query($con,$sql);

	$response = "<table id='registros' class='table table-bordered table-striped2'>  <tr>
                 
	<th class='hola1'>ID</th>
	<th class='hola1'>Nombre</th>
	<th class='hola1'>Apellido</th>
	<th class='hola1'>Distrito</th>
	<th class='hola1'>Correo</th>
  </tr>";
	while( $row = mysqli_fetch_array($result) ){
		$id = $row['dni'];
		$name = $row['nombreins'];
		$email = $row['apellido'];
		$contact = $row['distrito'];
		$country = $row['correo'];

		$response .= "<tr>";
		$response .= "<td>".$id."</td>";
		$response .=  "<td>".$name."</td>";
		$response .=  "<td>".$email."</td>";
		$response .=  "<td>".$contact."</td>";
		$response .=  "<td>".$country."</td>";
		$response .=  "</tr>";
		// $response .= "<tr>";
		// $response .= "<td>Name : </td><td>".$name."</td>";
		// $response .= "</tr>";

		// $response .= "<tr>";
		// $response .= "<td>Email : </td><td>".$email."</td>";
		// $response .= "</tr>";

		// $response .= "<tr>";
		// $response .= "<td>Contact : </td><td>".$contact."</td>";
		// $response .= "</tr>";

		// $response .= "<tr>";
		// $response .= "<td>Country : </td><td>".$country."</td>";
		// $response .= "</tr>"; 
	}
	$response .= "</table>";

	echo $response;
	exit;
}
?>
