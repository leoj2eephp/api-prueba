<?php
include_once 'ConexionBD.php';

class Cliente {
    public $id;
    public $nombre;

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM cliente");
        $clientes = [];

        foreach ($rs as $fila) {
            $cliente = new Cliente();
            $cliente->id = $fila["id"];
            $cliente->nombre = utf8_encode($fila["nombre"]);
            
            $clientes[] = $cliente;
        }
        
        return $clientes;
    }
}