<?php


class Model {
    protected $db;


    //Todos los hijos heredan la conexion a la DB
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpweb2;charset=utf8', 'root', '');
    }


    public function getAllItems($nombreTabla) {
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM $nombreTabla");
        $query->execute();

        // 3. obtengo los resultados
        $item = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $item;
    }



}