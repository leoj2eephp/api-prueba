<?php
include_once 'ConexionBD.php';

class Socio {
    public $id;
    public $nombre;
    public $apellido;

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM socio");
        $socios = [];

        foreach ($rs as $fila) {
            $socio = new Socio();
            $socio->id = $fila["id"];
            $socio->nombre = utf8_encode($fila["nombre"]);
            $socio->apellido = utf8_encode($fila["apellido"]);

            $socios[] = $socio;
        }
        
        return $socios;
    }
}