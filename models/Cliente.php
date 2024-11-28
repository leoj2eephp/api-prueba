<?php
include_once 'ConexionBD.php';

class Cliente {
    public $id;
    public $nombre;

    public static function getAll() {
        /* $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM cliente");
        $clientes = [];

        foreach ($rs as $fila) {
            $cliente = new Cliente();
            $cliente->id = $fila["id"];
            $cliente->nombre = utf8_encode($fila["nombre"]);
            
            $clientes[] = $cliente;
        } */
        $clientes = [
            ['id' => 1, 'nombre' => 'José'],
            ['id' => 2, 'nombre' => 'Marta'],
            ['id' => 3, 'nombre' => 'Alberto'],
            ['id' => 4, 'nombre' => 'Natalia'],
            ['id' => 5, 'nombre' => 'Sergio'],
            ['id' => 6, 'nombre' => 'Carmen'],
            ['id' => 7, 'nombre' => 'Mario']
        ];
        return $clientes;
    }
}
