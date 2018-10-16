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

    if (isset($_GET["datos"])) {

        $cadenafechaentrada = json_decode($_GET["datos"]);
    }
} else {
    if (isset($_POST["datos"])) {
        $cadenafechaentrada = json_decode($_POST["datos"]);
    }
}

$retval = obtenerdatosdiasecinto($cadenafechaentrada->month, $cadenafechaentrada->year, $cadenafechaentrada->idrecinto);


print(json_encode($retval));
?>