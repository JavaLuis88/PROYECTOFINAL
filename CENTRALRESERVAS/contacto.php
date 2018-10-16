<?php
$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Reserva Duero, casas y hoteles rurales en Aranda y la Ribera";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Formulario de contacto de Reserva Duero";
$_PARAMETERS['keywords'] = "Contacto, Dudas, Sugerencias, Preguntas";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOARCHIVE, NOODP, NOYDIR";

$_PARAMETERS['clasemenuincio'] = "";
$_PARAMETERS['clasemenureservar'] = "";
$_PARAMETERS['clasemenucontacto'] = "active";
$_PARAMETERS['clasemenudondeestamos'] = "";
$_PARAMETERS['clasemenureservas'] = "";
$_PARAMETERS['clasemenucuenta'] = "";

include_once 'plantilla/publicheader.php';
?>

<section id="seccionpartepublica">
    <article class="container bg-light pt-2 pb-2">

        <header class="text-center">
            <h1>
                <strong>
                    <span class="text-danger">Formulario </span><span class="text-info">de Contacto</span>
                </strong>
            </h1>

        </header>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6  col-xl-5 d-flex justify-content-center">
                <?php
                include_once 'libs/formulariocontacto.php';
                ?>
            </div>        
        </div> 

    </article>


</section>
<?php
include_once 'plantilla/publicfooter.php';
?>
