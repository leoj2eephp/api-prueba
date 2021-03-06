<?php

class Region {

    public $id;
    public $nombre;
    
    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM region");
        $regiones = [];

        foreach ($rs as $fila) {
            $region = new region();
            $region->id = $fila["id"];
            $region->nombre = utf8_encode($fila["nombre"]);

            $regiones[] = $region;
        }
        
        return $regiones;
    }

}