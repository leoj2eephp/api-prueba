<?php

include_once 'Ciudad.php';
include_once 'Region.php';

header('Content-Type: application/json');

// Por este filtro pasarán las llamas por GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $action = $_GET["action"];
    if (isset($action)) {
        switch ($action) {
            case "ciudades":
                $ciudad = new Ciudad();
                $ciudades = $ciudad->getAll();
                echo json_encode($ciudades);
                break;
            case "regiones":
                $region = new Region();
                $regiones = $region->getAll();
                echo json_encode($regiones);
                break;
        }
    } else {
        echo json_encode("Debe especificar un action ciudades o regiones");
    }
}
