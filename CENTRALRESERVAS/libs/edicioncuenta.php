<?php
$directorioraiz = dirname(__FILE__, 2);
include_once "$directorioraiz/config/config.php";
include_once 'logica.php';
include_once 'ClearData.php';

$datosusuario = NULL;
$nombre = "";
$apellidos = "";
$telefono = "";
$correo = "";
$contrasena = "";
$recontrasena = "";
$enviado = TRUE;
$retval = "";

$conexion = DBConnection::getDBConnection();
if ($conexion != NULL) {

    $enviado = FALSE;
    if (DEPURACION == TRUE) {

        if ($_GET) {

            $nombre = $_GET["nombre"];
            $apellidos = $_GET["apellidos"];
            $telefono = $_GET["telefono"];
            $correo = $_GET["correo"];
            $dni = $_GET["dni"];
            $direccion = $_GET["direccion"];
            $contrasena = $_GET["contrasena"];
            $recontrasena = $_GET["recontrasena"];
            $enviado = TRUE;
        }
    } else {
        if ($_POST) {
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $telefono = $_POST["telefono"];
            $correo = $_POST["correo"];
            $dni = $_POST["dni"];
            $direccion = $_POST["direccion"];
            $contrasena = $_POST["contrasena"];
            $recontrasena = $_POST["recontrasena"];
            $enviado = TRUE;
        }
    }

    if ($enviado == TRUE) {
        if (ClearData::clearInput($nombre) != $nombre || trim(ClearData::clearInput($nombre)) == "") {

            $retval = "Nombre no es válido";
        } else if (ClearData::clearInput($apellidos) != $apellidos || trim(ClearData::clearInput($apellidos)) == "") {

            $retval = "Apellido no es válido";
        } else if (ClearData::clearInput($telefono) != $telefono || trim(ClearData::clearInput($telefono)) == "") {

            $retval = "Teléfono no válido";
        } else if (ClearData::clearInput($correo) != $correo || filter_var($correo, FILTER_VALIDATE_EMAIL) === FALSE) {
            $retval = "Correo Electrónico no es válido";
        } else if (ClearData::clearInput($dni) != $dni || trim(ClearData::clearInput($dni)) == "") {
            $retval = "DNI no válido";
        } else if (ClearData::clearInput($correo) != $correo || filter_var($correo, FILTER_VALIDATE_EMAIL) === FALSE) {
            $retval = "Dirección no es válida";
        } else if (ClearData::clearInput($contrasena) != $contrasena || trim(ClearData::clearInput($contrasena)) === "") {
            $retval = "Contraseña no es válida";
        } else if (ClearData::clearInput($contrasena) != ClearData::clearInput($recontrasena)) {
            $retval = "Las contraseña no coinciden";
        } else {
            $retval = actualizarusuario($nombre, $apellidos, $telefono,$correo, $contrasena,$dni,$direccion);
        }
    }



    if (isset($_SESSION['usuario']) && ($datosusuario = obtenerdatosuario($conexion, $_SESSION['usuario'])) !== NULL) {
        ?>




        <article class="container-fluid ">

            <header class="text-center">
                <h2>
                    Edición de cuenta
                </h2>

            </header>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6  col-xl-5 d-flex justify-content-center">

                    <div id="capafrmregistro" class="container" >
                        <?php
                        if (trim($retval) === $retval) {
                            ?>
                            <div id="alerta" class="container theme-showcase coloresprimarios text-white">
                                <div id="mensajealerta" class="jumbotron-fluid coloresprimarios mt-2 text-white">

                                    <h1 class="text-center"><?php print($retval); ?></h1>


                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div id="capafrmregistro2" class="container">

                            <?php
                            if (DEPURACION == TRUE) {
                                ?>


                                <form action="cuenta.php" method="GET" name="formularioreservas" id="formularioregistro" class="">


                                    <?php
                                } else {
                                    ?>
                                    <form action="cuenta.php" method="POST" name="formularioreservas" id="formularioregistro" class="">
                                        <?php
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label  for="nombre">Nombre</label>
                                        <input name="nombre" id="nombre" type="text" class="form-control" maxlength="15" pattern="[A-Za-z0-9 ]{3,15}" placeholder="Nombre" value="<?php print($datosusuario['nombre']); ?>"required>
                                    </div>

                                    <div class="form-group">
                                        <label  for="apellidos">Apellidos</label>
                                        <input name="apellidos" id="apellidos" type="text" class="form-control" maxlength="25" pattern="[A-Za-z0-9 ]{3,25}" placeholder="Apellidos" value="<?php print($datosusuario['apellidos']); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label  for="telefono">Télefono</label>
                                        <input name="telefono" id="telefono" type="tel" class="form-control" maxlength="15" pattern="[0-9]{5,15}" placeholder="Teléfono" value="<?php print($datosusuario['telefono']); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label  for="dni">DNI</label>
                                        <input name="dni" id="dni" type="text" class="form-control" maxlength="9"  pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))" placeholder="DNI" value="<?php print($datosusuario['dni']); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label  for="direccion">Dirección</label>
                                        <input name="direccion" id="direccion" type="text" class="form-control" maxlength="125" pattern="[A-Za-z0-9 ]{4,125}" placeholder="Dirección" value="<?php print($datosusuario['direccion']); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label  for="correo">Correo Electrónico</label>
                                        <input name="correo" id="correo" type="email" class="form-control" maxlength="48" placeholder="Correo Electronico" value="<?php print($datosusuario['correolectronico']); ?>"required>
                                    </div>
                                    <div class="form-group">
                                        <label  for="contrasena">Contraseña</label>
                                        <input name="contrasena" id="contrasena" type="password" class="form-control" placeholder="Contraseña" maxlength="12" value="<?php print($datosusuario['contrasena']); ?>"required>
                                    </div>

                                    <div class="form-group">
                                        <label  for="recontrasena">Re Contraseña</label>
                                        <input name="recontrasena" id="recontrasena" type="password" class="form-control" placeholder="Contraseña" maxlength="12" value="<?php print($datosusuario['contrasena']); ?>"required>
                                    </div>


                                    <button name="registrarusuario" id="registrarusuario" type="submit" class="btn btn-primary mb-2">Registrarse</button>



                                </form>



                        </div>

                    </div>


                </div>        
            </div> 

        </article>

        ?>
        <?php
    } else {
        ?>
        <article>
            <div id="alerta" class="container theme-showcase  coloresprimarios text-white pb-2 pt-2 mt-2">
                <div id="mensajealerta" class="jumbotron-fluid">

                    <h1 class="text-center">Error Inesperado</h1>

                </div>
            </div>
        </article>
        <?php
    }
} else {
    ?>

    <article>
        <div id="alerta" class="container theme-showcase  coloresprimarios text-white pb-2 pt-2 mt-2">
            <div id="mensajealerta" class="jumbotron-fluid">

                <h1 class="text-center">Error Inesperado</h1>

            </div>
        </div>
    </article>



    <?php
}
?>       




