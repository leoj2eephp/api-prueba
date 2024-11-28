<?php
include_once 'ConexionBD.php';

class Libro {
    public $id;
    public $titulo;
    public $disponible;

    public static function getAll() {
        /* $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM libro");
        $libros = [];

        foreach ($rs as $fila) {
            $libro = new Libro();
            $libro->id = $fila["id"];
            $libro->titulo = utf8_encode($fila["titulo"]);
            $libro->disponible = boolval($fila["disponible"]);

            $libros[] = $libro;
        } */
        $libros = [
            ['id' => 1, 'titulo' => 'El Quijote', 'disponible' => true],
            ['id' => 2, 'titulo' => 'Papelucho', 'disponible' => false],
            ['id' => 3, 'titulo' => 'Cien años de soledad', 'disponible' => true],
            ['id' => 4, 'titulo' => 'Fahrenheit 451', 'disponible' => false],
            ['id' => 5, 'titulo' => 'Hamlet', 'disponible' => true],
            ['id' => 6, 'titulo' => 'La Odisea', 'disponible' => true],
            ['id' => 7, 'titulo' => 'El principito', 'disponible' => false]
        ];
        return $libros;
    }
}