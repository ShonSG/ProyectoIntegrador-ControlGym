<?php
include_once 'funciones/sesiones.php';
include_once 'funciones/funciones.php';
include_once 'tempaltes/header.php';  
include_once 'tempaltes/barra.php';
include_once 'tempaltes/navegacion.php';

$fechai=date('Y-m-d');
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Horarios
        <small>Que no comienzan</small>
      </h1>
    </section>



    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla con los datos acerca de los Horarios</h3>
            </div>
           
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Horas</th>
                  <th>Dias</th>
                  <th>NombreInstructor</th>
                  <th>Rutina</th>
                  <th>Estado</th>
                  <th>Fecha de Inicio</th>
                  <th>Insertar clientes</th>
                  <th>Ver Clientes</th>
                </tr>
                </thead>
                <tbody>
                <?php
                

                try{
                  $sql ="SELECT * FROM horariosrut h, reginsrut r, rutina t , instructor i WHERE h.id_horario=r.id_horar  and r.id_rutin = t.id_rut and r.dnins = i.dni 
                  and fechainicio >= '$fechai'";
                  $resultado= $conn->query($sql);

                }catch(Exception $e){
                  $error = $e->getMessage();
                  echo $error;
                }
                while($horario = $resultado->fetch_assoc()){  
                  $id=$horario['idregis'];
                  $ia=$horario['id_horario'];?>
                 
               
                <tr>
                  <td><?php echo $horario['id_horario']; ?></td>
                  <td><?php echo $horario['horas']; ?></td>
                  <td><?php echo $horario['dias']; ?></td>
                  <td><?php echo $horario['nombreins']?></td>
                  <td><?php echo $horario['nombre']?></td>
                  <?php
                  if($horario['fechainicio']== $fechai){                    
                  ?>
                  <td><span class="label label-success">Hoy inicia</span></td>
                  <?php } else {  ?>
                  <td><span class="label label-warning">Aun no inicia</span></td>
                  <?php }?>
                  <td><?php echo $horario['fechainicio']; ?></td>
                  <?php
                  if($horario['fechainicio']== $fechai){                    
                  ?>
                  <td><span class="label label-danger">No se puede agregar,hoy inicia </span></td>
                  <?php } else {  ?>
                  <td> <button  class="btn bg-primary btn-flat margin btn-popupah" data-id=<?php echo $id?>>
                      <i class="fa fa-calendar-check-o"></i>Insertar alumnos
                </button> </td>
                  <?php }?>
                  <td><button  class="btn bg-primary btn-flat margin btn-popupvh" data-id=<?php echo $ia?>>
                      <i class="fa  fa-calendar-minus-o"></i>Ver alumnos
                </button> </td></td>
                </tr>
               
               
                <?php }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Horas</th>
                  <th>Dias</th>
                  <th>NombreInstructor</th>
                  <th>Rutina</th>
                  <th>Estado</th>
                  <th>Instructor</th>
                  <th>Insertar clientes</th>
                  <th>Ver Clientes</th>
                </tr>
                </tfoot>
              </table>

              <div class="modal fade modal modal-default fade" id="custModalah" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Insertar cliente al horario</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        
                        
                            <div class="modal-body modal-bodyah">
                 
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                  </div>
 <!-- MODAL NUEVO HORARIO -->
 <div class="modal fade modal modal-default fade" id="custModalvh" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Lista de Clientes</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        
                        
                            <div class="modal-body modal-bodyvh">

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
    <!-- /.content -->
      <!-- Default box -->
     
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
include_once 'tempaltes/footer.php';  

?>
