<?php

require_once "./Models/userModel.php";
require_once "./Views/userView.php";


class ControlerUser{
    private $model;
    private $view;


    public function __construct(){
        $this->model = new UserModel();
        $this->view  = new UserView();
    }


    public function agregarUsuario(){
        $this->view->formularioUsuario();
    }

    public function menuLogin(){
        $this->view->showmeLogin();
    }

    function registro() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if (isset($_POST['username'],$_POST['password'], $_POST['email'])){
                $this->model->nuevoUsuario($_POST['username'],$_POST['password'], $_POST['email']);
            }
        }
        header('location:registrar-usuario');
    }


    function verifyUser(){
        $username= $_POST['email'];
        $password= $_POST['password'];

        $user= $this->model->getUserByUsername($username);
         if(!empty($user) && password_verify($password, $user->pass)){
            session_start();
            $_SESSION['id_user']=$user->id_user;
            $_SESSION['username']=$user->username;
            header('location: menu-login');
         }
         else
            $this->view->showmeLogin("Login incorrecto");
    }

                



}