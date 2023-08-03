<?php
// controller.php
require_once 'MconexionBD.php';

class ModelUser
{
    // Función para obtener los datos desde la base de datos   
    public static function funcionObtenerDatosUsuario()
     {   // Obtener la conexión a la base de datos
        $conn = ConexionBD::obtenerConexion();
         // Validar si la conexión se realizó con éxito
        if (!$conn) {
             // Si no se pudo obtener la conexión, retornar un arreglo vacío
             // o mostrar un mensaje de error según tus necesidades.
            return array();
        }
        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }
         // Consulta para obtener los datos de la tabla
         $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql);
         // Arreglo para almacenar los datos
        $data = array();
         // Obtener los datos y agregarlos al arreglo
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_row()) {
                $data[] = $row;
            }
        }
         // Cerrar la conexión a la base de datos
        $conn->close();
         // Retornar el arreglo con los datos obtenidos
        return $data; 
    }
    
}
?>