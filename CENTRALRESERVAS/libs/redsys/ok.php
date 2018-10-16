<?php
include_once 'RedSysHandler.php'
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h1>PAGINA OK</h1>
        <?php
        $boton = NULL;
        $retval = NULL;

        $boton = new RedSysHandler();
        $boton->setFuc("999008881");
        $boton->setTerminal(1);
        $boton->setKey("sq7HjrUOBfKmC576ILgskD5srU870gJ7");


        $retval = $boton->processPetitionURL();
        if ($retval == 0) {

            print("RESULTADO OK<br>");
            print($boton->getLaspetitionresult()->getParameter("Ds_Order"));
        } else {

            print("KO\n");
        }
        ?>
    </body>
</html>
