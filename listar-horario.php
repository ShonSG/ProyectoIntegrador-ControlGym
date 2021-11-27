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
        HORARIOS
        <small>De Rutinas</small>
      </h1>
    </section>



    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla con los datos acerca de los Horarios con sus Rutinas</h3>
            </div>
            <div>
            <a href="horarioxc.php" class="btn bg-orange btn-flat margin btn-popuph" >
                      <i class="fa fa-add"></i>Ver horarios que no comienzan</a>


                      
            </div>
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Horas</th>
                  <th>Dias</th>
                  <th>Rutina</th>
                  <th>Instructor</th>
                  <th>Ver Alumnos</th>

                </tr>
                </thead>
                <tbody>
                <?php
                try{
                  $sql ="SELECT id_horario,horas,dias,nombre,nombreins FROM instructor i,reginsrut e,horariosrut h, rutina r 
                  WHERE i.dni=e.dnins and e.id_horar=h.id_horario and h.id_rutin = r.id_rut and fechainicio < '$fechai'";
                  $resultado= $conn->query($sql);

                }catch(Exception $e){
                  $error = $e->getMessage();
                  echo $error;
                }
                while($horario = $resultado->fetch_assoc()){  
                  $id=$horario['id_horario'];?>
               
                <tr>
                  <td><?php echo $horario['id_horario']; ?></td>
                  <td><?php echo $horario['horas']; ?></td>
                  <td><?php echo $horario['dias']; ?></td>
                  <td><?php echo $horario['nombre']; ?></td>
                  <td><?php echo $horario['nombreins']; ?></td>
                  <td>
                    <button  class="btn bg-orange btn-flat margin btn-popup2" data-id=<?php echo $id?>>
                      <i class="fa fa-search"></i>Ver alumnos
                </button> 
                  </td>
                </tr>

                <?php }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Horas</th>
                  <th>Dias</th>
                  <th>Rutina</th>
                  <th>Instructor</th>
                  <th>Ver Alumnos</th>
                </tr>
                </tfoot>
              </table>

              <div class="modal fade modal modal-warning fade" id="custModal2" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Lista de Alumnos</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        
                        
                            <div class="modal-body modal-body2">
                 
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                  </div>
 <!-- MODAL NUEVO HORARIO -->
 <div class="modal fade modal modal-default fade" id="custModalh" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Lista de Alumnos</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        
                        
                            <div class="modal-body modal-bodyh">

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




<!-- href="veralumnos.php?id=<?php echo $horario['id_horario'] ?>" -->