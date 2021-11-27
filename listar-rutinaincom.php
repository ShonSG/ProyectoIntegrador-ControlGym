<?php
include_once 'funciones/sesiones.php';
include_once 'funciones/funciones1.php';
include_once 'tempaltes/header.php';  
include_once 'tempaltes/barra.php';
include_once 'tempaltes/navegacion.php';


?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rutinas
        <small>Informacion</small>
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla con los datos acerca de las Rutinas Incompletas</h3>
            </div>
            <!-- /.box-header -->
           
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Dia1</th>
                  <th>Dia2</th>
                  <th>Dia3</th>
                  <th>Dia4</th>
                  <th>Dia5</th>
              
                </tr>
                </thead>
                <tbody>
                          <?php 
                  $query = "select * from rutina where DIA1=''";
                  $result = mysqli_query($con, $query);
                  while($row = mysqli_fetch_array($result)){
                    $id =$row['id_rut'];
                    $nombre=$row['nombre'];
                    $dia1 = $row['DIA1'];
                    $dia2 = $row['DIA2'];
                    $dia3 = $row['DIA3'];
                    $dia4 = $row['DIA4'];
                    $dia5 = $row['DIA5'];
                  

                    echo "<tr>";
                    echo "<td>".$id."</td>";
                    echo "<td>".$nombre."</td>";
                    echo "<td>".$dia1."</td>";
                    echo "<td>".$dia2."</td>";
                    echo "<td>".$dia3."</td>";
                    echo "<td>".$dia4."</td>";
                    echo "<td>".$dia5."</td>";
                    echo "<td><a href='importar-excelrut.php?id=$id'>
                     <button class='btn btn-info btn-sm btn-popup'><i class='fa fa-search'></i>Insertar datos</button></td>";
                    echo "</tr>";
                  }
                  ?>
             
       
           
                </tbody>
                <tfoot>
                <tr>
                <th>ID</th>
                  <th>Nombre</th>
                  <th>Dia1</th>
                  <th>Dia2</th>
                  <th>Dia3</th>
                  <th>Dia4</th>
                  <th>Dia5</th>
                </tr>
                </tfoot>
              
              </table>
                        
            </div>
            <!-- /.box-body -->
               
                
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
		</div>     
		
			<!-- </div>
		</div> 
    /.content -->
      <!-- Default box -->
      

    <!-- </section>
     /.content -->
  <!-- </div>  -->
  
  <?php
include_once 'tempaltes/footer.php';  

?>




