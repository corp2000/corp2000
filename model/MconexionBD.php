
<?php
// conexion.php
require_once '../../../../../configConexionServer/config.php';
class ConexionBD
{
    private static $servername = DB_SERVERNAME;
    private static $port = DB_PORT;
    private static $username = DB_USERNAME;
    private static $password = DB_PASSWORD;
    private static $dbname = DB_NAME;
    private static $conn = null;

    public static function obtenerConexion()
    {
    // Si la conexión aún no se ha establecido, crearla
    try{
        if (self::$conn === null) {
            self::$conn = new mysqli(self::$servername, self::$username, self::$password, self::$dbname, self::$port);
            if (self::$conn->connect_error) {
                // Mostrar mensaje de error en la consola del servidor (log)
                error_log("Error de conexión a la base de datos: " . self::$conn->connect_error);
                self::$conn = null; // Reestablecer la conexión a null para indicar que hubo un error
            }
    }

    }catch(Exception $errror){
        self::$conn = null; // Reestablecer la conexión a null para indicar que hubo un error
        }
        // Retornar la conexión (puede ser null si hubo un error)
        return self::$conn;    
    }
    //return self::$conn;
}
?>