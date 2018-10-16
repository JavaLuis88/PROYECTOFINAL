<?php
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
header("Content-type:text/json; charset=utf-8\n\n");
$directorioraiz=dirname(__FILE__,2);
include_once "$directorioraiz/config/config.php";
include_once 'logica.php';
include_once 'ClearData.php';


$cadenafechaentrada = "";
$cadenafechasalida = "";
$fechaentrada = NULL;
$fechasalida = NULL;
$retval = NULL;





if (DEPURACION == TRUE) {

    if (isset($_GET["fechaentrada"]) && isset($_GET["fechasalida"])) {

        $cadenafechaentrada = $_GET["fechaentrada"];
        $cadenafechasalida = $_GET["fechasalida"];
    }
} else {
    if (isset($_POST["fechaentrada"]) && isset($_POST["fechasalida"])) {

        $cadenafechaentrada = $_POST["fechaentrada"];
        $cadenafechasalida = $_POST["fechasalida"];
    }
}
$cadenafechaentrada = ClearData::clearInput($cadenafechaentrada);
$cadenafechasalida = ClearData::clearInput($cadenafechasalida);

$fechaentrada = new \DateTime($cadenafechaentrada);
$fechasalida = new \DateTime($cadenafechasalida);

$retval = obtenerrecintossinreservar($fechaentrada, $fechasalida);
print(json_encode($retval));
?>