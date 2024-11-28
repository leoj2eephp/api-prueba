<?php
include_once 'ConexionBD.php';

class Socio {
    public $id;
    public $nombre;
    public $apellido;

    public static function getAll() {
        /* $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM socio");
        $socios = [];

        foreach ($rs as $fila) {
            $socio = new Socio();
            $socio->id = $fila["id"];
            $socio->nombre = utf8_encode($fila["nombre"]);
            $socio->apellido = utf8_encode($fila["apellido"]);

            $socios[] = $socio;
        } */
        $socios = [
            ['id' => 1, 'nombre' => 'Pedro', 'apellido' => 'García'],
            ['id' => 2, 'nombre' => 'Luisa', 'apellido' => 'Martínez'],
            ['id' => 3, 'nombre' => 'Elena', 'apellido' => 'Rodríguez'],
            ['id' => 4, 'nombre' => 'Miguel', 'apellido' => 'Hernández'],
            ['id' => 5, 'nombre' => 'Raúl', 'apellido' => 'Núñez'],
            ['id' => 6, 'nombre' => 'Clara', 'apellido' => 'Díaz'],
            ['id' => 7, 'nombre' => 'Diego', 'apellido' => 'Ortiz']
        ];
        return $socios;
    }
}