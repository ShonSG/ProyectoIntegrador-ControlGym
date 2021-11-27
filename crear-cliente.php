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
        Crear Cliente
        <small>Llena el formulario para crear un cliente</small>
      </h1>
    </section>
      <div class="row" style="display:flex;justify-content: center;align-items: center;">
        <div class="col-md-8" >
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
              <h3 class="box-title">Crear Cliente</h3>
              </div>
                <div class="box-body" >
                  <!-- form start -->
                      <form role="form" method="post" name="crear-cliente" id="crear-cliente" action="insertar-admin.php">
                        <div class="box-body">

                          <div class="form-group has-feedback formulario__grupo " id="grupo__DNIC">
                            <label for="DNIC" class="formulario__label">DNI</label>
                            <div class="formulario__grupo-input">
                            <input type="text" class="form-control formulario__input" id="DNIC" name="DNIC" placeholder="DNI">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            <i class="formulario__validacion-estado fa fa-times-circle"></i> 
                            </div>
                            <p class="formulario__input-error">Solo debe contener numeros y el maximo es de 8 digitos no signos ni letras.</p>
                          </div>

                          <div class="form-group has-feedback formulario__grupo" id="grupo__nombre">
                            <label for="nombre" class="formulario__label">Nombres</label>
                            <div class="formulario__grupo-input">
                            <input type="text" class="form-control formulario__input" id="nombre" name="nombre" placeholder="Nombre Completo">
                            <span class="glyphicon glyphicon-duplicate form-control-feedback"></span> 
                            <i class="formulario__validacion-estado fa fa-times-circle"></i> 
                            </div>
                            <p class="formulario__input-error">Solo debe contener caracteres no signos ni numeros.</p>
                          </div>

                          <div class="form-group has-feedback formulario__grupo" id="grupo__apellido">
                            <label for="apellidos" class="formulario__label">Apellidos</label>
                            <div class="formulario__grupo-input">
                            <input type="text" class="form-control formulario__input" id="apellido" name="apellido" placeholder="Apellido Completo">
                            <span class="glyphicon glyphicon-duplicate form-control-feedback"></span> 
                            <i class="formulario__validacion-estado fa fa-times-circle"></i> 
                            </div>
                            <p class="formulario__input-error">Solo debe contener caracteres no signos.</p>
                          </div>  

                          <div class="form-group has-feedback formulario__grupo" id="grupo__correo">
                            <label for="correo"  class="formulario__label">Correo</label>
                            <div class="formulario__grupo-input">
                            <input type="email" class="form-control formulario__input" id="correo" name="correo" placeholder="Correo">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            <i class="formulario__validacion-estado fa fa-times-circle"></i> 
                            </div> 
                            <p class="formulario__input-error">Debe cumplir el formato de correo(usuario,@,dominio).</p>
                          </div>  

                          <div class="form-group has-feedback formulario__grupo" id="grupo__telefono">
                            <label for="telefono">Telefono</label>
                            <div class="formulario__grupo-input">
                            <input type="number" class="form-control formulario__input" id="telefono" name="telefono" placeholder="Telefono">
                            <span class="glyphicon glyphicon-earphone form-control-feedback"></span> 
                            <i class="formulario__validacion-estado fa fa-times-circle"></i> 
                            </div>
                            <p class="formulario__input-error">Solo debe contener 9 digitos no signos ni caracteres.</p> 
                          </div>    
                    
                        </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <input type="hidden" name="crear-cliente" value="1">
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
  <!-- /.content-wrapper -->
<!-- <script>
  (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script> -->
  <?php
include_once 'tempaltes/footer.php';  

?>




