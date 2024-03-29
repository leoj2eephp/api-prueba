<?php
include_once 'models/Ciudad.php';
include_once 'models/Region.php';
include_once 'models/Persona.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
$respuesta = "";
// Por este filtro pasarán las llamas por GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $action = $_GET["action"];
    if (isset($action)) {
        switch ($action) {
            case "ciudades":
                $ciudad = new Ciudad();
                $respuesta = $ciudad->getAll();
                break;
            case "regiones":
                $region = new Region();
                $respuesta = $region->getAll();
                break;
            case "personas":
                $persona = new Persona();
                $respuesta = $persona->getAll();
                break;
        }
    } else {
        $respuesta = "Debe especificar un action ciudades, regiones o personas";
    }
}

echo json_encode($respuesta);
