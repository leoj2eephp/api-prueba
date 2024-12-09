<?php
include_once 'models/Producto.php';
include_once 'models/Cliente.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
$respuesta = [];
// Por este filtro pasarán las llamas por GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $respuesta = [
        [
            "id" => 1,
            "marca" => "Toyota",
            "modelo" => "Corolla",
            "tipo" => "Sedán",
            "año" => 2020
        ],
        [
            "id" => 2,
            "marca" => "Ford",
            "modelo" => "F-150",
            "tipo" => "Camioneta",
            "año" => 2018
        ],
        [
            "id" => 3,
            "marca" => "Honda",
            "modelo" => "Civic",
            "tipo" => "Sedán",
            "año" => 2022
        ],
        [
            "id" => 4,
            "marca" => "Tesla",
            "modelo" => "Model 3",
            "tipo" => "Eléctrico",
            "año" => 2021
        ],
        [
            "id" => 5,
            "marca" => "Chevrolet",
            "modelo" => "Silverado",
            "tipo" => "Camioneta",
            "año" => 2019
        ]
    ];
}

echo json_encode($respuesta);
