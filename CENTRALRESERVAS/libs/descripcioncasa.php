<?php
$directorioraiz = dirname(__FILE__, 2);
include_once "$directorioraiz/config/config.php";
include_once 'logica.php';
include_once 'ClearData.php';


$conexion = NULL;
$datoscasa = NULL;
$texto = "";
$cuenta = 0;


$conexion = DBConnection::getDBConnection();
if ($conexion === NULL) {
    ?>


    <article class="jumbotron jumbotron-fluid coloresprimarios mt-2 text-white">
        <header class="text-center">
            <h1>
                <strong class="bold">
                    Error Inesperado
                </strong>
            </h1>
        </header>
        <p class="text-center">

            Se ha producido un error inesperado

        </p>

    </article>

    <?php
} else if (!isset($_GET["c"]) || existecasarural($conexion, $_GET["c"]) === FALSE) {
    ?>
    <article class="jumbotron jumbotron-fluid coloresprimarios mt-2 text-white">
        <header class="text-center">
            <h1>
                <strong class="bold">
                    No existe la casa rural
                </strong>
            </h1>
        </header>
        <p class="text-center">

            No se ha encontrado ninguna casa rural

        </p>

    </article>
    <?php
} else {

    $datoscasa = obtenerdatoscasa($conexion, $_GET["c"]);
    ?>

    <?php
    $texto = "";
    if (count($datoscasa->imagenes) >= 1) {

        $cuenta = count($datoscasa->imagenes);

        $texto = $texto . "<article  class=\"container\">\n";
        $texto = $texto . "  <header class=\"bg-light\">\n";
        $texto = $texto . "    <h1 class=\"bg-light cabeceraoferta\">\n";
        $texto = $texto . "    <strong class=\"bold\">\n";
        $texto = $texto . urldecode($datoscasa->nombrecinto);
        $texto = $texto . "    </strong>\n";
        $texto = $texto . "    </h1>\n";
        $texto = $texto . "  </header>\n";
        $texto = $texto . "<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">\n";
        $texto = $texto . "<ul class=\"carousel-indicators\">\n";
        for ($i = 0; $i < $cuenta; $i++) {

            if ($i == 0) {
                $texto = $texto . "<li data-target = \"#myCarousel\" data-slide-to=\"" . $i . "\" class=\"active\"></li>\n";
            } else {
                $texto = $texto . "<li data-target = \"#myCarousel\" data-slide-to=\"" . $i . "\"></li>\n";
            }
        }
        $texto = $texto . "</ul>\n";
        $texto = $texto . "<div class = \"carousel-inner\">\n";

        for ($i = 0; $i < $cuenta; $i++) {

            if ($i == 0) {
                $texto = $texto . "<div class = \"carousel-item active\">\n";
                $texto = $texto . "<img  src=\"img/" . urldecode($datoscasa->imagenes[$i]->ruta) . "-carousel." . urldecode($datoscasa->imagenes[$i]->extension) . "\" class=\"center-block img-fluid\" alt=\"" . urldecode($datoscasa->nombrecinto) . "\" />\n";
                $texto = $texto . "</div>\n";
            } else {
                $texto = $texto . "<div class = \"carousel-item\">\n";
                $texto = $texto . "<img  src=\"img/" . urldecode($datoscasa->imagenes[$i]->ruta) . "-carousel." . urldecode($datoscasa->imagenes[$i]->extension) . "\" class=\"center-block img-fluid\" alt=\"" . urldecode($datoscasa->nombrecinto) . "\" />\n";
                $texto = $texto . "</div>\n";
            }
        }

        $texto = $texto . "</div>\n";

        $texto = $texto . "<a class = \"carousel-control-prev\" href = \"#myCarousel\" data-slide = \"prev\">\n";
        $texto = $texto . "<span class =\"carousel-control-prev-icon\"></span>\n";
        $texto = $texto . "</a>\n";
        $texto = $texto . "<a class = \"carousel-control-next\" href = \"#myCarousel\" data-slide = \"next\">\n";
        $texto = $texto . "<span class = \"carousel-control-next-icon\"></span>\n";
        $texto = $texto . "</a>\n";

        $texto = $texto . "</div>\n";


        $texto = $texto . "</article>\n";
    } else {

        $texto = $texto . "<picture class=\"float-left\">\n";
        $texto = $texto . "<source srcset=\"img/casagenerica-movil.png\" media=\"(max-width: 767px)\">\n";
        $texto = $texto . "<source srcset=\"img/casagenerica-tablet.png\" media=\"(min-width: 768px) and (max-width: 991px)\">\n";
        $texto = $texto . "<source srcset=\"img/casagenerica-large.png\" media=\"(min-width: 992px) and (max-width: 1199px)\">\n";
        $texto = $texto . "<source srcset=\"img/casagenerica-tv.png\" media=\"(min-width: 1200px)\">\n";
        $texto = $texto . "<img src=\"img/casagenerica-movil.png\" alt=\"" . urlencode($datoscasa->nombrecinto) . "\" class=\"img-fluid2\">\n";
        $texto = $texto . "</picture>\n";
    }




    print($texto);
    ?>


    <article  class="container bg-light mt-2 pb-2 pt-2"> 
        <header class="bg-light">
            <h1 class="bg-light cabeceraoferta">
                <strong class="bold">
                    Descripción
                </strong>
            </h1>
        </header>





        <strong class="bold">Dirección: </strong><?php print(urldecode($datoscasa->direccion)); ?><br>
        <strong class="bold">Ciudad: </strong><?php print(urldecode($datoscasa->ciudad)); ?><br>
        <strong class="bold">Precio habitual: </strong><?php print(urldecode($datoscasa->precioahabitual)); ?> Euros/noche<br>


        <?php print(urldecode($datoscasa->descripcion)); ?>



    </article>

    <!--
        <article class="container-fluid mt-2  d-flex justify-content-center">

            <form class="form-inline">



                <button id="anteriormes" type="button">
                    Anterior
                </button>
                <label class="form-label ml-2 mr-2 mb-2"><strong id="mesmostrado" class="bold"> </strong></label>
                <button id="siguientemes" type="button">
                    Siguiente
                </button>


            </form>


        </article>-->

    <!--
        <article id="calendario" class="container">



        </article>
    -->

    <article class="row justify-content-center ml-1 mr-2">


        <article  class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">

            <header>

                <form class="form-inline">



                    <button id="anteriormes" type="button">
                        Anterior
                    </button>
                    <label class="form-label ml-2 mr-2 mb-2"><strong id="calendario_mesmostrado" class="bold"> </strong></label>
                    <button id="siguientemes" type="button">
                        Siguiente
                    </button>

                </form>

            </header>
            <article id="calendario">

            </article>
            <label id="fechaentradaseleccionada" class="form-label ml-2 mr-2" data-fecha="" data-fecha2=""><strong class="bold">Fecha entrada:</strong></label>

        </article>

        <article  class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">

            <header>

                <form class="form-inline">



                    <button id="anteriormes2" type="button">
                        Anterior
                    </button>
                    <label class="form-label ml-2 mr-2 mb-2"><strong id="calendario2_mesmostrado" class="bold"> </strong></label>
                    <button id="siguientemes2" type="button">
                        Siguiente
                    </button>

                </form>

            </header>
            <article id="calendario2">


            </article>
            <label id="fechasalidaseleccionada" class="form-label ml-2 mr-2" data-fecha="" data-fecha2=""><strong class="bold">Fecha salida:</strong></label>

        </article>


    </article>



    <article class="container-fluid mt-2 d-flex justify-content-center">
        <form class="form-inline">

            <label id="mensajescaledario" class="form-label ml-2 mr-2" ></label>



        </form>
    </article>
    <!--
        <article class="container-fluid mt-2 d-flex justify-content-center">
            <form class="form-inline">

                <label id="fechaseleccionada" class="form-label ml-2 mr-2" data-fecha="" data-fecha2=""><strong class="bold">Fecha seleccionada:</strong></label>


            </form>
        </article>

        <article class="container-fluid mt-2 d-flex justify-content-center">
            <form>
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12  col-xl-12 d-flex justify-content-center">
                        <button id="fijarfechaentrada" type="button">
                            Establecer fecha entrada
                        </button>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12  col-xl-12 d-flex justify-content-center">
                        <label id="fechaentradaseleccionada" class="form-label ml-2 mr-2" data-fecha="" data-fecha2=""><strong class="bold">Fecha entrada:</strong></label>
                    </div>


                </div>    
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12  col-xl-12 d-flex justify-content-center">

                        <button id="fijarfechasalida" type="button">
                            Establecer fecha salida
                        </button>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12  col-xl-12 d-flex justify-content-center">
                        <label id="fechasalidaseleccionada" class="form-label ml-2 mr-2" data-fecha="" data-fecha2=""><strong class="bold">Fecha salida:</strong></label>

                    </div>

                </div> 




                </div> 


            </form>
        </article> 
    -->
    <article class="container-fluid mt-2 d-flex justify-content-center">
        <?php
        if (DEPURACION == TRUE) {
            ?>    


            <form action="reservarcasa.php" method="GET" id="formularioreservarcasa" class="form-inline">
                <?php
            } else {
                ?>    
                <form action="reservarcasa.php" method="POST" id="formularioreservarcasa" class="form-inline">

                    <?php
                }
                ?>     
                <input name="txtfechaentrada" id="txtfechaentrada" type="hidden" value="">
                <input name="txtfechasalida" id="txtfechasalida" type="hidden" value="">
                <input name="txtidcasa" id="txtidacasa" type="hidden" value="">



                <button id="reservarcasa" type="button" disabled>
                    Reservar Casa
                </button>


            </form>
    </article>

    <article class="container-fluid mt-2 d-flex justify-content-center">

        <a href="reservar.php" class="btn btn-info mt-2">Volver a La Busqueda</a>

    </article>




    <article>
        <div class="modal fade" id="modalformularios" tabindex="-1" role="dialog" aria-labelledby="titulomodal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="titulomodal">Registrarse</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                        include_once 'libs/formularioregistro.php';
                        ?>
                        <?php
                        include_once 'libs/formularioidentificacion.php';
                        ?>  
                    </div>

                </div>
            </div>
        </div>
    </article>



    <?php
}
?>

















