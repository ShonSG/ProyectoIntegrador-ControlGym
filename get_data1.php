<?php
include_once 'funciones/funciones1.php';

if(isset($_POST['custId'])){
	$id = $_POST['custId'];

	$sql = "select DIA1,DIA2,DIA3,DIA4,DIA5 from rutina WHERE id_rut=".$id;
	$result = mysqli_query($con,$sql);

	$response = "<table id='registros' class='table table-bordered table-striped3'>  <tr>
                 
	<th class='hola1'>DIA1</th>
	<th class='hola1'>DIA2</th>
	<th class='hola1'>DIA3</th>
	<th class='hola1'>DIA4</th>
	<th class='hola1'>DIA5</th>
  </tr>";
	while( $row = mysqli_fetch_array($result) ){
		$id = $row['DIA1'];
		$name = $row['DIA2'];
		$email = $row['DIA3'];
		$contact = $row['DIA4'];
		$country = $row['DIA5'];

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
