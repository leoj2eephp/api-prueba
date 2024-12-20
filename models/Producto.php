<?php
include_once 'ConexionBD.php';

class Producto {
    public $id;
    public $nombre;
    public $stock;
    public $tipo_producto_id;
    public $tipoProducto;

    public static function getAll() {
        /* $c = new ConexionBD();
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
        } */
        $productos = [
            ['id' => 1, 'nombre' => 'Laptop', 'stock' => 10, 'precio' => 850000],
            ['id' => 2, 'nombre' => 'Teclado', 'stock' => 15, 'precio' => 25000],
            ['id' => 3, 'nombre' => 'Ratón', 'stock' => 20, 'precio' => 15000],
            ['id' => 4, 'nombre' => 'Monitor', 'stock' => 8, 'precio' => 220000],
            ['id' => 5, 'nombre' => 'Impresora', 'stock' => 5, 'precio' => 130000],
            ['id' => 6, 'nombre' => 'Cámara', 'stock' => 12, 'precio' => 550000],
            ['id' => 7, 'nombre' => 'Auriculares', 'stock' => 25, 'precio' => 45000]
        ];
        return $productos;
    }
}