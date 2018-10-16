<?php

class Precio {

    public $id;
    public $precio;
    public $dia;
    public $oferta;
    public $motivooferta;
    public $idcasa;

    function __construct($id, $precio, $dia, $oferta, $motivooferta, $idcasa) {
        $this->id = urlencode($id);
        $this->precio = urlencode($precio);
        $this->dia = $dia;
        $this->oferta = urlencode($oferta);
        $this->motivooferta = urlencode($motivooferta);
        $this->idcasa = urlencode($idcasa);
    }

}
