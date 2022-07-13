<?php
include_once 'ConexionBD.php';

class Alumno {
    public $id;
    public $nombre;
    public $apellido;

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM alumno");
        $alumnos = [];

        foreach ($rs as $fila) {
            $alumno = new Alumno();
            $alumno->id = $fila["id"];
            $alumno->nombre = utf8_encode($fila["nombre"]);
            $alumno->apellido = utf8_encode($fila["apellido"]);
            
            $alumnos[] = $alumno;
        }
        
        return $alumnos;
    }
}