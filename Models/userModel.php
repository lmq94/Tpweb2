<?php

require_once "./Models\MainModel.php";



class UserModel extends Model{

    public function __construct() {
        parent::__construct();
    }

    function nuevoUsuario($username, $password, $email){
        $normal="normal";
        $userPassword = password_hash($password, PASSWORD_BCRYPT); //hASEHO PASS
        $query = $this->db->prepare("INSERT INTO user (username, Pass, email, rol) VALUES (?, ?, ?, ?)");  //creo la peticion
        $query->execute([$username, $userPassword, $email,$normal]); //ejecuto peticion

        return $this->db->lastInsertId();
    }

    function getUserByUsername($username){
        $query = $this->db->prepare("SELECT* FROM user WHERE user.email =?");
        $query->execute([$username]);
        $user= $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }



}