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
        Membresias obtenidas por los clientes
        <small>Informacion</small>
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla con los datos acerca de las Membresias Obtenidas</h3>
            </div>
            <!-- /.box-header -->
           
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>Codigo</th>
                  <th>DNI</th>
                  <th>Nombre Cliente</th>
                  
                  <th>En meses/dias</th>
                  <th>Numero de meses/dias</th>
                  <th>Fecha de inicio</th>
                  <th>Fecha de fin</th>
                  <th>Accion</th>
              
                </tr>
                </thead>
                <tbody>
                          <?php 
                  $query = "select * from membresias AS p INNER JOIN plan_cliente AS z
                  ON p.idmemb = z.id_plan INNER JOIN cliente AS c
                  ON c.dnic = z.id_cliente ORDER BY id_plan_cliente DESC";
                  $result = mysqli_query($con, $query);
                  while($row = mysqli_fetch_array($result)){
                    $idc = $row['codigo'];
                    $dnic= $row['dnic'];
                    $namec = $row['nombrec'];
                    $tipot = $row['tipo_tiempo'];
                    $numt = $row['numero_tiempo'];
                    $fechai =$row['fecha_inicio'];
                    $fechaf=$row['fecha_fin'];
                  

                    echo "<tr>";
                    echo "<td>".$idc."</td>";
                    echo "<td>".$dnic."</td>";
                    echo "<td>".$namec."</td>";
                    echo "<td>".$tipot."</td>";
                    echo "<td>".$numt."</td>";
                    echo "<td>".$fechai."</td>";
                    echo "<td>".$fechaf."</td>";
                    echo "<td><a class='fa fa-file-pdf-o' href='generar_carnet_plan1.php?codigo=$idc'     role='button'>Ver comprobante</a></td>";

                    // echo "<td><button data-id='".$id."' class='btn btn-info btn-sm btn-popup'><i class='fa fa-search'></i>Ver Instructores</button></td>";
                    // echo "<td><button data-id='".$id."' class='btn btn-info btn-sm btn-popup1'><i class='fa fa-search'>Ver Descripcion</button></td>";
                    echo "</tr>";
                  }
                  ?>
             
       
           
                </tbody>
                <tfoot>
                <tr>
                
                <th>Codigo</th>
                 <th>DNI</th>
                  <th>Nombre Cliente</th>
                 
                  <th>En meses/dias</th>
                  <th>Numero de meses/dias</th>
                  <th>Fecha de inicio</th>
                  <th>Fecha de fin</th>
                  <th>Accion</th>
                </tr>
                </tfoot>
              
              </table>
             <!-- Modal -->
                <div class="modal fade modal modal-info fade" id="custModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Instructores</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        
                        
                            <div class="modal-body">

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="modal fade modal modal-info fade" id="custModal1" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Detalles de la RUTINA ELEGIDA</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        
                        
                            <div class="modal-body modal-body1">

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                  </div>

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




