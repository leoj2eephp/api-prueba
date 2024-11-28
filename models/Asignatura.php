<?php
include_once 'ConexionBD.php';

class Asignatura {
    public $id;
    public $nombre;

    public static function getAll() {
        /* $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM asignatura");
        $asignaturas = [];

        foreach ($rs as $fila) {
            $asignatura = new Asignatura();
            $asignatura->id = $fila["id"];
            $asignatura->nombre = utf8_encode($fila["nombre"]);

            $asignaturas[] = $asignatura;
        } */
        
        $asignaturas = [
            ['id' => 1, 'nombre' => 'Matemáticas'],
            ['id' => 2, 'nombre' => 'Programación'],
            ['id' => 3, 'nombre' => 'Base de Datos'],
            ['id' => 4, 'nombre' => 'Frontend'],
            ['id' => 5, 'nombre' => 'Backend'],
            ['id' => 6, 'nombre' => 'Android'],
            ['id' => 7, 'nombre' => 'SO']
        ];
        return $asignaturas;
    }
}