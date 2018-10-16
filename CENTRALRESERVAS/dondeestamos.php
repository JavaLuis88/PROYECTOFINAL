<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Reserva Duero, casas y hoteles rurales en Aranda y la Ribera";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Ubicación y contacto de Reserva Duero";
$_PARAMETERS['keywords'] = "Localización, Como llegar, Donde estamos";
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
    <article class="container bg-light pb-3">
        <header>
            <h1>               
                <strong>
                    <span class="text-danger">Donde</span><span class="text-info"> Estamos</span>
                </strong>
            </h1>                  
        </header>
        Puedes localizarnos en la siguiente dirección: calle Montelatorre 11, CP: 09400, Aranda de Duero (Burgos). <br>
        También puedes contactar con nosotros telefónicamente en el número: 947XXXXXX o rellenando el formulario de <a href="contacto.php">contacto</a>.
        <article class="mapa mt-2 bg-light"  id="map"></article>
    </article>


</section>


<?php

include_once 'plantilla/publicfooter.php';
?>
   