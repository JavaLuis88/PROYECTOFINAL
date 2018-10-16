/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function AJAXURL() {

    this.VERACASASINRESERVAS = "libs/casasinreservar.php";
    this.DIASCONOFERTA = "libs/diasconofertas.php";
    this.PRECIOSMES = "libs/preciosmes.php";
    this.PRECIODIASSELECIONADOS = "libs/preciodiasselecionado.php";
    this.REGISTRARUSUARIO = "libs/registrarusuario.php";
    this.IDENTIFICARUSUARIO = "libs/identificarusuario.php";
    this.RECUPERARCONTRASENA = "libs/recupercontrasena.php";
    this.COMPROBARSESION = "libs/comprobarsesion.php";
    this.RESERVASUSUARIO = "libs/mostarreservasusuario.php";
    this.BORRARESERVA = "libs/borrareservreservasusuario.php";


}



//SELECT  t1.`id` as idreserva,t1.`NOMBRERECINTO`,t2.`PRECIO`, t2.`ESTADOTRANSACCION`, t2.`ESTADORESERVA`, t2.`id`, MIN(t3.`DIA`) as fechaentrada, MAX(t3.`DIA`) as fechasalida ,t4.`CORREOELECTRONICO` FROM casasrurales t1 INNER JOIN reservascliente t2 ON t1.id = t2.IDCASARURAL INNER JOIN diasreserva t3 ON t1.id = t3.IDCASARURAL INNER JOIN clientes t4 ON t2.IDCLIENTE = t4.id WHERE t4.CORREOELECTRONICO='imunoz@gmail.com' GROUP BY t2.id 