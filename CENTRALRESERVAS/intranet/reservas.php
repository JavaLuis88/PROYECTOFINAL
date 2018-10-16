<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Reserva Duero, casas y hoteles rurales en Aranda y la Ribera";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Zona privada de usuario Reserva Duero";
$_PARAMETERS['keywords'] = "Usuarios, Zona Privada";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";

$_PARAMETERS['clasemenuincio'] = "";
$_PARAMETERS['clasemenureservar'] = "";
$_PARAMETERS['clasemenucontacto'] = "";
$_PARAMETERS['clasemenudondeestamos'] = "";
$_PARAMETERS['clasemenureservas'] = "active";
$_PARAMETERS['clasemenucuenta'] = "";

include_once '../plantilla/intranetheader.php';
?>
<section id="seccionpartepublica">
    <article>
        <div id="alerta" class="container theme-showcase  coloresprimarios text-white pb-2 pt-2 mt-2 d-none">
            <div id="mensajealerta" class="jumbotron-fluid">

                <h1 class="text-center">Operación realizada con éxito</h1>

            </div>
        </div>
    </article>
    
    
     <article id="listareservas">
        <header>
            <h1 class="text-center">Listado de reservas</h1>
        </header>
         <article id="listareservas2">
             
             
             
         </article>
         
         
     </article>
    
    
</section>





<?php

include_once '../plantilla/intranetfooter.php';
?>
   