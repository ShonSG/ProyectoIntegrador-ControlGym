<?php
include_once 'funciones/sesiones.php';
include_once 'tempaltes/header.php';  
include_once 'tempaltes/barra.php';
include_once 'tempaltes/navegacion.php';
include_once 'funciones/funciones.php';
$imc=$_SESSION['imc'];
$menimc=$_SESSION['men'];
$hidr=$_SESSION['calch'];
$men=$_SESSION['menh'];
$prot=$_SESSION['prote'];
$idu=$_SESSION['idu'];

$mensaje1 = $menimc;
?>

<?php
      $query="select * from cliente where estado =1 and dnic=".$idu;
      $resultado= $conn->query($query);
      while($horario = $resultado->fetch_assoc()){  
        $nombre=$horario['nombrec'];;
        $correo = $horario['correo'];
      }
      ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="row" style="display:flex;justify-content: center;align-items: center;">
        <div class="col-md-8" ">
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Envie Correo</h3>
              </div>
                <div class="box-body">

                <form role="form" method="post" name="enviacorreoresult" id="enviacorreoresult" action="enviocorreo.php">
                <input type="hidden" name="nombrec" id="nombrec" value=<?php echo $nombre?>></input>

                <input type="hidden" name="imc" id="imc" value=<?php echo $imc?>></input>
                <div style="display:none"><textarea type="hidden" name="menimc" id="menimc"><?php echo $mensaje1?></textarea></div>
                <input type="hidden" name="hidr" id="hidr" value=<?php echo $hidr?>></input>
                
                <input type="hidden" name="prot" id="prot" value=<?php echo $prot ?>></input>
                <div style="display:none"><textarea type="hidden" name="mens" id="mens"><?php echo $men ?></textarea></div>
               
                <div class="form-group has-feedback">
                                  <label for="usuario">Correo cliente</label>
                                  <input type="text" class="form-control" id="correoc" name="correoc" placeholder="" value=<?php echo $correo?> readonly>
                </div>

                

                <div class="row">
                <div class="col-md-6">
                      <!-- Widget: user widget style 1 -->
                      <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-yellow">
                          <div class="widget-user-image">
                            <img class="img-circle" src="img/AdminLTELogo.png" alt="User Avatar">
                          </div>
                          <!-- /.widget-user-image -->
                          <h3 class="widget-user-username"><?php echo $nombre?></h3>
                          <h5 class="widget-user-desc">Cliente</h5>
                        </div>
                        <div class="box-footer no-padding">
                          <ul class="nav nav-stacked">
                            <li><a href="">IMC <span class="pull-right badge bg-blue"><?php echo $imc?></span></a></li>
                            <li><a href="">CALCULO HIDRICO <span class="pull-right badge bg-aqua"><?php echo $hidr." ml"?></span></a></li>
                            <li><a href="">CALCULO PROTEICO<span class="pull-right badge bg-green"><?php echo $prot." g/dia"?></span></a></li>
                  
                          </ul>
                        </div>
                      </div>
                      <!-- /.widget-user -->
                </div>
            </div>

                <div class="row">
                    <div class="col-md-6">
                      <div class="box box-solid">
                        <div class="box-header with-border">
                          <h3 class="box-title">Mensajes de recomendaciones</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <div class="box-group" id="accordion">
                            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                            <div class="panel box box-primary">
                              <div class="box-header with-border">
                                <h4 class="box-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                  Mensaje de recomendacion #1
                                  </a>
                                </h4>
                              </div>
                              <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="box-body">
                                <?php echo $menimc?>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                            <div class="panel box box-primary">
                              <div class="box-header with-border">
                                <h4 class="box-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                  Mensaje de recomendacion #2
                                  </a>
                                </h4>
                              </div>
                              <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="box-body">
                                <?php echo $men?>
                                </div>
                              </div>
                            </div>
                          </div> 
                        </div> 
                      </div>
                    </div>
                </div>   
                <div class="box-footer">
                        <input type="hidden" name="enviacorreoresult" value="">
                        <button type="submit" class="btn btn-primary">Enviar correo</button>
                      </div>

                </form>
      <!-- hola -->
      
    </div>
    </div>
    </section>
    </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <?php
include_once 'tempaltes/footer.php';  

?>




