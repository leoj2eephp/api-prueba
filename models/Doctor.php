<?php
include_once 'ConexionBD.php';

class Doctor {
    public $id;
    public $nombre;
    public $especialidad;

    public static function getAll() {
        /* $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM doctor");
        $doctores = [];

        foreach ($rs as $fila) {
            $doctor = new Doctor();
            $doctor->id = $fila["id"];
            $doctor->nombre = utf8_encode($fila["nombre"]);
            $doctor->especialidad = utf8_encode($fila["especialidad"]);
            
            $doctores[] = $doctor;
        } */
        $doctores = [
            ['id' => 1, 'nombre' => 'Dr. López', 'especialidad' => 'Cardiología'],
            ['id' => 2, 'nombre' => 'Dra. Sánchez', 'especialidad' => 'Neurología'],
            ['id' => 3, 'nombre' => 'Dr. Torres', 'especialidad' => 'Pediatría'],
            ['id' => 4, 'nombre' => 'Dra. Ruiz', 'especialidad' => 'Dermatología'],
            ['id' => 5, 'nombre' => 'Dr. Fernández', 'especialidad' => 'Traumatología'],
            ['id' => 6, 'nombre' => 'Dra. Moreno', 'especialidad' => 'Oftalmología'],
            ['id' => 7, 'nombre' => 'Dr. Díaz', 'especialidad' => 'Gastroenterología']
        ];
        return $doctores;
    }
}