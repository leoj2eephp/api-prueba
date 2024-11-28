<?php
include_once 'ConexionBD.php';

class Telefono {
    public $numero;
    public $minutos_plan;
    public $cliente_id;
    public $cliente;

    public static function getAll() {
        /* $c = new ConexionBD();
        $rs = $c->bd->query("SELECT t.*, c.id AS cliente_id, c.nombre AS cliente_nombre
                            FROM telefono t INNER JOIN cliente c ON c.id = t.cliente_id");
        $telefonos = [];

        foreach ($rs as $fila) {
            $telefono = new Telefono();
            $telefono->numero = $fila["numero"];
            $telefono->minutos_plan = utf8_encode($fila["minutos_plan"]);
            $telefono->cliente_id = utf8_encode($fila["cliente_id"]);

            $cliente = new Cliente();
            $cliente->id = $fila["cliente_id"];
            $cliente->nombre = utf8_encode($fila["cliente_nombre"]);

            $telefono->cliente = $cliente;
            $telefonos[] = $telefono;
        } */
        $telefonos = [
            ['numero' => 1, 'minutos_plan' => 100, 'cliente_id' => 1],
            ['numero' => 2, 'minutos_plan' => 200, 'cliente_id' => 2],
            ['numero' => 3, 'minutos_plan' => 150, 'cliente_id' => 2],
            ['numero' => 4, 'minutos_plan' => 300, 'cliente_id' => 4],
            ['numero' => 5, 'minutos_plan' => 120, 'cliente_id' => 7],
            ['numero' => 6, 'minutos_plan' => 250, 'cliente_id' => 5],
            ['numero' => 7, 'minutos_plan' => 180, 'cliente_id' => 1]
        ];
        return $telefonos;
    }
}
