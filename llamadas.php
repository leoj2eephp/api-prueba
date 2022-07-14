<?php
include_once 'models/Cliente.php';
include_once 'models/Telefono.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
$respuesta = "";
// Por este filtro pasarán las llamas por GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $action = $_GET["action"];
    if (isset($action)) {
        switch ($action) {
            case "clientes":
                $respuesta = Cliente::getAll();
                break;
            case "telefonos":
                $respuesta = Telefono::getAll();
                break;
        }
    } else {
        $respuesta = "Debe especificar un action clientes o telefonos";
    }
}


echo json_encode($respuesta);
