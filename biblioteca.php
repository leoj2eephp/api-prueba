<?php
include_once 'models/Socio.php';
include_once 'models/Libro.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
$respuesta = "";
// Por este filtro pasarán las llamas por GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $action = $_GET["action"];
    if (isset($action)) {
        switch ($action) {
            case "socios":
                $respuesta = Socio::getAll();
                break;
            case "libros":
                $respuesta = Libro::getAll();
                break;
        }
    } else {
        $respuesta = "Debe especificar un action socios o libros";
    }
}

echo json_encode($respuesta);
