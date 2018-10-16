<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClearData
 *
 * @author Usuario01
 */
class ClearData {

    //put your code here

    public static function clearInput($input) {

        $retval = "";
        $retval = trim($input);
        $retval = htmlentities($retval);
        $retval = addslashes($retval);
        $retval = strip_tags($retval);
        $retval = ClearData::forwardreplacedot($retval);

        return $retval;
    }

    public static function forwardreplacedot($input) {
        
        $retval="";
        $retval=trim($input);
        while(stripos($retval, "../")!==FALSE) {
            
            
            $retval= str_replace("../", "", $retval);
            
        }
        
        
        
        
        return $retval;
        
        
    }

}
