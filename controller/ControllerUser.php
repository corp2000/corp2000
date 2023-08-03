<?php
// controller.php
require_once '../model/Muser.php';


    // Verificar si es una petición AJAX válida
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        // Obtener el tipo de acción que se solicita en la petición AJAX
        if (isset($_POST['accion'])) {
            $accion = $_POST['accion'];

            // Realizar la acción correspondiente
            switch ($accion) {
                case 'cargarDatos':
                    $objetoUsuario = new ModelUser();
                    $usuarios = $objetoUsuario->funcionObtenerDatosUsuario();
                    // Preparar los datos en un formato adecuado para DataTables
                    $datos = array("data" => $usuarios);

                    header('Content-Type: application/json');// Establecer el encabezado JSON
                    echo json_encode($datos);
                    break;
            }
        }
    }
    


?>