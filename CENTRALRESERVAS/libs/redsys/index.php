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
        <?php
        $boton = NULL;
        $numeropedido = 0;

        $numeropedido = time();

        $boton = new RedSysHandler();
        $boton->setFuc(REDSYSFUC);
        
        
        
        $boton->setTerminal(REDSYSTERMINAL);
        $boton->setKey(REDSYSKEY);
        $boton->setId($numeropedido);
        $boton->setMoneda("978");
        $boton->setAmount(5);
        $boton->setTrans(REDSYTRANS);
        $boton->setUrlprocess(REDSYSURLPROCCESS);
        $boton->setUrlOK(REDSYSURLOK);
        $boton->setUrlKO(REDSYSURLKO);
        $boton->setProduccion(ENTORNOPRODUCCION);
        
        print("Numero de pedido " . $numeropedido . "<br>");
   print($boton->createButton("Pagar"));
        ?>
    </body>
</html>
