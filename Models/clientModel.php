<?php

require_once "./Models\MainModel.php";


class ClientModel extends Model {
  

    public function __construct() {
        parent::__construct();
        

    }

    public function getAllClient() {
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM client");
        $query->execute();

        // 3. obtengo los resultados
        $Client = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $Client;
    }


    public function getClientById($id){
        $query = $this->db->prepare("SELECT* FROM client WHERE client.id_client =?");
        $query->execute([$id]);
        $user= $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }


    public function insertClient($dni, $alias, $city) {
        $query = $this->db->prepare("INSERT INTO client (dni, alias, city) VALUES (?, ?, ?)");
        $query->execute([$dni, $alias, $city]);

        return $this->db->lastInsertId();
    }


    function deleteClientById($id) {
        $query = $this->db->prepare('DELETE FROM client WHERE id_client = ?');
        $query->execute([$id]);
    }





    




}