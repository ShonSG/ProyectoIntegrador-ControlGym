<?php
class Modelo_Excel{
    private $conexion;
    function __construct(){
        require_once 'funciones/funciones1.php';
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    function Registrar_Excel(){


    }
}

?>