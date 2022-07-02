<?php
include_once 'ConexionBD.php';

class Persona {
    public $id;
    public $nombre;
    public $apellido;
    public $ciudad_id;

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM persona");
        $personas = [];

        foreach ($rs as $fila) {
            $persona = new Persona();
            $persona->id = $fila["id"];
            $persona->nombre = utf8_encode($fila["nombre"]);
            $persona->apellido = utf8_encode($fila["apellido"]);
            $persona->ciudad_id = $fila["ciudad_id"];

            $personas[] = $persona;
        }
        
        return $personas;
    }
}