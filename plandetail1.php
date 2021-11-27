<?php
include('funciones/funciones.php');
//include('../constant/layout/head.php');
$pid=$_GET['q'];

// <select name="plann" id="boxx" required onchange="myplandetail1(this.value)" class="form-control">
// <option value="">--Please Select--</option>
// <?php
// $query="select * from rutina r, horariosrut h where r.id_rut=h.id_rutin and estado=0;";
// $result=mysqli_query($conn,$query);
// if(mysqli_affected_rows($conn)!=0){
// while($row=mysqli_fetch_row($result)){
// echo "<option value=".$row[0].">".$row[1]."</option>";
// }
// }

//  
// </select>

$query="select * from horariosrut where id_rutin='".$pid."' and estado=0";
$res=mysqli_query($conn,$query);

if(mysqli_affected_rows($conn)!=0){
	// $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
	// echo "<tr><td>".$row['amount']."</td></tr>";
	echo "
    <label for='usuario'>Horarios disponibles de la rutina</label>
    <select name='horxruti' id='horxruti' required class='form-control'>
    <option value=''>--Please Select--</option>" ?>
    <?php
    while($row=mysqli_fetch_row($res)){
    echo "<option value=".$row[0].">".$row[1]."".$row[2]."</option>";
    }
    ?> 
<?php } ?>
?>  
 <!-- <input type='text' name='u_name' id='boxx' value='Rs.".$row['id_horario']."' maxlength='30' readonly class='form-control' style='width:550px;'>
          </div>
          </div>
          </div>
		 <div class='form-group'>
           <div class='row'>
       <label class='col-sm-2 control-label'>VALIDITY</label>
        <div class='col-sm-2' style='width:330px;'>
          <input type='text' name='u_name' id='boxx' value='".$row['dias']." Month' maxlength='30' readonly class='form-control' style='width:550px;'>
          </div>
          </div>
          </div>
          <div class='form-group'>
           <div class='row'>
       <label class='col-sm-2 control-label'>VALIDITY</label>
        <div class='col-sm-2' style='width:330px;'>
          <input type='text' name='u_name' id='boxx' value='".$row['horas']." Month' maxlength='30' readonly class='form-control' style='width:550px;'>
          </div>
          </div>
          </div>
		 -->