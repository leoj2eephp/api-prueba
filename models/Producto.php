<?php
include_once 'ConexionBD.php';

class Producto {
    public $id;
    public $nombre;
    public $stock;
    public $tipo_producto_id;
    public $tipoProducto;

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT p.*, tp.id AS tipo_producto_id, tp.nombre AS tipo_producto_nombre
                            FROM producto p
                            INNER JOIN tipo_producto tp ON tp.id = p.tipo_producto_id");
        $productos = [];

        foreach ($rs as $fila) {
            $producto = new Producto();
            $producto->id = $fila["id"];
            $producto->nombre = utf8_encode($fila["nombre"]);
            $producto->stock = $fila["stock"];
            $producto->tipo_producto_id = $fila["tipo_producto_id"];

            $tipoProducto = new TipoProducto();
            $tipoProducto->id = $fila["tipo_producto_id"];
            $tipoProducto->nombre = utf8_encode($fila["tipo_producto_nombre"]);

            $producto->tipoProducto = $tipoProducto;
            $productos[] = $producto;
        }
        
        return $productos;
    }
}