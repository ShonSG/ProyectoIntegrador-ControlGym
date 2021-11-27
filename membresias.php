<?php
include_once 'funciones/sesiones.php';
include_once 'funciones/funciones.php';
include_once 'tempaltes/header.php';  
include_once 'tempaltes/barra.php';
include_once 'tempaltes/navegacion.php';

?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@400;700;800&display=swap" rel="stylesheet">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Membresías
        <small>DETALLES</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Info</h3>
        </div>
        <div class="box-body">
   
       <?php 
          $conn->set_charset("utf8");
       $sql= "select * from membresias";
       $res=mysqli_query($conn,$sql);
    
       if(mysqli_affected_rows($conn)!=0){
        while($row=mysqli_fetch_row($res)){
        echo "
        <div class='col-lg-3 col-xs-6'>
   
          <div class='small-box bg-yellow bg-yellow1'>
            <div class='inner'>
              <h2 class='font'>".$row[1]."</h2>

              <p s>".$row[2]."</p>
              <h1 style='text-align: center;color:red;'>S/.".$row[3]."</h1>
            </div>
            <div class='icon icon1'>
              <i class='ion ion-person-add'></i>
            </div>
            <a href='#' class='small-box-footer'>
           <i class='fa fa-arrow-circle-right'></i>
            </a>
          </div>
        </div>
        ";
        }
               }?>
                       
       
       
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          info
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
include_once 'tempaltes/footer.php';  

?>




