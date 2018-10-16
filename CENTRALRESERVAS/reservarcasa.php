<?php
$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Reserva Duero, casas y hoteles rurales en Aranda y la Ribera";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Página de finalización de reserva en Reserva Duero";
$_PARAMETERS['keywords'] = "Reserva, Pago Electrónico, Confirmación";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOARCHIVE, NOODP, NOYDIR";

$_PARAMETERS['clasemenuincio'] = "active";
$_PARAMETERS['clasemenureservar'] = "";
$_PARAMETERS['clasemenucontacto'] = "";
$_PARAMETERS['clasemenudondeestamos'] = "";
$_PARAMETERS['clasemenureservas'] = "";
$_PARAMETERS['clasemenucuenta'] = "";
include_once 'plantilla/publicheader.php';
?>

<section id="seccionpartepublica">
    <article class="container-fluid ">

        <header class="text-center">


        </header>
        <?php
        include_once 'libs/reservarcasaruralscript.php';
        ?>

    </article>
    <?php
    include_once 'plantilla/publicfooter.php';
    ?>
</section>