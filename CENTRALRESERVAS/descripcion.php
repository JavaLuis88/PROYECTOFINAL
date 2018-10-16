<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "ReservaDuero-Reservar casa Rural";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Descripción de la casa rural seleccionada en Reserva Duero";
$_PARAMETERS['keywords'] = "Descricpión Casa, Información, Precio, Calendario";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOARCHIVE, NOODP, NOYDIR";

$_PARAMETERS['clasemenuincio'] = "";
$_PARAMETERS['clasemenureservar'] = "active";
$_PARAMETERS['clasemenucontacto'] = "";
$_PARAMETERS['clasemenudondeestamos'] = "";
$_PARAMETERS['clasemenureservas'] = "";
$_PARAMETERS['clasemenucuenta'] = "";
include_once 'plantilla/publicheader.php';
?>



<section id="seccionpartepublica">
    
    <?php
    
    include_once 'libs/descripcioncasa.php';
    
    ?>
    
 

</section>


<?php
include_once 'plantilla/publicfooter.php';
?>
   