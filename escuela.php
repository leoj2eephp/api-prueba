<?php
include_once 'Alumno.php';
include_once 'Asignatura.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
$respuesta = "";
// Por este filtro pasarán las llamas por GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $action = $_GET["action"];
    if (isset($action)) {
        switch ($action) {
            case "alumnos":
                $respuesta = Alumno::getAll();
                break;
            case "asignaturas":
                $respuesta = Asignatura::getAll();
                break;
        }
    } else {
        $respuesta = "Debe especificar un action ciudades, regiones o personas";
    }
}


echo json_encode($respuesta);
