<?php
class ConexionBD {

    public $bd;

    function __construct() {
        $this->bd = new PDO('mysql:host=localhost;dbname=frontend', "root", "root");
    }
    
}