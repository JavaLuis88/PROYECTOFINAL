<?php
$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "Reserva Duero, casas y hoteles rurales en Aranda y la Ribera";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Casas rurales y turismo rural en la Ribera del Duero. Alquiler de alojamientos con encanto y ofertas de casa rural completa";
$_PARAMETERS['keywords'] = "Inicio, Central Reservas, Turismo Rural, Casas Rurales";
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
    <article class="container bg-light mb-2">
        <header>
            <h1>               
                <strong>
                    ¿Por qué <span class="text-danger">Reserva</span><span class="text-info">Duero</span>?
                </strong>
            </h1>                  
        </header>
        No estás en una web de hoteles cualquiera, aquí encontrarás una selección cuidada de casas rurales, restaurantes y bodegas con encanto seleccionados personalmente por nuestro equipo y con opiniones de usuarios. Podrás disfrutar de una experiencia de turismo rural muy especial, con alojamientos únicos, habitaciones acogedoras, un trato inmejorable y una gastronomía exquisita en los alrededores de Aranda y la Ribera del Duero. Que tu estancia sea inolvidable es nuestro principal objetivo.

        ¿Quieres vivir una escapada única? Estás en el sitio adecuado.
    </article>
    <article  class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target = "#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target = "#myCarousel" data-slide-to="1"></li>
                <li data-target = "#myCarousel" data-slide-to="2"></li>
                <li data-target = "#myCarousel" data-slide-to="3"></li>
                <li data-target = "#myCarousel" data-slide-to="4"></li>
                <li data-target = "#myCarousel" data-slide-to="5"></li>
            </ul>
            <div class = "carousel-inner">
                <div class = "carousel-item active">
                    <img  src="img/Carousel01.jpg" class="center-block img-fluid" alt="Carrusel ReservaDuero" />
                </div>
                <div class = "carousel-item">
                    <img  src="img/Carousel02.jpg" class="center-block img-fluid" alt="Carrusel ReservaDuero" />
                </div>
                <div class = "carousel-item">
                    <img  src="img/Carousel03.jpg" class="center-block img-fluid" alt="Carrusel ReservaDuero" />
                </div>
                <div class = "carousel-item">
                    <img  src="img/Carousel04.jpg" class="center-block img-fluid" alt="Carrusel ReservaDuero" />
                </div>
                <div class = "carousel-item">
                    <img  src="img/Carousel05.jpg" class="center-block img-fluid" alt="Carrusel ReservaDuero" />
                </div>
                <div class = "carousel-item">
                    <img  src="img/Carousel06.jpg" class="center-block img-fluid" alt="Carrusel ReservaDuero" />
                </div>
            </div>

            <a class = "carousel-control-prev" href = "#myCarousel" data-slide = "prev">
                <span class ="carousel-control-prev-icon"></span>
            </a>
            <a class = "carousel-control-next" href = "#myCarousel" data-slide = "next">
                <span class = "carousel-control-next-icon"></span>
            </a>
        </div>
    </article>
    <article class="mt-4">
        <header>
            <h1 class="text-center cabeceraoferta">Algunos ejemplos de nuestros alojamientos...</h1>
        </header>
    </article>
    <!--
    <article class="row  d-flex justify-content-center">  

        <article class="col-10 col-sm-10 col-md-5 col-lg-5  col-xl-3 bg-light mr-2 ml-2 mt-2 mb-2">                
            <header class="pt-2">
                <h1 class="text-center cabeceraoferta coloresprimarios text-white">Casa rural Las Escuelas</h1>
            </header>
            <div class="container">
                <img src="img/casa11-movil.jpg" alt="Casa Rural Las Escuelas" class="img-fluid">
            </div>
            <div>                
                Casa rural en plena plaza mayor de vadocondes y al lado de la bodega del siglo XIX.
                <p class="text-center">
                    <a href="descripcion.php?c=1" class="btn btn-success mt-0.5">Reservar</a>
                </p>

            </div>
        </article>
        <article class="col-10 col-sm-10 col-md-5 col-lg-5  col-xl-3 bg-light mr-2 ml-2 mt-2 mb-2">                
            <header class="pt-2">
                <h1 class="text-center cabeceraoferta coloresprimarios text-white">Casa Rural Las Lavanderas</h1>
            </header>
            <div class="container">
                <img src="img/casa31-movil.jpg" alt="Casa Rural Las Lavanderas" class="img-fluid">
            </div>
            <div>                
                Casa rural acogedora, con un gran patio y balneario anexo.
                <p class="text-center mt-2">
                    <a href="descripcion.php?c=3" class="btn btn-success mt-0.5">Reservar</a>
                </p>

            </div>
        </article>
        <article class="col-10 col-sm-10 col-md-5 col-lg-5  col-xl-3 bg-light mr-2 ml-2 mt-2 mb-2">                
            <header class="pt-2">
                <h1 class="text-center cabeceraoferta coloresprimarios text-white">El Molino</h1>
            </header>
            <div class="container">
                <img src="img/casa21-movil.jpg" alt="El Molino" class="img-fluid">
            </div>
            <div>                
                Casa rural construida en un antiguo molino de piedra.
                <p class="text-center mt-2">
                    <a href="descripcion.php?c=2" class="btn btn-success mt-0.5">Reservar</a>
                </p>

            </div>
        </article>
    </article>
    -->

    <?php
    include_once 'libs/casasrecientes.php'
    ?>


</section>


<?php
include_once 'plantilla/publicfooter.php';
?>
   