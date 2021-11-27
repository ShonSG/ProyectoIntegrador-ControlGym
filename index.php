<?php
require 'vendor/autoload.php';

$conexion = new mysqli('localhost','root','','bdprueba');
class MyReadFilter implements \PhpOffice\PhpSpreadsheet\Reader\IReadFilter {

    public function readCell($column, $row, $worksheetName = '') {
        // Read title row and rows 20 - 30
        if ($row > 1) {
            return true;
        }
        return false;
    }
}
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
$inputFileName = $_FILES['excel']['tmp_name'];

/**  Identify the type of $inputFileName  **/
$inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
/**  Create a new Reader of the type that has been identified  **/
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);

$reader->setReadFilter( new MyReadFilter() );
/**  Load $inputFileName to a Spreadsheet Object  **/

$spreadsheet = $reader->load($inputFileName);

$cantidad = $spreadsheet->getActiveSheet()->toArray();

// echo "<table id='tabla_detalle' class='table' style='width:100%;table-layout:fixed'>
// <thead>
// <tr bgcolor='black' style='color:#FFFFFF'>
// <td>DIA1</td>
// <td>DIA2</td>
// <td>DIA3</td>
// <td>DIA4</td>
// <td>DIA5</td>
// </tr>
// </thead><tbody id='tbody_tabla_detalle'>";
foreach($cantidad as $row){
    $dia1=$row[1];
    $dia2=$row[2];
    $dia3=$row[3];
    $dia4=$row[4];
    $dia5=$row[5];
    if($dia1==""){

    }else{
        echo "
	    <div class='row'>
              <label class='col-sm-2 control-label'>Dia 1</label>
               <div class='col-sm-2' style='width:330px;'>
                <input type='text' name='dia1' id='dia1' value='".$row[1]."' maxlength='30' readonly class='form-control' ;'>
            </div>
            </div>
            <br>
      <div class='row'>
       <label class='col-sm-2 control-label'>Dia 2</label>
        <div class='col-sm-2' style='width:330px;'>
          <input type='text' name='dia2' id='dia2' value='".$row[2]." ' maxlength='30' readonly class='form-control' ;'>
          </div>
          </div>
          <br>
          <div class='row'>
          <label class='col-sm-2 control-label'>Dia 3</label>
           <div class='col-sm-2' style='width:330px;'>
             <input type='text' name='dia3' id='dia3' value='".$row[3]." ' maxlength='30' readonly class='form-control' ;'>
             </div>
             </div>
             <br>
             <div class='row'>
             <label class='col-sm-2 control-label'>Dia 4</label>
              <div class='col-sm-2' style='width:330px;'>
                <input type='text' name='dia4' id='dia4' value='".$row[4]." ' maxlength='30' readonly class='form-control' ;'>
                </div>
                </div>
                <br>
                <div class='row'>
                <label class='col-sm-2 control-label'>Dia 5</label>
                 <div class='col-sm-2' style='width:330px;'>
                   <input type='text' name='dia5' id='dia5' value='".$row[5]." ' maxlength='30' readonly class='form-control' ;'>
                   </div>
                   </div>
                   <br>
         
	";
    // echo "<tr>";
    // echo "<td name='dia1' value='".$dia1."'>".$dia1."</td>";
    // echo "<td name='dia2' value='".$dia2."'>".$dia2."</td>";
    // echo "<td name='dia3' value='".$dia3."'>".$dia3."</td>";
    // echo "<td name='dia4' value='".$dia4."'>".$dia4."</td>";
    // echo "<td name='dia5' value='".$dia5."'>".$dia5."</td>";
    // echo "</tr>";

}
}
// echo "</tbody></table>";


// foreach($cantidad as $row){
//     if($row[0]!=''){
//         $consulta= "INSERT INTO rutina(dia1,dia2,dia3,dia4,dia5) VALUES('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]')";
//         $result = $conexion -> query($consulta);
    
//     }

// }
// echo count($cantidad);
?>