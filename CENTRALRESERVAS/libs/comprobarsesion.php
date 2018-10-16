<?php
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
header("Content-type:text/json; charset=utf-8\n\n");
include_once 'controlsesion.php';
$retval=TRUE;

if (isset($_SESSION['usuario'])) {
    
    $retval=TRUE;
    
}
else {
    
    $retval=false;
}
print(json_encode($retval));
?>