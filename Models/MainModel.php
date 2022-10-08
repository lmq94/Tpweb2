<?php


class Model {
    protected $db;


    //Todos los hijos heredan la conexion a la DB
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpweb2;charset=utf8', 'root', '');
    }


}