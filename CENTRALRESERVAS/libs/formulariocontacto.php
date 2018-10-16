<?php
$directorioraiz = dirname(__FILE__, 2);
include_once "$directorioraiz/config/config.php";
include_once 'logica.php';
include_once 'ClearData.php';
$mensaje = "";
$mensaje = "";
$retval = "";

if ($_POST) {

    if (!isset($_POST['nombre']) || $_POST['nombre'] === NULL || trim($_POST['nombre']) === "") {

        $retval = "Debe de rellenar el campo nombre";
    } else if (!isset($_POST['apellidos']) || $_POST['apellidos'] === NULL || trim($_POST['apellidos']) === "") {

        $retval = "Debe de rellenar el campo apellidos";
    } else if (!isset($_POST['correo']) || $_POST['correo'] === NULL || trim($_POST['correo']) === "") {

        $retval = "Debe de rellenar el campo correo electrónico";
    } else if (!isset($_POST['mensaje']) || $_POST['mensaje'] === NULL || trim($_POST['mensaje']) === "") {

        $retval = "Debe de rellenar el campo mensaje";
    } else {

        $mensaje = "Ha recibido un mensaje de l apágian de contacto de Reservaduero\r\n";
        $mensaje = $mensaje . "Nombre: " . $_POST['nombre'] . "\r\n";
        $mensaje = $mensaje . "Apellidos: " . $_POST['apellidos'] . "\r\n";
        $mensaje = $mensaje . "Correo Electrónico: " . $_POST['correo'] . "\r\n";
        $mensaje = $mensaje . $_POST['mensaje'] . "\r\n";



        $mensaje2 = "Gracias pos su mensaje. Los datos que nos ha enviado son:\r\n";
        $mensaje2 = $mensaje2 . "Nombre: " . $_POST['nombre'] . "\r\n";
        $mensaje2 = $mensaje2 . "Apellidos: " . $_POST['apellidos'] . "\r\n";
        $mensaje2 = $mensaje2 . "Correo Electrónico: " . $_POST['correo'] . "\r\n";
        $mensaje2 = $mensaje2 . $_POST['mensaje'] . "\r\n";
        $mensaje2 = $mensaje2 . "En breve nos pondremos en contacto con usted\r\n";

        if (enviarcorreo(SMTPSERVERSENDERADDRESS, SMTPSERVERSENDERADDRESS, "Mensaje de contacto en ReservaDuero", $mensaje) && enviarcorreo(SMTPSERVERSENDERADDRESS, $_POST['correo'], "Mensaje de contacto en ReservaDuero", $mensaje2)) {



            $retval = "Mensaje enviado con existo.<br> En breve nos pondremos en contacto con usted";
        } else {

            $retval = "Error al enviar el mensaje. Por favor intentelo más tarde";
        }
    }
}
?>

<div id="capafrmidentificacion" class="container" >


    <?php
    if (trim($retval) != "") {
        print("<div id=\"alerta2\" class=\"container theme-showcase coloresprimarios text-white\">");
        print("<div id=\"mensajealerta2\" class=\"jumbotron-fluid coloresprimarios mt-2 text-white\">");
        print($retval);
        print("</div>");
        print("</div>");
    }
    ?>
    <div class="container mt-2 mb-4 text-center">
        Por favor, rellena el siguiente formulario y nos pondremos en contacto contigo lo antes posible.
    </div>

    <div id="capafrmcapafrmcontacto" class="container">
        <form action="contacto.php" method="POST" name="formulariocontacto" id="formulariocontacto" class="">

            <div class="form-group">
                <label  for="nombrecontacto">Nombre</label>
                <input name="nombre" id="nombrecontacto" type="text" class="form-control" maxlength="28" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <label  for="apellidoscontacto">Apellidos</label>
                <input name="apellidos" id="apellidoscontacto" type="text" class="form-control" maxlength="28" placeholder="Apellidos" required>
            </div>
            <div class="form-group">
                <label  for="correocontacto">Correo Electrónico</label>
                <input name="correo" id="correocontacto" type="email" class="form-control" maxlength="48" placeholder="Correo Electrónico" required>
            </div>
            <div class="form-group">
                <label  for="mensajecontacto">Mensaje</label>
                <textarea name="mensaje" id="mensajecontacto" class="form-control" placeholder="Mensaje" required>
                </textarea>
            </div>



            <button name="identificarusuario" id="identificarusuario" type="submit" class="btn btn-primary mb-2">Enviar</button>



        </form>

        <?php
        if ($ruta == "/identificarse.php") {
            ?>
            <a href="registarse.php">Registrarse</a> &nbsp; &nbsp; <a href="recuperarcontrasena.php">Recuperar Contraseña</a>

            <?php
        } else if ($ruta == "/descripcion.php") {
            ?>


            <a href="javascript:void(0);" id="enlaceregistro">Registrase</a>



            <?php
        }
        ?>

    </div>

</div>