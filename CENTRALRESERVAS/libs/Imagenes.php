<?php

class Imagenes {

    public $id;
    public $ruta;
    public $descripcion;
    public $idcasa;
    public $extension;

    public function __construct($id, $ruta, $descripcion, $idcasa,$extension) {
        $this->id = urlencode($id);
        $this->ruta = urlencode($ruta);
        $this->descripcion = urlencode($descripcion);
        $this->idcasa = urlencode($idcasa);
        $this->extension=urlencode($extension);
    }

}

?>
