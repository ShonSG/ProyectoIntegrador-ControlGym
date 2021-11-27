$(document).ready(function () {
    $('.sidebar-menu').tree()
    
    $('#registros').DataTable({
      'paging'      : true,
      'pagelength'  : 10,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'language'   :{
paginate:{
  next:'Siguiente',
  previous:'Anterior',
  last: 'Ultimo',
  first: 'Primero',
 
},
info: 'Mostrando _START_ a _END_ de _TOTAL_ resutlados',
search: 'Buscar'
      }
    
  })
  $('#registros1').DataTable({
    'paging'      : true,
    'pagelength'  : 10,
    'lengthChange': false,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false,
    'language'   :{
paginate:{
next:'Siguiente',
previous:'Anterior',
last: 'Ultimo',
first: 'Primero',

},
info: 'Mostrando _START_ a _END_ de _TOTAL_ resutlados',
search: 'Buscar'
    }
  
})


  $.getJSON('servicio-donut.php',function(data){
    // console.log(JSON.stringify(data));
  var donut = new Morris.Donut({
    element: 'sales-chart',
    resize: true,
    colors: ["#3c8dbc", "#f56954", "#00a65a","#F58135","#718179","#A9C271"],
    data:data,

    hideHover: 'auto'
  })
});
  // LINE CHART
//  $.getJSON('servicio-graficas.php',function(data){
// console.log(data);

//   var line = new Morris.Line({
//     element: 'line-chart',
//     resize: true,
//     data: data,
//     xkey: 'fecha',
//     ykeys: ['cantidad'],
//     labels: ['Item 1'],
//     lineColors: ['#3c8dbc'],
//     hideHover: 'auto'
//   });
// });

// $.getJSON('servicio-barra.php',function(data){
//   console.log(data);
//   var bar = new Morris.Bar({
//       element: 'bar-chart',
//       resize: true,
//       data: data,
//       barColors: ['#f56954'],
//       xkey: 'nommemb',
//       ykeys: ['cantidad'],
//       labels: ['Monto S/.'],
//       hideHover: 'auto'
//     });

// })

    //BAR CHART

    // var bar = new Morris.Bar({
    //   element: 'bar-chart',
    //   resize: true,
    //   data: [
    //     {y: '2006', a: 100, b: 90},
    //     {y: '2007', a: 75, b: 65},
    //     {y: '2008', a: 50, b: 40},
    //     {y: '2009', a: 75, b: 65},
    //     {y: '2010', a: 50, b: 40},
    //     {y: '2011', a: 75, b: 65},
    //     {y: '2012', a: 100, b: 90}
    //   ],
    //   barColors: ['#00a65a', '#f56954'],
    //   xkey: 'y',
    //   ykeys: ['a', 'b'],
    //   labels: ['CPU', 'DISK'],
    //   hideHover: 'auto'
    // });
  })



  // SELECT id_plan_cliente,nommemb,fecha_inicio,COUNT(*),SUM(precio) from plan_cliente p,membresias m WHERE p.id_plan=m.idmemb GROUP BY id_plan_cliente,nommemb,fecha_inicio