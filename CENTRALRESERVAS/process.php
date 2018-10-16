<?php
$directorioraiz = dirname(__FILE__);
include_once "$directorioraiz/config/config.php";
include_once 'libs/logica.php';
include_once 'libs/redsys/RedSysHandler.php';
$boton = NULL;
$retval = NULL;

$boton = new RedSysHandler();
$boton->setFuc(REDSYSFUC);
$boton->setTerminal(REDSYSTERMINAL);
$boton->setKey(REDSYSKEY);

$retval = $boton->processPetition();

if ($retval == 0) {
    cambiarestadotransaccion($boton->getLaspetitionresult()->getParameter("Ds_Order"), 1);
     print("OK\n");
} else {

    cambiarestadotransaccion($boton->getLaspetitionresult()->getParameter("Ds_Order"), 2);
    print("KO\n");
}
?>