<?php
$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Reserva Duero, casas y hoteles rurales en Aranda y la Ribera";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "formulario de registro de Reserva Duero";
$_PARAMETERS['keywords'] = "Usuario, Registro, Alta";
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
            <h2>
                Registrar usuario
            </h2>

        </header>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6  col-xl-5 d-flex justify-content-center">
                <?php
                include_once 'libs/formularioregistro.php';
                ?>
            </div>        
        </div> 

    </article>
    
</section>

<?php
    include_once 'plantilla/publicfooter.php';
    ?>