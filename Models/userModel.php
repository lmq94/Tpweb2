<?php


class UserModel {
    private $db;

    public function __construct() {
        // 1. abro conexión a la DB
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpweb2;charset=utf8', 'root', '');
    }

    function nuevoUsuario($username, $password, $email){
        $normal="normal";
        $userPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = $this->db->prepare("INSERT INTO user (username, Pass, email, rol) VALUES (?, ?, ?, ?)");
        $query->execute([$username, $userPassword, $email,$normal]);

        return $this->db->lastInsertId();
    }


    function getUserByUsername($username){
        $query = $this->db->prepare("SELECT* FROM user WHERE user.email =?");
        $query->execute([$username]);
        $user= $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }



}