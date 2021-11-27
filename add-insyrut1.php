<?php
include_once 'funciones/sesiones.php';
include_once 'tempaltes/header.php';  
include_once 'tempaltes/barra.php';
include_once 'tempaltes/navegacion.php';
include_once 'funciones/funciones.php';
$dni=$_SESSION['DNI'];
?>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper"  >
    <!-- Content Header (Page header) -->
    
    <section class="content-header">
      <h1>
        Registrar Instructor de Acuerdo a Rutina y Horario
        <small>Añada de acuerdo a horarios disponibles</small>
      </h1>
    </section>
      <div class="row" style="display:flex;justify-content: center;align-items: center;">
        <div class="col-md-8" ">
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
              <h3 class="box-title">Añada</h3>
              </div>
                <div class="box-body" >
                  <!-- form start -->
                      <form role="form" method="post" name="agregar-inst-hor-rut1" id="agregar-inst-hor-rut1" action="insertar-admin.php">
                        <div class="box-body">
                                  <div class="form-group has-feedback">
                                  <label for="usuario">Instructor</label>
                                  <select name="instr" id="instr" required onchange="myplandetail(this.value)" class="form-control">
                                  <option value="">--Please Select--</option>
                                  <?php
                                  $query="select * from instructor where dni=".$dni;
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
                                  <label for="usuario">Rutinas disponibles</label>
                                  <select name="rutina" id="rutina" required onchange="myplandetail1(this.value)" class="form-control">
                                  <option value="">--Please Select--</option>
                                  <?php
                                  $query="select distinct id_rut,nombre from rutina r, horariosrut h where r.id_rut=h.id_rutin and estado=0;";
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
                                            
                                            <div id="plandetls1">
                                                
                                
                                            </div>
                                  </div>

                                 
                          </div>
                         
                    
                        </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <input type="hidden" name="agregar-inst-hor-rut1" value="1">
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
  <!-- </div>
  /.content-wrapper -->
                               
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
                     
                      xmlhttp.open("GET","plandetail.php?q="+str,true);
                      xmlhttp.send();    
                 }
                }
   function myplandetail1(str){
    
                 if(str==""){
                     document.getElementById("plandetls1").innerHTML = "";
                     return;
                 }else{
                     if (window.XMLHttpRequest) {
                  // code for IE7+, Firefox, Chrome, Opera, Safari
                      xmlhttp = new XMLHttpRequest();
                      }
                     xmlhttp.onreadystatechange = function() {
                     if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("plandetls1").innerHTML=this.responseText;
                 
                         }
                     };
                     
                      xmlhttp.open("GET","plandetail1.php?q="+str,true);
                      xmlhttp.send();    
                      
                 }
             
                }
                             
    </script>     
  <?php
include_once 'tempaltes/footer.php';  

?>




