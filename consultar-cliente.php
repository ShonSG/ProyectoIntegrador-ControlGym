<?php
include_once 'funciones/sesiones.php';
include_once 'tempaltes/header.php';  
include_once 'tempaltes/barra.php';
include_once 'tempaltes/navegacion.php';
include_once 'funciones/funciones.php';
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

      <!-- Automatic element centering -->
  
          <div class="lockscreen-logo">
            <a href=""><b>BIOGYM</b>CALCULOS</a>
          </div>
              <!-- User name -->
            <div style="text-align:center;" class="lockscreen-name">Cliente<br>
            <label>Ingrese DNI</label>
            </div>
            <!-- START LOCK SCREEN ITEM -->
            <div class="lockscreen-item">
    
              <!-- lockscreen image -->
              <div class="lockscreen-image">
                <img src="img/AdminLTELogo.png" alt="User Image">
              </div>
                <!-- /.lockscreen-image -->

                <!-- <div class="form-group has-feedback formulario__grupo " id="grupo__DNI">
                            <label for="usuario" class="formulario__label">DNI</label>
                            <div class="formulario__grupo-input">
                            <input type="text" class="form-control formulario__input" id="DNI" name="DNI" placeholder="Usuario">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            <i class="formulario__validacion-estado fa fa-times-circle"></i> 
                            </div>
                            <p class="formulario__input-error">Solo debe contener numeros y el maximo es de 8 digitos no signos ni letras.</p>
                          </div> -->

                <!-- lockscreen credentials (contains the form) -->
                <form role="form" method="post" name="consultac" id="consultac" action="consulta.php" class="lockscreen-credentials">
                  <div class="input-group">
                      <div class="form-group has-feedback formulario__grupo " id="grupo__DNI">
                        <div class="formulario__grupo-input">
                          <input style="position:inherit"name="DNI" id="DNI" type="text" class="form-control formulario__input" placeholder="DNI">
                          <span style="top:0px"class="glyphicon glyphicon-user form-control-feedback"></span>
                          <i style="top:9px"class="formulario__validacion-estado fa fa-times-circle"></i> 
                        </div> 
                        <p class="formulario__input-error">Solo debe contener numeros y el maximo es de 8 digitos no signos ni letras.</p>
                      </div>  
                    <div class="input-group-btn">
                    <input type="hidden" name="consultac" value="1">
                      <button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
                    </div>
                  </div>
                </form>
              <!-- /.lockscreen credentials -->

            </div>
            <!-- /.lockscreen-item -->
                <!-- <div class="help-block text-center">
                  Enter your password to retrieve your session
                </div>
                <div class="text-center">
                  <a href="login.html">Or sign in as a different user</a>
                </div>
                <div class="lockscreen-footer text-center">
                  Copyright &copy; 2014-2016 <b><a href="https://adminlte.io" class="text-black">Almsaeed Studio</a></b><br>
                  All rights reserved
                </div> -->
         
<!-- /.center -->

<!-- jQuery 3 -->

  </div>
  <!-- /.content-wrapper -->

  <?php
include_once 'tempaltes/footer.php';  

?>




