<?php
include_once 'RedSysHandler.php';
$boton = NULL;
$retval = NULL;

$boton = new RedSysHandler();
$boton->setFuc("999008881");
$boton->setTerminal(1);
$boton->setKey("sq7HjrUOBfKmC576ILgskD5srU870gJ7");


$retval = $boton->processPetition();
 if ($retval == 0) {
     
     print("OK\n");
     
 }
 else {
     
     print("KO\n");  
 }

?>