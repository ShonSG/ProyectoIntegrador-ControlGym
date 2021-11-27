<?php
include_once 'funciones/sesiones.php';
include_once 'funciones/funciones.php';
include_once 'tempaltes/header.php';  
include_once 'tempaltes/barra.php';
include_once 'tempaltes/navegacion.php';
date_default_timezone_set('America/Lima');
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="display:grid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Panel de Control
        <small>Graficas y Tarjetas sobre el estado del GYM</small>
        </h1>
      <!-- <p><?php echo $_SESSION['codigo']?></p> -->
    </section>

    <!-- Main content -->
    <section class="content"> 
    <div class="row">
<div class="cont-reloj">
        <div class="reloj" id="reloj"></div>
        <div class="datos">
            <span id="fec_Datos"></span>
        </div>
    </div>
</div>  

      <div class="row">
    <div class="col-lg-3 col-xs-6">
      <?php
      $sql="SELECT COUNT(`dnic`) as result from cliente where estado=1";
      $resultado = $conn->query($sql);
      $registrados = $resultado->fetch_assoc();
      ?>
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $registrados['result'];?></h3>

              <p>Total Clientes</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
        <?php
      $sql="SELECT TRUNCATE(SUM(`precio`),2) as result from plan_cliente p,membresias m WHERE p.id_plan=m.idmemb";
      $resultado = $conn->query($sql);
      $registrados = $resultado->fetch_assoc();
      ?>

          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><sup style="font-size: 20px">S/.</sup><?php echo $registrados['result'];?></h3>

              <p>Ganancias totales</p>
            </div>
            <div class="icon">
              <i class="fa fa-usd"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
        <?php
      $sql="SELECT COUNT(`id_plan`) as result from plan_cliente;";
      $resultado = $conn->query($sql);
      $registrados = $resultado->fetch_assoc();
      ?>
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $registrados['result'];?></h3>

              <p>MembresiasVendidas</p>
            </div>
            <div class="icon">
              <i class="fa fa-address-book-o"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
        <?php
      $sql="SELECT COUNT(`dni`) as result from instructor where estado=1;";
      $resultado = $conn->query($sql);
      $registrados = $resultado->fetch_assoc();
      ?>
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $registrados['result'];?></h3>

              <p>Total Instructores</p>
            </div>
            <div class="icon">
              <i class="fa fa-male"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

</div>


      <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Flujo de ingresos</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
              <div class="box-body">
                <div class="chart">
                  <canvas id="lineChart1" style="height:300px"></canvas>
                </div>
              </div>
        
          </div>
      </div>

      <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Membresias vendidas en soles</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:300px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
      </div>

      <div class="col-md-9" style="margin-left:12%">
      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Membresias vendidas por tipo</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
    </section>
    <!-- /.content -->
 
</div> <!-- /.content-wrapper -->
  <?php
include_once 'tempaltes/footer.php';  

?>


<script>
   let mostrarReloj=()=>{
        let reloj=document.getElementById('reloj')
        let fec_Datos=document.getElementById('fec_Datos')
        let fecha =new Date();
        let hora=fecha.getHours()
        let minutos=fecha.getMinutes()
        let segundos=fecha.getSeconds()
        let mes=fecha.getMonth()-1
        let dia=fecha.getDate()
        let año=fecha.getFullYear()

        let dias=['lunes','martes','miercoles','jueves','viernes','sabado','domingo']
        let meses=['enero','febrero','marzo','abril','mayo','junnio','julio','agosto','septiembre','noviembre','diciembre']

        mes=meses[mes]
        let hr=(hora>12) ? hora-12 : hora
        let am=(hora<12)? 'AM' :'PM'
        if(hora<10){hora='0'+hora}
        // if(minutos<10){minutos='0'+ minutos}
        // if(segundos<10){segundos='0'+minutos}

        reloj.textContent=`${hr}:${minutos}:${segundos}:${am}`
        fec_Datos.textContent=`${dia} ${mes} del ${año}`
       }
    
       setInterval(mostrarReloj,1000)
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    // var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // // This will get the first returned node in the jQuery collection.
    // var areaChart       = new Chart()
    
    $.getJSON('servicio-graficas.php',function(data){
      // console.log(data['cantidad'][1]);
    // var d = JSON.stringify(data);
    // console.log(d);
      var fechas = [];
      var cant = [];
      for(let index=0; index<data.length;index++){
        fechas.push(data[index]['fecha']);
        cant.push(data[index]['cantidad']);
      }
      // console.log(fechas);
      // console.log(cant);

    var lineChartCanvas          = $('#lineChart1').get(0).getContext('2d')
    var lineChart                = new Chart(lineChartCanvas)
   
    var areaChartData = {
   
      labels  : fechas,
      datasets: [
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : cant
          
        },
        // {
        //   label               : 'Digital Goods',
        //   fillColor           : 'rgba(60,141,188,0.9)',
        //   strokeColor         : 'rgba(60,141,188,0.8)',
        //   pointColor          : '#3b8bba',
        //   pointStrokeColor    : 'rgba(60,141,188,1)',
        //   pointHighlightFill  : '#fff',
        //   pointHighlightStroke: 'rgba(60,141,188,1)',
        //   data                : [28, 48, 19, 86]
        // }
      ]
        
    
  }
    
    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

  
    var lineChartOptions         = areaChartOptions
    lineChartOptions.datasetFill = false
    lineChart.Line(areaChartData, lineChartOptions)
  

  })
  $.getJSON('servicio-barra.php',function(data){
    var fechas1 = [];
      var cant1 = [];
      for(let index=0; index<data.length;index++){
        fechas1.push(data[index]['nommemb']);
        cant1.push(data[index]['cantidad']);
      }
      // console.log(fechas1);
      // console.log(cant1);
      var areaChartData1 = {
   
   labels  : fechas1,
   datasets: [
     {
       label               : 'Electronics nnnnn',
       fillColor           : 'rgba(210, 214, 222, 1)',
       strokeColor         : 'rgba(210, 214, 222, 1)',
       pointColor          : 'rgba(210, 214, 222, 1)',
       pointStrokeColor    : '#c1c7d1',
       pointHighlightFill  : '#fff',
       pointHighlightStroke: 'rgba(220,220,220,1)',
       data                : cant1
       
     } ]
 
}

  var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData1
    barChartData.datasets[0].fillColor   = '#00a65a'
    barChartData.datasets[0].strokeColor = '#00a65a'
    barChartData.datasets[0].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
  })
})
</script>



     <!-- Default box -->
      <!-- <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Control Bio Gym</h3>
        </div>
        <div class="box-body">
             

        </div> -->
        
        <!-- /.box-body -->
        <!-- <div class="box-footer">
       
        </div> -->
        <!-- /.box-footer-->
      <!-- </div> -->
      <!-- /.box -->




