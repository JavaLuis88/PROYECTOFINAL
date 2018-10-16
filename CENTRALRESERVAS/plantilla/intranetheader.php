<?php
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
header("Content-type:text/html; charset=utf-8\n\n");
$directorioraiz = dirname(__FILE__, 2);
include_once "$directorioraiz/libs/controlsesion.php";
include_once "$directorioraiz/libs/WebInputs.php";
?>
<!DOCTYPE html>
<html lang="<?php echo(WebInputs::getParamenters('language', 'es')); ?>" id="#inciopartepublica">
    <head>
        <title><?php echo(WebInputs::getParamenters('title', '')); ?></title>
        <meta charset="<?php echo(WebInputs::getParamenters('charset', 'utf-8')); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        if (WebInputs::getParamenters('description', '') != '') {
            ?>

            <meta name="description" content="<?php echo(WebInputs::getParamenters('description', '')); ?>">
            <?php
        }
        ?>
        <?php
        if (WebInputs::getParamenters('keywords', '') != '') {
            ?>
            <meta name="keywords" content="<?php echo(WebInputs::getParamenters('keywords', '')); ?>">
            <?php
        }
        ?>
        <?php
        if (WebInputs::getParamenters('author', '') != '') {
            ?>
            <meta name="author" content="<?php echo(WebInputs::getParamenters('author', '')); ?>">
            <?php
        }
        ?>
        <?php
        if (WebInputs::getParamenters('robots', '') != '') {
            ?>
            <meta name="robots" content="<?php echo(WebInputs::getParamenters('robots', '')); ?>">
            <?php
        }
        ?>

        <link rel="stylesheet" href="../bower_components/bootstrap/css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="../css/comun.css">
        <link rel="stylesheet" href="../css/publica.css">
        <link rel="stylesheet" href="../css/modificacionesboostrap.css">
        <link rel="icon" href="https://www.reservaduero.es/templates/reservaduero/favicon.ico">
        <script src="../bower_components/tether/dist/js/tether.js"></script>
        <script src="../bower_components/jquery/dist/jquery.js"></script>
        <script src="../bower_components/popper.js/dist/umd/popper.js"></script>
        <script src="../bower_components/bootstrap/js/bootstrap.js"></script>
        <script src=../config/config.js></script>
        <script src="../js/AJAXURL.js"></script>
        <script src="../js/AJAX.js"></script>
        <script src="../js/logica.js"></script>
    </head>
    <body id="cuerpopartepublica">

        <header id="cabeceracontenidopartepublica" class="container-fluid text-center coloresprimarios bg-light">

            <h1 class="d-inline">

                <strong>

                    <span class="text-danger">Reserva</span><span class="text-info">Duero</span>


                </strong>

            </h1>
            <h2 class="d-inline">
                <strong>Central de reservas</strong><span class="d-none d-lg-inline d-xl-inline"> de la Ribera del Duero</span>
            </h2>


        </header>

        <nav id="navegacionparteintranet" class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">




                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenuincio', '')); ?>">
                        <a class="nav-link" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenureservar', '')); ?>">
                        <a class="nav-link" href="../reservar.php">Reservar</a>
                    </li>
                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenucontacto', '')); ?>">
                        <a class="nav-link" href="../contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenudondeestamos', '')); ?>">
                        <a class="nav-link" href="../dondeestamos.php">Donde Estamos</a>
                    </li>









                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenureservas', '')); ?> ml-1">
                        <a class="nav-link" href="reservas.php">Reservas</a>
                    </li>
                    <li class="nav-item <?php print(WebInputs::getParamenters('clasemenucuenta', '')); ?> ml-1">
                        <a class="nav-link" href="cuenta.php">Cuenta</a>
                    </li>

                 

                    <li><a href="../cerrarsesion.php" class="btn btn-danger ml-1">Cerrar Sesión</a></li>

                </ul>

            </div>


        </nav>

