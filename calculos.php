<?php
include_once 'funciones/sesiones.php';
include_once 'tempaltes/header.php';  
include_once 'tempaltes/barra.php';
include_once 'tempaltes/navegacion.php';
include_once 'funciones/funciones.php';
$id=$_SESSION['DNI'];
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php
      $query="select * from cliente where estado =1 and dnic=".$id;
      $resultado= $conn->query($query);
      while($horario = $resultado->fetch_assoc()){  
        $nombre=$horario['nombrec'];;
      }
      ?>
      <div class="callout callout-success">
                <h2>Nombre : <?php echo $nombre?></h2>
              </div>
      <h1>
        Cálculos
        <small>Llena el formulario para completar los cálculos</small>
      </h1>
    </section>
      <div class="row">
      <form role="form" method="post" name="crear-calculos" id="crear-calculos" action="insertar-calculos.php">

      <input type="hidden" name="idu" id="idu" value=<?php echo $id?>></input>
      <div class="row">
        <div class="col-md-6">
          <!-- Main content -->
          <section class="content" style="margin: 10px;">

          <div style="backgroound-image:url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.flaticon.es%2Ficono-gratis%2Fvaso-de-agua_3717054&psig=AOvVaw3rYj69SZMcEVvVSJ_pbCfk&ust=1637087920378000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCKDl4vKBm_QCFQAAAAAdAAAAABAK')">

          </div>
            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
              <h3 class="box-title">Calcular IMC</h3>
              </div>
                <div class="box-body">
                  <!-- form start -->
                      
                        <div class="box-body">
                         
                          <div class="form-group has-feedback formulario__grupo " id="grupo__Peso">
                              <label for="Peso" class="formulario__label">Peso(kg)</label>
                              <div class="formulario__grupo-input">
                                <input type="text" class="form-control formulario__input" id="Peso" name="Peso" placeholder="Peso">
                                <span class="fa fa-calculator form-control-feedback"></span>
                                <i class="formulario__validacion-estado fa fa-times-circle"></i> 
                              </div>
                                <p class="formulario__input-error">Solo debe contener numeros decimales no letras.</p>
                          </div>
                          <div class="form-group has-feedback formulario__grupo " id="grupo__Altura">
                            <label for="Altura" class="formulario__label">Altura(m)</label>
                            <div class="formulario__grupo-input">
                              <input type="text" class="form-control formulario__input" id="Altura" name="Altura" placeholder="Altura">
                              <span class="fa fa-calculator form-control-feedback"></span>
                              <i class="formulario__validacion-estado fa fa-times-circle"></i> 
                            </div>
                              <p class="formulario__input-error">Solo debe contener numeros decimales no letras.</p>
                          </div>                            
                        </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <input type="hidden" name="" value="1" >
                        <!-- <button type="submit" name="" class="btn btn-primary registrar" disabled>Guardar</button> -->
                        <a class="btn btn-primary calculo" name="" onclick="obtenerdatos()">Calcular</a>
                        <a class="btn btn-primary eliminar" onclick="borrardatos()">Borrar</a>
                      </div>

               
                    <div class="" id="mostrarCalculos" style="display: none">
                            
                              <h1 class="">Resultados</h4>
                                               
                            <div class="modal-body10">
                            <h1>Hola</h1>
                            </div>
  
                    </div>
                <!-- /.box-body -->

            </div>
              <!-- /.box -->

          </section>
          <!-- /.content -->
        </div>
        <!-- aca termina el imc -->
        <div class="col-md-6">
          <!-- Main content -->
          <section class="content" style="margin: 10px;">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
              <h3 class="box-title">Calcular las necesidades hidrícas</h3>
              </div>
                <div class="box-body">
                  <!-- form start -->
                   
                        <div class="box-body">
                         
                        <div class="form-group has-feedback formulario__grupo " id="grupo__PesoH">
                            <label for="PesoH" class="formulario__label">Peso(kg)</label>
                            <div class="formulario__grupo-input">
                              <input type="text" class="form-control formulario__input" id="PesoH" name="PesoH" placeholder="Peso">
                              <span class="fa fa-calculator form-control-feedback"></span>
                              <i class="formulario__validacion-estado fa fa-times-circle"></i> 
                            </div>
                              <p class="formulario__input-error">Solo debe contener numeros decimales no letras.</p>
                        </div>
                        <div class="form-group has-feedback formulario__grupo " id="grupo__Horasd">
                            <label for="Horasd" class="formulario__label">Horas de deporte al día</label>
                            <div class="formulario__grupo-input">
                              <input type="number" class="form-control formulario__input" id="Horasd" name="Horasd" placeholder="Horas de deporte">
                              <span class="fa fa-calculator form-control-feedback"></span>
                              <i class="formulario__validacion-estado fa fa-times-circle"></i> 
                            </div>
                              <p class="formulario__input-error">Solo debe contener numeros no signos ni letras.</p>
                          </div>                                   
                        </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <input type="hidden" name="" value="1" >
                        <!-- <button type="submit" name="" class="btn btn-primary registrarpxh" disabled>Guardar</button> -->
                        <a class="btn btn-primary calculopxh" name="" onclick="obtenerdatospxh()">Calcular</a>
                        <a class="btn btn-primary eliminarpxh" onclick="borrardatospxh()">Borrar</a>
                      </div>

                   

                    <div class="" id="mostrarCalculospxh" style="display: none">
                            
                              <h1 class="">Resultados</h4>
                                               
                            <div class="modal-body11">
                            <h1>Hola</h1>
                            </div>
  
                    </div>
                <!-- /.box-body -->

            </div>
              <!-- /.box -->

          </section>
          <!-- /.content -->
        </div>
        <!-- aca termina las necesidades hibricas -->
      </div>
      <!-- aca termina el row -->
      <div class="row" style="justify-content: center;display: flex;">
      <div class="col-md-6">
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
              <h3 class="box-title">Calcular las necesidades proteícas</h3>
              </div>
                <div class="box-body">
                  <!-- form start -->
                
                        <div class="box-body">
                         
                        <div class="form-group has-feedback formulario__grupo " id="grupo__Pesote">

                            <label for="Peso" class="formulario__label">Peso(Kg)</label>
                            <div class="formulario__grupo-input">
                            <input type="text" class="form-control formulario__input" id="Pesote" name="Pesote" placeholder="Peso">
                            <span class="fa fa-calculator form-control-feedback"></span>
                              <i class="formulario__validacion-estado fa fa-times-circle"></i> 
                            </div>
                              <p class="formulario__input-error">Solo debe contener numeros no signos ni letras.</p>
                          </div>
                          <div class="form-group">
                            <label for="Altura">Tipo de entrenamiento</label>
                            <!-- <input type="text" class="form-control" id="Altura" name="Altura" placeholder="Tipo de entrenamiento"> -->
                                <select name="tipoe" id="tipoe" class="form-control select2" style="width: 100%;">
                                  <option value="">--Please Select--</option>
                                  <option value="1.5">construir musculo</option>
                                  <option value="1.2">mejorar resitencia</option>
                                  <option value="1.1">dieta equilibrada</option>
                                </select>
                        
                          </div>                                   
                        </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <input type="hidden" name="" value="1" >
                        <!-- <button type="submit" name="" class="btn btn-primary registrarte" disabled>Guardar</button> -->
                        <a class="btn btn-primary calculote" name="" onclick="obtenerdatoste()">Calcular</a>
                        <a class="btn btn-primary eliminarte" onclick="borrardatoste()">Borrar</a>
                      </div>

                   
                    <div class="" id="mostrarCalculoste" style="display: none">
                            
                              <h1 class="">Resultados</h4>
                                               
                            <div class="modal-bodyte">
                           
                            </div>
  
                    </div>
                <!-- /.box-body -->

            </div>
              <!-- /.box -->

          </section>
          <!-- /.content -->
        </div>
      </div>
      <div style="text-align:center"class="box-footer">
      <input type="hidden" name="crear-calculos" value="1">
  <button style="" type="submit" name="" class="btn btn-primary registrarte" disabled>Guardar</button>
  <a href="consultar-cliente.php" style=""  name="" class="btn btn-primary" >Regresar</a>  
