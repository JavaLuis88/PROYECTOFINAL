<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "ReservaDuero-Reservar casa Rural";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Selección de fechas de reserva de casas rurales en Reserva Duero";
$_PARAMETERS['keywords'] = "Fechas, Calendario, Reserva, Ofertas";
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
    <article class="container-fluid">

        <header class="container text-center bg-light pt-2 pb-2">
            <h1>               
                <strong>
                    <span class="text-danger">Reservar</span><span class="text-info"> Casas Rurales</span>
                </strong>
            </h1>                  
        </header>

        <div class="row pt-2">

            <div class="offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-1 col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2">
                <div id="mensajesformularioreservas">
                </div>





                <form action="reservar.php" method="POST" name="formularioreservas" id="formularioreservas" class="">

                    <div class="form-group">
                        <label  for="fechaentrada">Fecha de entrada</label>
                        <input name="fechaentrada" id="fechaentrada" type="date" class="form-control"  required>
                    </div>

                    <div class="form-group">
                        <label  for="fechasalida">Fecha de Salida</label>
                        <input name="fechasalida" id="fechasalida" type="date" class="form-control" required>
                    </div>
                    <button name="mostrarofertas" id="mostrarofertas" type="submit" class="btn btn-primary">Mostrar</button>



                </form>



            </div>
            <div class="col-12 col-sm-12 col-md-9 col-lg-8 col-xl-8" id="resultados">

            </div>

        </div>









    </article>





</section>


<?php

include_once 'plantilla/publicfooter.php';
?>
   