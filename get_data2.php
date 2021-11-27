<?php
include_once 'funciones/funciones1.php';

if(isset($_POST['custId'])){
	$id = $_POST['custId'];

	$sql = "select * from cliente c , clihor h WHERE c.dnic=h.idc and h.idh=".$id;
	$result = mysqli_query($con,$sql);
   
	$response = "<table id='registros' class='table table-bordered table-striped1'>  <tr>
                 
	<th class='hola'>DNI</th>
	<th class='hola'>Nombre</th>

  </tr>";
	while( $row = mysqli_fetch_array($result) ){
		$id = $row['dnic'];
		$name = $row['nombrec'];
	

		$response .= "<tr>";
		$response .= "<td>".$id."</td>";
		$response .=  "<td>".$name."</td>";
	
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
