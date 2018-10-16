<?php
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
header("Content-type:text/json; charset=utf-8");
$directorioraiz=dirname(__FILE__,2);



include_once 'controlsesion.php';
include_once "$directorioraiz/config/config.php";
include_once 'logica.php';
include_once 'ClearData.php';

$retval = FALSE;


if (isset($_SESSION['usuario'])) {


    if (DEPURACION == TRUE) {

        if (isset($_GET["idreserva"])) {

            $idreserva = $_GET["idreserva"];
        }
    } else {
        if (isset($_POST["idreserva"])) {

            $idreserva = $_POST["idreserva"];
        }
    }
    
    $retval=borrarreserva($idreserva);
}


print(json_encode($retval));
?>