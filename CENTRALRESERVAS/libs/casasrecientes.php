<?php
$directorioraiz = dirname(__FILE__, 2);
include_once 'controlsesion.php';
include_once "$directorioraiz/config/config.php";
include_once 'logica.php';
include_once 'ClearData.php';
$cuenta = 0;
$retval = NULL;


$retval = mostrarcasasrecientes();

if ($retval !== NULL) {
    ?>

    <article class="row  d-flex justify-content-center">  



        <?php
        $cuenta = count($retval);
        for ($i = 0; $i < $cuenta; $i++) {
            ?>

            <article class="col-10 col-sm-10 col-md-5 col-lg-5  col-xl-3 bg-light mr-2 ml-2 mt-2 mb-2">                
                <header class="pt-2">
                    <h1 class="text-center cabeceraoferta coloresprimarios text-white"><?php print(urldecode($retval[$i]->nombrecorto)); ?></h1>
                </header>
                <div class="container">

                    <?php
                    if (count($retval[$i]->imagenes) >= 1) {
                    ?>
                    
                 
                       <img src="img/<?php print(urldecode($retval[$i]->imagenes[0]->ruta));?>-movil.jpg" alt="<?php print(urldecode($retval[$i]->imagenes[0]->descripcion));?>" class="img-fluid">
                 
                    
                    <?php
                      
                    }
                    ?>

                </div>
                <div>                
                    <?php print(urldecode($retval[$i]->descripcion)); ?>

                    <p class="text-center">
                        <a href="descripcion.php?c=<?php print(urldecode($retval[$i]->id)); ?>" class="btn btn-success mt-0.5">Reservar</a>
                    </p>

                </div>
            </article>
            <?php
        }
        ?>






    </article>


    <?php
}
?>

