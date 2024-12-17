<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
$respuesta = [];
// Por este filtro pasarán las llamas por GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $respuesta = [
        [
            "id" => 1,
            "deporte" => "Fútbol",
            "equipo_local" => "Barcelona",
            "equipo_visitante" => "Real Madrid",
            "estadio" => "Camp Nou"
        ],
        [
            "id" => 2,
            "deporte" => "Baloncesto",
            "equipo_local" => "Lakers",
            "equipo_visitante" => "Warriors",
            "estadio" => "Crypto.com Arena"
        ],
        [
            "id" => 3,
            "deporte" => "Tenis",
            "jugador_1" => "Novak Djokovic",
            "jugador_2" => "Carlos Alcaraz",
            "lugar" => "Wimbledon"
        ],
        [
            "id" => 4,
            "deporte" => "Béisbol",
            "equipo_local" => "Yankees",
            "equipo_visitante" => "Red Sox",
            "estadio" => "Yankee Stadium"
        ]
    ];
}

echo json_encode($respuesta);
