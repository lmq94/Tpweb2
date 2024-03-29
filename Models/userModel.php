<?php

require_once "./Models\MainModel.php";



class UserModel extends Model{

    public function __construct() {
        parent::__construct();
    }

    function nuevoUsuario($username, $password, $email, $id_client){
        $normal="normal";
        $userPassword = password_hash($password, PASSWORD_BCRYPT); 
        $query = $this->db->prepare("INSERT INTO user (id_client, username, Pass, email, rol) VALUES (?, ?, ?, ?, ?)");  
        $query->execute([$id_client,$username, $userPassword, $email,$normal]); 
        return $this->db->lastInsertId();
    }

    function getUserByUsername($username){
        $query = $this->db->prepare("SELECT* FROM user WHERE user.email =?");
        $query->execute([$username]);
        $user= $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }



}