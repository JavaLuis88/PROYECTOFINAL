
<?php
if ($ruta == "/descripcion.php") {
    ?>

    <div id="capafrmidentificacion" class="container d-none" >
        <?php
    } else {
        ?>
        <div id="capafrmidentificacion" class="container" >

            <?php
        }
        ?>


        <div id="alerta2" class="container theme-showcase d-none coloresprimarios text-white">
            <div id="mensajealerta2" class="jumbotron-fluid coloresprimarios mt-2 text-white">



            </div>
        </div>



        <div id="capafrmcapafrmidentificacion2" class="container">
            <form action="identificarse.php" method="POST" name="formularioidentificarse" id="formularioidentificarse" class="">


                <div class="form-group">
                    <label  for="correoidentificacion">Correo Electrónico</label>
                    <input name="correo" id="correoidentificacion" type="email" class="form-control" maxlength="48" placeholder="Correo Electronico" required>
                </div>

                <div class="form-group">
                    <label  for="contrasenaidentificaacion">Contraseña</label>
                    <input name="contrasena" id="contrasenaidentificaacion" type="password" class="form-control" placeholder="Contraseña" maxlength="12" required>
                </div>

                <button name="identificarusuario" id="identificarusuario" type="submit" class="btn btn-primary mb-2">Identificarse</button>



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