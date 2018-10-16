   <div id="capafrmregistro" class="container" >

        <div id="alerta" class="container theme-showcase d-none coloresprimarios text-white">
            <div id="mensajealerta" class="jumbotron-fluid coloresprimarios mt-2 text-white">



            </div>
        </div>


        <div id="capafrmregistro2" class="container">
            <form action="registrarse.php" method="POST" name="formularioreservas" id="formularioregistro" class="">

                <div class="form-group">
                    <label  for="nombre">Nombre</label>
                    <input name="nombre" id="nombre" type="text" class="form-control" maxlength="15" pattern="[A-Za-z0-9 ]{3,15}" placeholder="Nombre" required>
                </div>

                <div class="form-group">
                    <label  for="apellidos">Apellidos</label>
                    <input name="apellidos" id="apellidos" type="text" class="form-control" maxlength="25" pattern="[A-Za-z0-9 ]{3,25}" placeholder="Apellidos" required>
                </div>
                <div class="form-group">
                    <label  for="telefono">Télefono</label>
                    <input name="telefono" id="telefono" type="tel" class="form-control" maxlength="15" pattern="[0-9]{5,15}" placeholder="Teléfono" required>
                </div>
                <div class="form-group">
                    <label  for="correo">Correo Electrónico</label>
                    <input name="correo" id="correo" type="email" class="form-control" maxlength="48" placeholder="Correo Electronico" required>
                </div>
                <div class="form-group">
                    <label  for="contrasena">Contraseña</label>
                    <input name="contrasena" id="contrasena" type="password" class="form-control" placeholder="Contraseña" maxlength="12" required>
                </div>

                <div class="form-group">
                    <label  for="recontrasena">Re Contraseña</label>
                    <input name="recontrasena" id="recontrasena" type="password" class="form-control" placeholder="Contraseña" maxlength="12" required>
                </div>


                <button name="edicioncuenta" id="edicioncuenta" type="submit" class="btn btn-primary mb-2">Registrarse</button>



            </form>

    

        </div>

    </div>