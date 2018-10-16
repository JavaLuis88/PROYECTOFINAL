<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Reserva Duero, casas y hoteles rurales en Aranda y la Ribera";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Mapa del sitio de Reserva Duero";
$_PARAMETERS['keywords'] = "Mapa, Sitio, Contenido";
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

    <article class="container mt-4 mb-4 bg-light pb-2 pt-2">
        <header class="text-center">
            <h1>
                <strong>
                    <span class="text-danger">Mapa </span><span class="text-info">de la Web</span>
                </strong>
            </h1>

        </header>
    </article>
    <article class="row d-flex justify-content-center pb-2 pt-2">  
        <div class="col-6 col-sm-2 col-md-2 col-lg-2  col-xl-2 d-flex justify-content-center bg-light pt-2 pb-2">
            <a href="index.php" class="enlacesmapa">Inicio</a>
        </div>
        <div class="col-6 col-sm-2 col-md-2 col-lg-2  col-xl-2 d-flex justify-content-center bg-light pt-2 pb-2">
            <a href="reservar.php" class="enlacesmapa">Reservar</a>
        </div>
        <div class="col-6 col-sm-2 col-md-2 col-lg-2  col-xl-2 d-flex justify-content-center bg-light pt-2 pb-2">
            <a href="contacto.php" class="bold enlacesmapa">Contacto</a>
        </div>
        <div class="col-6 col-sm-4 col-md-4 col-lg-3  col-xl-3 d-flex justify-content-center bg-light pt-2 pb-2">
            <a href="dondeestamos.php" class="bold enlacesmapa">Donde Estamos</a>
        </div>


    </article>

</section>


<?php

include_once 'plantilla/publicfooter.php';
?>
   