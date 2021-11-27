<?php
include_once 'funciones/sesiones.php';
include_once 'tempaltes/header.php';  
include_once 'tempaltes/barra.php';
include_once 'tempaltes/navegacion.php';
include_once 'funciones/funciones.php';
$dnicli=$_SESSION['DNIC'];
?>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper"  >
    <!-- Content Header (Page header) -->
    
    <section class="content-header">
      <h1>
        Registrar Cliente a Membresia
        <small>Añada de acuerdo a membresias disponibles</small>
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
                      <form role="form" method="post" name="agregar-cli-memb" id="agregar-cli-memb" action="insertar-admin.php">
                        <div class="box-body">
                                  <div class="form-group has-feedback">
                                  <label for="usuario">Cliente</label>
                                  <select name="cli" id="cli" required onchange="myplandetail2(this.value)" class="form-control">
                                  <option value="">--Please Select--</option>
                                  <?php
                                  $query="select * from cliente where dnic=".$dnicli;
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
                                            <div id="plandetls2">
                                            </div>
                                  </div>

                                  <div class="form-group has-feedback">
                                  <label for="usuario">Membresias disponibles</label>
                                  <select name="memb" id="memb" required onchange="myplandetail3(this.value)" class="form-control">
                                  <option value="">--Please Select--</option>
                                  <?php
                                  $query="select * from membresias";
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
                                            
                                            <div id="plandetls3">
                                                
                                
                                            </div>
                                  </div>

                                 
                          </div>
                         
                    
                        </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <input type="hidden" name="agregar-cli-memb" value="1">
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
  function myplandetail2(str){
                 
                 if(str==""){
                     document.getElementById("plandetls2").innerHTML = "";
                     return;
                 }else{
                     if (window.XMLHttpRequest) {
                  // code for IE7+, Firefox, Chrome, Opera, Safari
                      xmlhttp = new XMLHttpRequest();
                      }
                     xmlhttp.onreadystatechange = function() {
                     if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("plandetls2").innerHTML=this.responseText;
                 
                         }
                     };
                     
                      xmlhttp.open("GET","plandetail2.php?q="+str,true);
                      xmlhttp.send();    
                 }
                }
   function myplandetail3(str){
    
                 if(str==""){
                     document.getElementById("plandetls3").innerHTML = "";
                     return;
                 }else{
                     if (window.XMLHttpRequest) {
                  // code for IE7+, Firefox, Chrome, Opera, Safari
                      xmlhttp = new XMLHttpRequest();
                      }
                     xmlhttp.onreadystatechange = function() {
                     if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("plandetls3").innerHTML=this.responseText;
                 
                         }
                     };
                     
                      xmlhttp.open("GET","plandetail3.php?q="+str,true);
                      xmlhttp.send();    
                      
                 }
             
                }
                             
    </script>     
  <?php
include_once 'tempaltes/footer.php';  

?>




