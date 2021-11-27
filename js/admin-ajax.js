$(document).ready(function(){
$('#crear-admin').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        datatype:'json',
        success: function(data){
            var resultado =data;
        if(resultado.respuesta =='exito'){
            swal(
                'Correcto',
                'El administrador se creo correctamente',
                'success'
            )
            
        }else{
            swal(
                'Error',
                'Something went wrong',
                'error'
            )
        }    
        }
    })
});
$('#login-admin').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
            // var resultado = JSON.parse(data);
           console.log(data);
           var resultado=data;
         
           if(resultado.respuesta =='exitoso'){
            swal(
                'Login Correcto',
                'Bienvenid@ '+resultado.usuario+'!!',
                'success'
            )
            setTimeout(function(){
            window.location.href = 'admin-area.php';
            },2000)
        
        } else if(resultado.respuesta =='no existe'){
            swal(
                'Error',
                'Ingrese Usuario y password',
                'error'
            )}else{
            swal(
                'Error',
                'Usuario y/o password no validos',
                'error'
            )
        }  
        }
    })
});
$('#crear-instructor').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
            // var resultado = JSON.parse(data);
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Insertado Correctamente',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'add-insyrut1.php';
                },2000)
        }else if (resultado.respuesta == 'completa'){
            swal(
                'Error',
                'Completa algunos datos incompletos',
                'error'
            )
            setTimeout(function(){
                window.location.href = 'crear-instructor.php';
                },1000)
        }else{
            swal(
                'Error',
                'Datos incompletos',
                'error'
            )
        }  
        }
    })
});

$('.btn-popup').click(function () {
    var custId = $(this).data('id');
    $.ajax({
      url: 'get_data.php',
      type: 'post',
      data: { custId: custId },
      success: function (response) {
        $('.modal-body').html(response);
        $('#custModal').modal('show');
      }
    });
  });

  $('.btn-popup1').click(function () {
    var custId = $(this).data('id');
    $.ajax({
      url: 'get_data1.php',
      type: 'post',
      data: { custId: custId },
      success: function (response) {
        $('.modal-body1').html(response);
        $('#custModal1').modal('show');
      }
    });
  });


  $('.btn-popup2').click(function () {
    var custId = $(this).data('id');
    $.ajax({
      url: 'get_data2.php',
      type: 'post',
      data: { custId: custId },
      success: function (response) {
        $('.modal-body2').html(response);
        $('#custModal2').modal('show');
      }
    });
  });
  
  $('.btn-popup3').click(function () {
    var custId = $(this).data('id');
    $.ajax({
      url: 'get_data3.php',
      type: 'post',
      data: { custId: custId },
      success: function (response) {
        $('.modal-body3').html(response);
        $('#custModal3').modal('show');
      }
    });
  });
  $('.btn-popup4').click(function () {
    var custId = $(this).data('id');
    $.ajax({
      url: 'get_data4.php',
      type: 'post',
      data: { custId: custId },
      success: function (response) {
        $('.modal-body4').html(response);
        $('#custModal4').modal('show');
      }
    });
  });

  $('.btn-popupah').click(function () {
    var custId = $(this).data('id');
    $.ajax({
      url: 'get_data5.php',
      type: 'post',
      data: { custId: custId },
      success: function (response) {
        $('.modal-bodyah').html(response);
        $('#custModalah').modal('show');
      }
    });
  });

  $('.btn-popupvh').click(function () {
    var custId = $(this).data('id');
    $.ajax({
      url: 'get_data6.php',
      type: 'post',
      data: { custId: custId },
      success: function (response) {
        $('.modal-bodyvh').html(response);
        $('#custModalvh').modal('show');
      }
    });
  });
//boton horario crear
// $('.btn-popuph').click(function () {
  
//     $.ajax({
//       url: 'getdatahorario.php',
//       type: 'post',
      
//       success: function (response) {
//         $('.modal-bodyh').html(response);
//         $('#custModalh').modal('show');
//       }
//     });
//   });
//Eliminar un registro
$('.borrar-registro').on('click',function(e){
    e.preventDefault();
    var id= $(this).attr('data-id');
    var tipo= $(this).attr('data-tipo');
    // console.log("ID:"+id);
    swal({
        title: '¿Estas seguro?',
        text: "Un registro de la tabla se va a inhabilitar!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Inhabilitar!',
        cancelButtonText:'Cancelar'
      }).then((result)=>{
          if(result.value){
                $.ajax({
                type:'post',
                data:{
                    'id':id,
                    'registro':'eliminar'
                },
                url : 'insertar-'+tipo+'.php',
                success:function(data){
                    var resultado=JSON.parse(data);
                    if(resultado.respuesta=='exitoso'){
                        swal(
                            'Correcto',
                            'Cliente dado de baja.',
                            'success'
                          )
                        jQuery('[data-id="'+resultado.id_eliminado+'"]').parents('tr').remove();

                    }
                }
            });
            }else{
                swal(
                    'Operacion cancelada!',
                    'NO se pudo inhabilitar',
                    'error'
                )
            }
        })
               
})
//Eliminar un registro
$('.borrar-registros').on('click',function(e){
    e.preventDefault();
    var id= $(this).attr('data-id');
    var tipo= $(this).attr('data-tipo');
    // console.log("ID:"+id);
    swal({
        title: '¿Estas seguro?',
        text: "Un registro de la tabla se va a inhabilitar!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Inhabilitar!',
        cancelButtonText:'Cancelar'
      }).then((result)=>{
          if(result.value){
                $.ajax({
                type:'post',
                data:{
                    'id':id,
                    'registros':'eliminado'
                },
                url : 'insertar-'+tipo+'1.php',
                success:function(data){
                    var resultado=JSON.parse(data);
                    if(resultado.respuesta=='exitoso'){
                        swal(
                            'Inhabilitado!',
                            'Instructor dado de baja.',
                            'success'
                          )
                        jQuery('[data-id="'+resultado.id_eliminar+'"]').parents('tr').remove();

                    }
                }
            });
            }else{
                swal(
                    'Operacion cancelada!',
                    'NO se pudo inhabilitar',
                    'error'
                )
            }
        })
               
})
      
    
  $('#agregar-inst-hor-rut').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
            // var resultado = JSON.parse(data);
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Insertado Correctamente',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'listar-horario.php';
                },2000)
        }else{
            swal(
                'Error',
                'Datos incompletos',
                'error'
            )
        }  
        }
    })
});

