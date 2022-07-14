<?php
include_once 'ConexionBD.php';

class Asignatura {
    public $id;
    public $nombre;

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM asignatura");
        $asignaturas = [];

        foreach ($rs as $fila) {
            $asignatura = new Asignatura();
            $asignatura->id = $fila["id"];
            $asignatura->nombre = utf8_encode($fila["nombre"]);

            $asignaturas[] = $asignatura;
        }
        
        return $asignaturas;
    }
}