<?php

include_once 'Ciudad.php';
include_once 'Region.php';

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
        }
    } else {
        $respuesta = "Debe especificar un action ciudades o regiones";
    }
}


echo json_encode($respuesta);