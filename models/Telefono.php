<?php
include_once 'ConexionBD.php';

class Telefono {
    public $numero;
    public $minutos_plan;
    public $cliente_id;
    public $cliente;

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT t.*, c.id AS cliente_id, c.nombre AS cliente_nombre
                            FROM telefono t INNER JOIN cliente c ON c.id = t.cliente_id");
        $telefonos = [];

        foreach ($rs as $fila) {
            $telefono = new Telefono();
            $telefono->numero = $fila["id"];
            $telefono->minutos_plan = utf8_encode($fila["minutos_plan"]);
            $telefono->cliente_id = utf8_encode($fila["cliente_id"]);

            $cliente = new Cliente();
            $cliente->id = $fila["cliente_id"];
            $cliente->nombre = utf8_encode($fila["cliente_nombre"]);

            $telefono->cliente = $cliente;
            $telefonos[] = $telefono;
        }

        return $telefonos;
    }
}
