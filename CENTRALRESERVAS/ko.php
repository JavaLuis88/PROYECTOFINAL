<?php
$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Reserva Duero, Error en el pago";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Error en el pago de la transacción de Reserva Duero";
$_PARAMETERS['keywords'] = "Error, Pago";
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
<article class = "jumbotron jumbotron-fluid coloresprimarios mt-2 text-white">
    <header class = "text-center">
        <h1>
            <strong class = "bold">
                Error en pago
            </strong>
        </h1>
    </header>
    <p class = "text-center">

        Se ha producido un error en el pago
    </p>

</article>

<?php
include_once 'plantilla/publicfooter.php';
?>
   