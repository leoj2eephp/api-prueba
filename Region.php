<?php

class Region {

    public $id;
    public $nombre;
    
    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->conn->query("SELECT * FROM region");
        $regiones = [];

        foreach ($rs as $fila) {
            $region = new region();
            $region->id = $fila["id"];
            $region->nombre = $fila["nombre"];

            $regiones[] = $region;
        }
        
        return $regiones;
    }

}