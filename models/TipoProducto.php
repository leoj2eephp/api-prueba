<?php
include_once 'ConexionBD.php';

class TipoProducto {
    public $id;
    public $nombre;

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM tipoProducto");
        $tiposProductos = [];

        foreach ($rs as $fila) {
            $tipoProducto = new TipoProducto();
            $tipoProducto->id = $fila["id"];
            $tipoProducto->nombre = utf8_encode($fila["nombre"]);

            $tiposProductos[] = $tipoProducto;
        }
        
        return $tiposProductos;
    }
}