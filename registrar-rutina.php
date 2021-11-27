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
        Añada una Rutina enviando correo al instructor
        <small>Añada datos a la rutina de acuerdo a lo enviado por el instructor</small>
      </h1>
    </section>
      <div class="row" style="display:flex;justify-content: center;align-items: center;">
        <div class="col-md-8" ">
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Envie Correo</h3>
              </div>
                <div class="box-body" >
                  <!-- form start -->
                      <form role="form" method="post" name="regrut" id="regrut" action="enviarcorreo.php">
                        <div class="box-body">
                                  <div class="form-group has-feedback">
                                  <label for="usuario">Rutina</label>
                                  <input type="text" class="form-control" id="rutina" name="rutina" placeholder="Rutina" required>
                                  </div>
                                  <div class="form-group has-feedback">
                                    <label for="usuario">Instructor</label>
                                    <select name="inst" id="inst" required onchange="myplandetail(this.value)" class="form-control">
                                    <option value="">--Please Select--</option>
                                    <?php
                                    $query="select * from instructor";
                                    $result=mysqli_query($conn,$query);
                                    if(mysqli_affected_rows($conn)!=0){
                                      while($row=mysqli_fetch_row($result)){
                                          echo "<option value=".$row[0].">".$row[1]."</option>";
                                            }
                                      }

                                    ?> 
                                    </select>
                                  </div>  

                                  <div class="form-group has-feedback">
                                            <!-- <div class="row"> -->
                                            <div id="plandetls">
                                            </div>
                                  </div>

                          <div class="form-group has-feedback">
                            <label for="usuario">Mensaje</label>
                            <textarea type="textarea" rows="10" cols="50" class="form-control" id="textarea" name="textarea" placeholder="Mensaje" required></textarea>
                          </div>
                                 
                          </div>
                         
                    
                        </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <input type="hidden" name="regrut" value="">
                        <button type="submit" class="btn btn-primary">Enviar correo</button>
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
  <!-- </div> -->
  <!-- /.content-wrapper -->
  <script>
  function myplandetail(str){
                 
                 if(str==""){
                     document.getElementById("plandetls").innerHTML = "";
                     return;
                 }else{
                     if (window.XMLHttpRequest) {
                  // code for IE7+, Firefox, Chrome, Opera, Safari
                      xmlhttp = new XMLHttpRequest();
                      }
                     xmlhttp.onreadystatechange = function() {
                     if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("plandetls").innerHTML=this.responseText;
                 
                         }
                     };
                     
                      xmlhttp.open("GET","rutinadetail.php?q="+str,true);
                      xmlhttp.send();    
                 }
                }
  
                             
    </script>     
  <?php
include_once 'tempaltes/footer.php';  

?>




