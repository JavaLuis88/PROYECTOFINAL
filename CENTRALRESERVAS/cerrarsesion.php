<?php
include_once 'libs/controlsesion.php';
unset ($_SESSION['usuario']);
header("Location:index.php");
?>

