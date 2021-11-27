<?php
include_once 'funciones/sesiones.php';
include_once 'tempaltes/header.php';  
include_once 'tempaltes/barra.php';
include_once 'tempaltes/navegacion.php';
include_once 'funciones/funciones.php';
$memid=$_GET['id'];
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Importe los dias a la rutina escogida
        <small>Añada los dias de la rutina</small>
      </h1>
    </section>
      <div class="row" style="display:flex;justify-content: center;align-items: center;">
        <div class="col-md-8" ">
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Importe Archivo Excel</h3>
                <?php echo $memid?>
              </div>
                <div class="box-body" >
                  <!-- form start -->
                  <div class="box-body">
                              <div class="col-10">
                                <input type="file" id="txt_archivo" class="form-control">
                              </div><br>
                              <div class="col-2">
                                <button class="btn btn-danger" style="width:100%" onclick="Cargar_Excel()">Importar Archivo</button>
                              </div>
                              <br>
                              
                            
                              <form role="form" method="POST" name="modrut" id="modrut" action="insertar-admin.php">
                              
                                <div class="col-lg-12" id="div_tabla">

                                    </div>
                                  <div class="form-group has-feedback">
                                    <div class="row">
                                      <div class="col-sm-2" >
                                    
                                        <input type="hidden" class="form-control" id="idrut" name="idrut" value=<?php echo $memid ?> readonly>
                                      </div>
                                    </div>
                                <br>
                                <div class="col-2">
                                  <input type="hidden" name="modrut" value="1">
                                  <button class="btn btn-primary" style="width:100%"  disabled id="btn-registrar">Guardar Datos</button>
                                </div>
                                </div>
                              
                        </div>  
                      </form>         
                                  
                      
                
                        
                        
                                 
                        </div>
                         
                      </div>
                    
                        
                      <!-- /.box-body -->
                     
               
                    <!-- </form> -->
                </div>
                <!-- /.box-body -->

            </div>
              <!-- /.box -->

          </section>
          <!-- /.content -->
        </div>

    <script>
  document.getElementById("txt_archivo").addEventListener("change",()=>{
    var fileName = document.getElementById("txt_archivo").value;
    var idxDot= fileName.lastIndexOf(".")+1;
    var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
   
    if(extFile=="xlsx" || extFile =="xlsb"){
      //TO DO
    }else{
      swal(
                'Error',
                'Solo se aceptan imagenes - usted subio un archivo con extension'+extFile,
                'warning'
              
            )
    }
  });

  function Cargar_Excel(){
    let archivo = document.getElementById("txt_archivo").value;
    if(archivo.length==0){
      return swal(
                'Error',
                'Seleccione un archivo ',
                'error'
            )
    }
    let formData = new FormData();
    let excel = $("#txt_archivo")[0].files[0];
    formData.append('excel',excel);
    $.ajax({
      url:'index.php',
      type: 'POST',
      data: formData,
      contentType: false,
      processData:false,
      success:function(resp){
       $('#div_tabla').html(resp);
       document.getElementById('btn-registrar').disabled=false;
      }
    });
    return false;
    
  }

  // function Registrar_Excel(){
  //   var idrutina = document.getElementById("idrut").value;
  //     var contador=0;
  //     var arreglo_dia1 = new Array();
  //     var arreglo_dia2 = new Array();
  //     var arreglo_dia3 = new Array();
  //     var arreglo_dia4 = new Array();
  //     var arreglo_dia5 = new Array();
  //     $('#tabla_detalle tbody#tbody_tabla_detalle tr').each(function () {
  //       arreglo_dia1.push($(this).find('td').eq(0).text());
  //       arreglo_dia2.push($(this).find('td').eq(1).text());
  //       arreglo_dia3.push($(this).find('td').eq(2).text());
  //       arreglo_dia4.push($(this).find('td').eq(3).text());
  //       arreglo_dia5.push($(this).find('td').eq(4).text());

  //       contador++;
  //     })
  //     if(contador==0){
  //       return Swal.fire("Mensaje de Advertencia","La tabla tiene que tener como minimo 1 dato","warning");
  //     }
  //     // alert(idrutina+"-"+arreglo_dia1+"-"+arreglo_dia2+"-"+arreglo_dia3+"-"+arreglo_dia4+"-"+arreglo_dia5);
      
  //     var dia1 = arreglo_dia1.toString();
  //     var dia2 = arreglo_dia2.toString();
  //     var dia3 = arreglo_dia3.toString();
  //     var dia4 = arreglo_dia4.toString();
  //     var dia5 = arreglo_dia5.toString();
  //     $.ajax({
  //       url: 'controlador_registro.php',
  //       type:'post',
  //       data:{
  //         idrut: idrutina,
  //         dia1: dia1,
  //         dia2: dia2,
  //         dia3: dia3,
  //         dia4: dia4,
  //         dia5: dia5
  //       }
  //     })
  // }
</script>
  <?php
include_once 'tempaltes/footer.php';  

?>





