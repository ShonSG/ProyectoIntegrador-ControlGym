<?php
include_once 'funciones/sesiones.php';
include_once 'tempaltes/header.php';  
include_once 'tempaltes/barra.php';
include_once 'tempaltes/navegacion.php';
include_once 'funciones/funciones.php';
?>



  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Horario
        <small>Llena el formulario para registar un horario</small>
      </h1>
    </section>
      <div class="row" style="display:flex;justify-content: center;align-items: center;">
        <div class="col-md-8" >
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
              <h3 class="box-title">Crear Horario</h3>
              </div>
                <div class="box-body" >
                  <!-- form start -->
                      <form role="form" method="post" name="crear-horario" id="crear-horario" action="insertar-horario.php">
                        <div class="box-body">
                          <div class="form-group">
                          <label for="usuario">Rutina</label>
                                    <select name="horar" id="horar" required onchange="" class="form-control">
                                    <option value="">--Please Select--</option>
                                    <?php
                                    $query="select * from rutina";
                                    $result=mysqli_query($conn,$query);
                                    if(mysqli_affected_rows($conn)!=0){
                                      while($row=mysqli_fetch_row($result)){
                                          echo "<option value=".$row[0].">".$row[1]."</option>";
                                            }
                                      }

                                    ?> 
                                    </select>
                          </div>


                        <label>Dias:</label>
                          <div class="form-group">
                              <label>
                                <input type="checkbox" class="flat-red" name="dias[]" value="Lunes" >
                                Lunes
                              </label>
                              
                              <label>
                                <input type="checkbox" class="flat-red" name="dias[]" value="Martes">
                                Martes
                              </label>
                              
                              <label>
                                <input type="checkbox" class="flat-red" name="dias[]" value="Miercoles">
                                Miercoles
                              </label>

                              <label>
                                <input type="checkbox" class="flat-red" name="dias[]" value="Jueves">
                                Jueves
                              </label>
                              <label>
                                <input type="checkbox" class="flat-red" name="dias[]" value="Viernes">
                                Viernes
                              </label>
                              <label>
                                <input type="checkbox" class="flat-red" name="dias[]" value="Sabado">
                                Sabado
                              </label>
                          </div>
                         
                          <div class="bootstrap-timepicker">
                              <div class="form-group">
                                <label>Hora inicio:</label>

                                <div class="input-group">
                                  <input type="text" class="form-control timepicker" name="horai">

                                  <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                  </div>
                                </div>
                                <!-- /.input group -->
                              </div>
                              <!-- /.form group -->
                          </div>
                          <div class="bootstrap-timepicker">
                              <div class="form-group">
                                <label>Hora final:</label>

                                <div class="input-group">
                                  <input type="text" class="form-control timepicker" name="horaf">

                                  <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                  </div>
                                </div>
                                <!-- /.input group -->
                              </div>
                              <!-- /.form group -->
                          </div>

                                        <!-- Date -->
                            <div class="form-group">
                              <label>Fecha de inicio:</label>

                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker" name="fechai" required>
                              </div>
                              <!-- /.input group -->
                            </div>

                               
                        </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <input type="hidden" name="crear-horario" value="1">
                        <button type="submit" class="btn btn-primary">Añadir</button>
                      </div>
                    </form>
                </div>
                <!-- /.box-body -->

            </div>
              <!-- /.box -->

          </section>
          <!-- /.content -->
        </div>
      </div>  
  </div>
  <?php
include_once 'tempaltes/footer.php';  

?>