$('#agregar-inst-hor-rut1').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
            // var resultado = JSON.parse(data);
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Insertado Correctamente',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'listar-horario.php';
                },2000)
        }else{
            swal(
                'Error',
                'Datos incompletos',
                'error'
            )
        }  
        }
    })
});

$('#crear-cliente').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
            // var resultado = JSON.parse(data);
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Insertado Correctamente',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'add-cliamemb.php';
                },2000)
        }else{
            swal(
                'Error',
                'Datos incompletos',
                'error'
            )
        }  
        }
    })
});
//CLIENTE A HORARIO
$('#insert-clienteah').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
            // var resultado = JSON.parse(data);
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Insertado Correctamente',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'horarioxc.php';
                },2000)
        }else{
            swal(
                'Error',
                'Datos incompletos',
                'error'
            )
        }  
        }
    })
});

$('#agregar-cli-memb').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
    
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Insertado Correctamente',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'generar_carnet_plan.php';
                },2000)
        }else{
            swal(
                'Error',
                'Datos incompletos',
                'error'
            )
        }  
        }
    })
});

$('#regrut').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
    
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Correo Enviado',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'listar-rutinaincom.php';
                },2000)
        }else{
            swal(
                'Error',
                'Datos incompletos',
                'error'
            )
        }  
        }
    })
});
$('#modrut').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
            // var resultado = JSON.parse(data);
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Insertado Correctamente',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'listar-rutina.php';
                },2000)
        }else{
            swal(
                'Error',
                'Datos incompletos',
                'error'
            )
        }  
        }
    })
});
$('#editar-cliente').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
            // var resultado = JSON.parse(data);
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Actualizado Correctamente',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'listar-cliente.php';
                },2000)
        }else{
            swal(
                'Error',
                'Datos incompletos',
                'error'
            )
        }  
        }
    })
});
$('#editar-instructor').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
            // var resultado = JSON.parse(data);
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Actualizado Correctamente',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'listar-instructor.php';
                },2000)
        }else{
            swal(
                'Error',
                'Datos incompletos',
                'error'
            )
        }  
        }
    })
});

$('#crear-horario').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
            // var resultado = JSON.parse(data);
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Insertado Correctamente',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'add-insyrut.php';
                },2000)
        }else if(resultado.respuesta == 'fechamenor'){
            swal(
                'Error',
                'Fecha debe ser mayor al dia de hoy',                
                'error'
            )

        }else{
            swal(
                'Error',
                'Datos incompletos',
                'error'
            )
        }  
        }
    })
});

$('#enviacorreoresult').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
    
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Correo Enviado',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'consultar-cliente.php';
                },2000)
        }else{
            swal(
                'Error',
                'Datos incompletos',
                'error'
            )
        }  
        }
    })
});

$('#consultac').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
            // var resultado = JSON.parse(data);
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Cliente existe',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'calculos.php';
                },2000)
        }else{
            swal(
                'Error',
                'Cliente no existe',
                'error'
            )
        }  
        }
    })

})
$('#crear-calculos').on('submit',function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data:datos,
        url: $(this).attr('action'),
        dataType:'json',
        success: function(data){
            // var resultado = JSON.parse(data);
           console.log(data);
           var resultado=data;
           if(resultado.respuesta =='exitoso'){
            swal(
                'Correcto',
                'Insertado correctamente',                
                'success'
            )
            setTimeout(function(){
                window.location.href = 'correomodelo.php';
                },2000)
        }else{
            swal(
                'Error',
                'No se pudo realizar la operacion',
                'error'
            )
        }  
        }
    })
});


});//




// $('#btn-abrir-popup').on('submit',function(){

// console.log(btnAbrirPopup.value());
// })
// });







//     var nombre = document.getElementById('nombre').val;
//     var usuario = document.getElementById('usuario').val;
//     var password = document.getElementById('password').val;
//     if(nombre === undefined || usuario===undefined || password===undefined) {
//         swal(
//             'Error',
//             'Datos incompletos',
//             'error'
//         )
//      return;
     
//     }

//   e.preventDefault()