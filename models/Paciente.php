<?php
include_once 'ConexionBD.php';

class Paciente {
    public $id;
    public $nombre;
    public $apellido;

    public static function getAll() {
        /* $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM paciente");
        $pacientes = [];

        foreach ($rs as $fila) {
            $paciente = new Paciente();
            $paciente->id = $fila["id"];
            $paciente->nombre = utf8_encode($fila["nombre"]);
            $paciente->apellido = utf8_encode($fila["apellido"]);
            
            $pacientes[] = $paciente;
        } */
        $pacientes = [
            ['id' => 1, 'nombre' => 'Eva', 'apellido' => 'Muñoz'],
            ['id' => 2, 'nombre' => 'Andrés', 'apellido' => 'Vega'],
            ['id' => 3, 'nombre' => 'Rosa', 'apellido' => 'Pascual'],
            ['id' => 4, 'nombre' => 'Samuel', 'apellido' => 'Luna'],
            ['id' => 5, 'nombre' => 'Laura', 'apellido' => 'Reyes'],
            ['id' => 6, 'nombre' => 'Héctor', 'apellido' => 'Caballero'],
            ['id' => 7, 'nombre' => 'Ángela', 'apellido' => 'Blanco']
        ];
        return $pacientes;
    }
}