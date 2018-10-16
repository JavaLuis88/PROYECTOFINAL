<?php

session_start();
$url = "";
$ruta = "";
$url = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$ruta = parse_url($url, PHP_URL_PATH);
$ruta = substr($ruta, strpos($ruta, "/",1));
//print($ruta);

if (($ruta == "/registarse.php" || $ruta == "/identificarse.php") && isset($_SESSION['usuario']) === TRUE) {
    header("Location:index.php");
    exit(0);
}
else if (($ruta == "/reservarcasa.php") && isset($_SESSION['usuario']) === FALSE) {
    header("Location:index.php");
    exit(0);
}
else if (($ruta == "/intranet/reservas.php") && isset($_SESSION['usuario']) === FALSE) {
    header("Location:../index.php");
    exit(0);
}    
else if (($ruta == "/intranet/cuenta.php") && isset($_SESSION['usuario']) === FALSE) {
    header("Location:../index.php");
    exit(0);
}    
?>