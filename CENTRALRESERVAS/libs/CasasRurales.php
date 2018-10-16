<?php

class CasasRurales {

    public $id;
    public $ref;
    public $nombrecinto;
    public $nombrecorto; 
    public $direccion;
    public $ciudad;
    public $correorecinto;
    public $descripcion;
    public $precioahabitual;
    public $imagenes;
    public $fechainiciopublicacion;
    public $fechafinalpublicacion;
    
    
    public function __construct($id, $ref, $nombrecinto,$nombrecorto,$direccion, $ciudad, $correorecinto, $descripcion,$precioahabitual,$imagenes,$fechainiciopublicacion,$fechafinalpublicacion) {
        $this->id = urlencode($id);
        $this->ref = urlencode($ref);
        $this->nombrecinto = urlencode($nombrecinto);
        $this->nombrecorto= urlencode($nombrecorto);
        $this->direccion = urlencode($direccion);
        $this->ciudad = urlencode($ciudad);
        $this->correorecinto = urlencode($correorecinto);
        $this->descripcion = urlencode($descripcion);
        $this->precioahabitual = urlencode($precioahabitual);
        $this->imagenes=$imagenes;
        $this->fechainiciopublicacion=$fechainiciopublicacion;
        $this->fechafinalpublicacion=$fechafinalpublicacion;
    }
    
    
 
}
?>
