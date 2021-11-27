<?php
session_start();
$cerrar_sesion = (isset($_GET['cerrar_sesion']));

if($cerrar_sesion){
  session_destroy();
}
include_once 'tempaltes/header.php';  
include_once 'funciones/funciones.php';
?>


<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="../index.php"><b>Control</b>BioGym</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar sesión aqui</p>
    <!-- <?php
  //   session_start();
  //  echo "<pre>";
  //  var_dump($_SESSION);
  //  echo "</pre>";
    ?> -->

    <form name="login-admin-form" id="login-admin" method="post" action="insertar-admin.php">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback frm-control"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback frm-control"></span>
      </div>
      <div class="row">
        <div class="col-xs-12" text-center>
          <input type="hidden" name="login-admin" value="1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

  <?php
include_once 'tempaltes/footer.php';  

?>




