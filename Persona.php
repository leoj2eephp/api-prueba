<?php
include_once 'ConexionBD.php';
include_once 'Ciudad.php';

class Persona {
    public $id;
    public $nombre;
    public $apellido;
    public $ciudad_id;
    public $ciudad;

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT p.*, c.id AS 'id_ciudad', c.nombre AS 'nombre_ciudad' FROM persona p INNER JOIN ciudad c ON p.ciudad_id = c.id");
        $personas = [];

        foreach ($rs as $fila) {
            $persona = new Persona();
            $persona->id = $fila["id"];
            $persona->nombre = utf8_encode($fila["nombre"]);
            $persona->apellido = utf8_encode($fila["apellido"]);
            $persona->ciudad_id = $fila["ciudad_id"];
            
            $ciudad = new Ciudad();
            $ciudad->id = $fila["id_ciudad"];
            $ciudad->nombre = utf8_encode($fila["nombre_ciudad"]);

            $persona->ciudad = $ciudad; 
            $personas[] = $persona;
        }
        
        print_r($personas);
        die;
        
        return $personas;
    }
}