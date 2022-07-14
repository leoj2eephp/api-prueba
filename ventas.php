<?php
include_once 'models/Producto.php';
include_once 'models/TipoProducto.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
$respuesta = "";
// Por este filtro pasarán las llamas por GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $action = $_GET["action"];
    if (isset($action)) {
        switch ($action) {
            case "productos":
                $respuesta = Producto::getAll();
                break;
            case "tipo_productos":
                $respuesta = TipoProducto::getAll();
                break;
        }
    } else {
        $respuesta = "Debe especificar un action productos o tipo_productos";
    }
}


echo json_encode($respuesta);
