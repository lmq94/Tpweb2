<?php

require_once "./Models/userModel.php";
require_once "./Views/userView.php";
require_once "./Helper/helper.php";


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

        echo $password;

        $user= $this->model->getUserByUsername($username);
         if($user && !password_verify($password, $user->pass)){
            session_start();
            $_SESSION['id_user']=$user->id_user;
            $_SESSION['username']=$user->username;
            $_SESSION['login']=true;
            header('location: home');
            
         }
         else {
            $this->view->showmeLogin();
            echo "carreto puta";
         }
    }


    function showHome(){
        $this->view->Home();
    }


    function logout(){
        session_start();
        session_destroy();
        header('location: home');
    }

                



}