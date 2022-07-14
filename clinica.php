<?php
include_once 'models/Paciente.php';
include_once 'models/Doctor.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
$respuesta = "";
// Por este filtro pasarán las llamas por GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $action = $_GET["action"];
    if (isset($action)) {
        switch ($action) {
            case "pacientes":
                $respuesta = Paciente::getAll();
                break;
            case "doctores":
                $respuesta = Doctor::getAll();
                break;
        }
    } else {
        $respuesta = "Debe especificar un action pacientes o doctores";
    }
}


echo json_encode($respuesta);
