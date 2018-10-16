<?php

class WebInputs {

    public static function getParamenters($name, $value) {
        global $_PARAMETERS;
        $retval = "";

        if (isset($_PARAMETERS[$name])) {

            $retval = $_PARAMETERS[$name];
        } else {

            $retval = $value;
        }
        return $retval;
    }

}

?>