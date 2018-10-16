<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBresult
 *
 * @author Usuario01
 */
class DBresult {
   
    public $codigo;
    public $resultado;
    
    function __construct($codigo=0,$resultado=array()) {
        
        $this->codigo=$codigo;
        $this->resultado=$resultado;
        
        
    }
    
    
    function setCodigo($codigo) {
        
        $this->codigo=$codigo;
        
    }
    
    function getCodigo() {
        
        
        return $this->codigo;
    }
    
    
    function setResultado($resultado) {
        
        $this->resultado=$resultado;
        
        
    }
    
    
    function getResultado() {
        
        return $this->resultado;
        
    }
    
}
