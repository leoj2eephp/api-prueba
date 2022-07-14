<?php
include_once 'ConexionBD.php';

class Paciente {
    public $id;
    public $nombre;
    public $apellido;

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM paciente");
        $pacientes = [];

        foreach ($rs as $fila) {
            $paciente = new Paciente();
            $paciente->id = $fila["id"];
            $paciente->nombre = utf8_encode($fila["nombre"]);
            $paciente->apellido = utf8_encode($fila["apellido"]);
            
            $pacientes[] = $paciente;
        }
        
        return $pacientes;
    }
}