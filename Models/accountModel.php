<?php


require_once "./Models\MainModel.php";

class AccountModel extends Model {

    public function __construct() {
        parent::__construct();
    }


    public function  getBankaccounts(){
        $query = $this->db->prepare("SELECT * FROM  account");
        $query->execute();
        $Accounts = $query->fetchall(PDO::FETCH_OBJ); 
        
        return $Accounts;
    }


    public function getAllAccountsbyClient($id_client) {
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM  account where account.id_client = ?");
        $query->execute([$id_client]);

        // 3. obtengo los resultados
        $Accounts = $query->fetchall(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $Accounts;
    }



    public function CreateAccount($dni, $alias, $city, $id_client) {
        $query = $this->db->prepare("INSERT INTO client (id_client, dni, alias, city) VALUES (?, ?, ?, ?)");
        $query->execute([$id_client, $dni, $alias, $city]);

        return $this->db->lastInsertId();
    }


    function deleteAccountId($id) {
        $query = $this->db->prepare('DELETE FROM account WHERE id_cuenta = ?');
        $query->execute([$id]);
    }

}   