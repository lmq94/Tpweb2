<?php


class Model {
    protected $db;

    public function __construct() {
        // 1. abro conexión a la DB
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpweb2;charset=utf8', 'root', '');
    }


}