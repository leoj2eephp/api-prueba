<?php
include_once 'ConexionBD.php';

class Libro {
    public $id;
    public $titulo;
    public $disponible;

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM libro");
        $libros = [];

        foreach ($rs as $fila) {
            $libro = new Libro();
            $libro->id = $fila["id"];
            $libro->titulo = utf8_encode($fila["titulo"]);
            $libro->disponible = boolval($fila["disponible"]);

            $libros[] = $libro;
        }
        
        return $libros;
    }
}