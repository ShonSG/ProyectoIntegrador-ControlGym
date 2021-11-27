<?php
include_once 'funciones/sesiones.php';
include_once 'funciones/funciones.php';
include_once 'tempaltes/header.php';  
include_once 'tempaltes/barra.php';
include_once 'tempaltes/navegacion.php';
date_default_timezone_set('America/Lima');
?>
<div class="row">
<div class="cont-reloj">
        <div class="reloj" id="reloj"></div>
        <div class="datos">
            <span id="fec_Datos"></span>
        </div>
    </div>
</div>    
<script>
    let mostrarReloj=()=>{
        let reloj=document.getElementById('reloj')
        let fec_Datos=document.getElementById('fec_Datos')
        let fecha =new Date();
        let hora=fecha.getHours()
        let minutos=fecha.getMinutes()
        let segundos=fecha.getSeconds()
        let mes=fecha.getMonth()
        let dia=fecha.getDate()
        let año=fecha.getFullYear()

        let dias=['lunes','martes','miercoles','jueves','viernes','sabado','domingo']
        let meses=['enero','febrero','marzo','abril','mayo','junnio','julio','agosto','septiembre','noviembre','diciembre']

        mes=meses[mes]
        let hr=(hora>12) ? hora-12 : hora
        let am=(hora<12)? 'AM' :'PM'
        if(hora<10){hora='0'+hora}
        if(minutos<10){minutos='0'+ minutos}
        if(segundos<10){segundos='0'+minutos}

        reloj.textContent=`${hr}:${minutos}:${segundos}:${am}`
        fec_Datos.textContent=`${dia} ${mes} del ${año}`
       }
    
       setInterval(mostrarReloj,1000)
</script>