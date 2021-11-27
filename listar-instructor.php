<?php
include_once 'funciones/sesiones.php';
include_once 'funciones/funciones.php';
include_once 'tempaltes/header.php';  
include_once 'tempaltes/barra.php';
include_once 'tempaltes/navegacion.php';

?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Instructor
        <small>Informacion</small>
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla con los datos acerca de los Instructores</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>DNI</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Correo</th>
                  <th>Telefono</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                try{
                  $sql ="SELECT dni,nombreins,apellido,correo,telefono FROM instructor where estado=1";
                  $resultado= $conn->query($sql);

                }catch(Exception $e){
                  $error = $e->getMessage();
                  echo $error;
                }
                while($horario = $resultado->fetch_assoc()){  
                  $id=$horario['dni'];?>
               
                <tr>
                  <td><?php echo $horario['dni']; ?></td>
                  <td><?php echo $horario['nombreins']; ?></td>
                  <td><?php echo $horario['apellido']; ?></td>
                  <td><?php echo $horario['correo']; ?></td>
                  <td><?php echo $horario['telefono']; ?></td>
                  <td>
                    <button  class="btn bg-orange btn-flat margin btn-popup4" data-id=<?php echo $id?>>
                      <i class="fa fa-pencil"></i>Editar
                </button> 
                  </td>
                  <td>
                    <button  data-tipo="admin" class="btn bg-red btn-flat margin borrar-registros" data-id=<?php echo $id?>>
                      <i class="fa fa-trash"></i>Inhabilitar
                </button> 
                  </td>
                </tr>

                <?php }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>DNI</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Correo</th>
                  <th>Telefono</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                </tfoot>
              </table>

              <div class="modal fade modal modal-warning fade" id="custModal4" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Editar Instructor</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        
                        
                            <div class="modal-body modal-body4">

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