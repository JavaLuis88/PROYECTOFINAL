<?php
$directorioraiz=dirname(__FILE__,2);
include_once "$directorioraiz/config/config.php";

class DBConnection {

    private static $dbconexion = NULL;
    private $conexion = NULL;

    private function __construct() {

        $this->conexion = mysqli_connect(SERVIDOR, USUARIO, CONTRASENA, BASEDEDATOS);
        if (!$this->conexion) {
            $this->conexion = NULL;
            throw new Exception("No ha sido posible establcer la conexión a la base de datos", 1);
        }
    }

    public static function getDBConnection() {
        $retval = NULL;

        if (DBConnection::$dbconexion == NULL) {

            try {
                DBConnection::$dbconexion = new DBConnection();
                $retval = DBConnection::$dbconexion->conexion;
            } catch (Exception $e) {

               DBConnection::$dbconexion = NULL;
            }
        } else {
            $retval = DBConnection::$dbconexion->conexion;
        }







        return $retval;
    }

}

?>