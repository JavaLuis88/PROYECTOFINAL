<?php
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
header("Content-type:text/json; charset=utf-8");
$directorioraiz=dirname(__FILE__,2);
include_once 'controlsesion.php';
include_once "$directorioraiz/config/config.php";
include_once 'logica.php';
include_once 'ClearData.php';


$retval=NULL;


 if (isset($_SESSION['usuario'])) {
$retval=mostrarreservasusuario($_SESSION['usuario']);
 }

print(json_encode($retval));
//print($retval);




?>