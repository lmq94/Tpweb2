<?php


class ClientModel {
    private $db;

    public function __construct() {
        // 1. abro conexión a la DB
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpweb2;charset=utf8', 'root', '');
    }

    public function getAllClient() {
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM client");
        $query->execute();

        // 3. obtengo los resultados
        $Client = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $Client;
    }


    public function insertClient($dni, $alias, $city) {
        $query = $this->db->prepare("INSERT INTO client (dni, alias, city) VALUES (?, ?, ?)");
        $query->execute([$dni, $alias, $city]);

        return $this->db->lastInsertId();
    }


    function deleteClientById($id) {
        $query = $this->db->prepare('DELETE FROM client WHERE id_cliente = ?');
        $query->execute([$id]);
    }





    




}