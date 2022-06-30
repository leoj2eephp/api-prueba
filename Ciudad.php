<?php
include_once 'ConexionBD.php';

class Ciudad implements JsonSerializable {
    public $id;
    public $nombre;
    public $region_id;

    public function jsonSerialize(): mixed {
        return [
            "id" => $this->id,
            "nombre" => $this->nombre,
            "region_id" => $this->region_id
        ];
    }

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM ciudad");
        $ciudades = [];

        foreach ($rs as $fila) {
            $ciudad = new Ciudad();
            $ciudad->id = $fila["id"];
            $ciudad->nombre = $fila["nombre"];
            $ciudad->region_id = $fila["region_id"];

            $ciudades[] = $ciudad;
        }

        return $ciudades;
    }
}
