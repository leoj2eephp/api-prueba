<?php
include_once 'ConexionBD.php';

class Producto {
    public $id;
    public $nombre;
    public $stock;

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM producto");
        $productos = [];

        foreach ($rs as $fila) {
            $producto = new Producto();
            $producto->id = $fila["id"];
            $producto->nombre = utf8_encode($fila["nombre"]);
            $producto->stock = $fila["stock"];

            $productos[] = $producto;
        }
        
        return $productos;
    }
}