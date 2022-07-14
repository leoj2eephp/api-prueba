<?php
include_once 'ConexionBD.php';

class Doctor {
    public $id;
    public $nombre;
    public $especialidad;

    public static function getAll() {
        $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM doctor");
        $doctores = [];

        foreach ($rs as $fila) {
            $doctor = new Doctor();
            $doctor->id = $fila["id"];
            $doctor->nombre = utf8_encode($fila["nombre"]);
            $doctor->especialidad = utf8_encode($fila["especialidad"]);
            
            $doctores[] = $doctor;
        }
        
        return $doctores;
    }
}