</div>
</form>
    </div>
<!-- aca termina el row  del form -->
</div>
  <!-- /.content-wrapper -->

  <?php
include_once 'tempaltes/footer.php';  

?>
<script type="text/javascript">
  //CALCULOS IMC
function obtenerdatos(){
  var peso = document.getElementById('Peso').value;
  var altura = document.getElementById('Altura').value;

  let a = document.querySelector(".calculo");
  // let button1 = document.querySelector(".registrar"); 
  let button2 = document.querySelector(".eliminar");   
  // console.log("Peso: "+peso+"Altura:"+altura);
  $.ajax({
      url: 'calculos-imc.php',
      type: 'post',
      data: {peso:peso,altura:altura},
      success: function (response) {
        $('.modal-body10').html(response);
        $('#mostrarCalculos').toggle('show');
        $(".calculo").attr("disabled", "disabled");
        // button1.disabled = false; 
      }
    });
}
function borrardatos(){
  document.getElementById("Peso").value = "";
  document.getElementById("Altura").value = ""; 
  // let button1 = document.querySelector(".registrar"); 
  var div = document.querySelector("#mostrarCalculos"); div.style.display = "none";
  $(".calculo").removeAttr("disabled");
  // button1.disabled = true; 
}

//CALCULOS HIDRICOS
function obtenerdatospxh(){
  var peso = document.getElementById('PesoH').value;
  var altura = document.getElementById('Horasd').value;
  console.log("Peso: "+peso+"Horasxd:"+altura);
  // let button1 = document.querySelector(".registrarpxh"); 
  $.ajax({
      url: 'calculos-hidricos.php',
      type: 'post',
      data: {peso:peso,altura:altura},
      success: function (response) {
        $('.modal-body11').html(response);
        $('#mostrarCalculospxh').toggle('show');
        $(".calculopxh").attr("disabled", "disabled");
        // button1.disabled = false; 
      }
    });
}
function borrardatospxh(){
  document.getElementById("PesoH").value = "";
  document.getElementById("Horasd").value = ""; 
  // let button1 = document.querySelector(".registrarpxh"); 
  var div = document.querySelector("#mostrarCalculospxh"); div.style.display = "none";
  $(".calculopxh").removeAttr("disabled");
  // button1.disabled = true; 
}

//CALCULOS PROTEICOS
function obtenerdatoste(){
  var peso = document.getElementById('Pesote').value;
  var altura = document.getElementById('tipoe').value;
  console.log("Peso: "+peso+"Tipoe:"+altura);
  let button1 = document.querySelector(".registrarte"); 
  $.ajax({
      url: 'calculos-proteicos.php',
      type: 'post',
      data: {peso:peso,altura:altura},
      success: function (response) {
        $('.modal-bodyte').html(response);
        $('#mostrarCalculoste').toggle('show');
        $(".calculote").attr("disabled", "disabled");
        button1.disabled = false; 
      }
    });
 }
function borrardatoste(){
  document.getElementById("Pesote").value = "";
  document.getElementById("tipoe").value = ""; 
  let button1 = document.querySelector(".registrarte"); 
  var div = document.querySelector("#mostrarCalculoste"); div.style.display = "none";
  $(".calculote").removeAttr("disabled");
  button1.disabled = true; 
}
</script>
<!-- $("td > a").removeAttr("disabled"); -->



