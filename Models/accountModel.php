<?php


class AccountModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpweb2;charset=utf8', 'root', '');
    }


    public function getAllAccountsbyClient($id_client) {
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM  account where account.id_account = $id_client");
        $query->execute();

        // 3. obtengo los resultados
        $Accounts = $query->fetchall(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $Accounts;
    }



    public function CreateAccount($dni, $alias, $city, $id_client) {
        $query = $this->db->prepare("INSERT INTO client (dni, alias, city, id_client) VALUES (?, ?, ?, ?)");
        $query->execute([$dni, $alias, $city, $id_client]);

        return $this->db->lastInsertId();
    }


    function deleteAccountId($id) {
        $query = $this->db->prepare('DELETE FROM account WHERE id_cuenta = ?');
        $query->execute([$id]);
    }

}   