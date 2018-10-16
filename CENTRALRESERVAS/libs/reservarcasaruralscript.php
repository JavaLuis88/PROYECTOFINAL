<?php
//http://localhost/CENTRALRESERVAS/reservarcasa.php?txtfechaentrada=2018-02-25&txtfechasalida=2018-02-28&txtidcasa=1
$directorioraiz=dirname(__FILE__,2);
include_once 'controlsesion.php';
include_once "$directorioraiz/config/config.php";
include_once 'logica.php';
include_once 'ClearData.php';



$idcarural = 0;
$cadenafechaentrada = "";
$cadenafechasalida = "";
$fechaentrada = NULL;
$fechasalida = NULL;
$retval = "";





if (DEPURACION == TRUE) {

    if (isset($_GET["txtidcasa"])) {

        $idcarural = $_GET["txtidcasa"];
    }



    if (isset($_GET["txtfechaentrada"])) {

        $cadenafechaentrada = $_GET["txtfechaentrada"];
    }



    if (isset($_GET["txtfechasalida"])) {

        $cadenafechasalida = $_GET["txtfechasalida"];
    }
} else {
    if (isset($_POST["txtidcasa"])) {

        $idcarural = $_POST["txtidcasa"];
    }



    if (isset($_POST["txtfechaentrada"])) {

        $cadenafechaentrada = $_POST["txtfechaentrada"];
    }



    if (isset($_POST["txtfechasalida"])) {

        $cadenafechasalida = $_POST["txtfechasalida"];
    }
}



if (ClearData::clearInput($idcarural) != $idcarural) {

    $retval = "ID de casa rural no válido";
} else if (ClearData::clearInput($cadenafechaentrada) != $cadenafechaentrada) {

    $retval = "Fecha de entrada no válida";
} else if (ClearData::clearInput($cadenafechasalida) != $cadenafechasalida) {


    $retval = "Fecha de salida no válida";
}

if (trim($retval) != "") {
    ?>


    <article class = "jumbotron jumbotron-fluid coloresprimarios mt-2 text-white">
        <header class = "text-center">
            <h1>
                <strong class = "bold">
                    Error Inesperado
                </strong>
            </h1>
        </header>
        <p class = "text-center">

            <?php ($retval); ?>

        </p>

    </article>
    <?php
} else {
    $retval = registrarseserva($idcarural, $cadenafechaentrada, $cadenafechasalida);
    if (gettype($retval) === "string") {
        ?>

        <article class = "jumbotron jumbotron-fluid coloresprimarios mt-2 text-white">
            <header class = "text-center">
                <h1>
                    <strong class = "bold">
                        <?php print($retval); ?>
                    </strong>
                </h1>
            </header>


        </article>
        <?php
    } else {
        ?>
        <article id="caparegistroexito" class = "jumbotron jumbotron-fluid coloresprimarios mt-2 text-white">
            <header class = "text-center">
                <h1>
                    <strong class = "bold">
                        Reserva realizada
                    </strong>
                </h1>
            </header>
            <p class = "text-center">

                La reserva se ha realizado con éxito, hemos procedido a mandarle un correo electrónico con la confirmación de su reserva.
                <br>
                El precio de la misma son: <?php print(round($retval->getAmount()/100)); ?> Euros;
                
      


            </p>
            <div class="d-flex justify-content-center">
            <?php
            
           
            print($retval->createButton("Pagar", "", "btn btn-success"));
            ?>
                
                 </div>
        </article>

            <?php
        }
    }
    ?>