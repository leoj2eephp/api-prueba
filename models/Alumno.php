<?php
include_once 'ConexionBD.php';

class Alumno {
    public $id;
    public $nombre;
    public $apellido;

    public static function getAll() {
        /* $c = new ConexionBD();
        $rs = $c->bd->query("SELECT * FROM alumno");
        $alumnos = [];

        foreach ($rs as $fila) {
            $alumno = new Alumno();
            $alumno->id = $fila["id"];
            $alumno->nombre = utf8_encode($fila["nombre"]);
            $alumno->apellido = utf8_encode($fila["apellido"]);
            
            $alumnos[] = $alumno;
        } */
        $alumnos = [
            ['id' => 1, 'nombre' => 'Juan', 'apellido' => 'Pérez'],
            ['id' => 2, 'nombre' => 'Ana', 'apellido' => 'Gómez'],
            ['id' => 3, 'nombre' => 'Luis', 'apellido' => 'Ramírez'],
            ['id' => 4, 'nombre' => 'María', 'apellido' => 'López'],
            ['id' => 5, 'nombre' => 'Carlos', 'apellido' => 'Sánchez'],
            ['id' => 6, 'nombre' => 'Lucía', 'apellido' => 'Mendoza'],
            ['id' => 7, 'nombre' => 'Sofía', 'apellido' => 'Fernández']
        ];
        
        return $alumnos;
    }
}