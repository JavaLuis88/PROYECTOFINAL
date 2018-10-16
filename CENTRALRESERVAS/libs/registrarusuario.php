<?php
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
header("Content-type:text/json; charset=utf-8\n\n");
$directorioraiz = dirname(__FILE__, 2);
include_once 'controlsesion.php';
include_once "$directorioraiz/config/config.php";
include_once 'logica.php';
include_once 'ClearData.php';


$cadenafechaentrada = NULL;
$cadenafechasalida = NULL;
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



if ($cadenafechaentrada == NULL) {

    $retval = "Datos no validos";
} else if (ClearData::clearInput($cadenafechaentrada->nombre) != $cadenafechaentrada->nombre) {

    $retval = "Nombre no es válido";
} else if (ClearData::clearInput($cadenafechaentrada->apellidos) != $cadenafechaentrada->apellidos) {

    $retval = "Apellido no es válido";
} else if (ClearData::clearInput($cadenafechaentrada->telefono) != $cadenafechaentrada->telefono) {

    $retval = "Teléfono no válido";
} else if (ClearData::clearInput($cadenafechaentrada->correo) != $cadenafechaentrada->correo || filter_var($cadenafechaentrada->correo, FILTER_VALIDATE_EMAIL) === FALSE) {
    $retval = "Correo Electrónico no es válido";
} else if (ClearData::clearInput($cadenafechaentrada->contrasena) != $cadenafechaentrada->contrasena) {
    $retval = "Contraseña no es válida";
} else if (ClearData::clearInput($cadenafechaentrada->dni) != $cadenafechaentrada->dni) {
    $retval = "DNI no es válido";
} else if (ClearData::clearInput($cadenafechaentrada->direccion) != $cadenafechaentrada->direccion) {
    $retval = "Dirección no es válida";
} else {
    $retval = registrarusuario($cadenafechaentrada->nombre, $cadenafechaentrada->apellidos, $cadenafechaentrada->telefono, $cadenafechaentrada->correo, $cadenafechaentrada->contrasena, $cadenafechaentrada->dni, $cadenafechaentrada->direccion);
}





print(json_encode($retval));
?>