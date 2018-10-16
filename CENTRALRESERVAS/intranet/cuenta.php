<?php
$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Reserva Duero, Cuenta de usuario";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Página de edición de cuentas";
$_PARAMETERS['keywords'] = "Cuenta de usuario, edición de datos";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";

$_PARAMETERS['clasemenuincio'] = "";
$_PARAMETERS['clasemenureservar'] = "";
$_PARAMETERS['clasemenucontacto'] = "";
$_PARAMETERS['clasemenudondeestamos'] = "";
$_PARAMETERS['clasemenureservas'] = "";
$_PARAMETERS['clasemenucuenta'] = "active";

include_once '../plantilla/intranetheader.php';
?>

<section id="seccionpartepublica">

    <?php
    include_once '../libs/edicioncuenta.php';
    ?>
</section>

<?php
include_once '../plantilla/intranetfooter.php';
?>









