<?php

require_once "./Models/userModel.php";
require_once "./Views/userView.php";
require_once "./Helper/helper.php";
require_once "./Controllers/MainControler.php";


class ControlerUser extends Controler{

    public function __construct(){

            parent::__construct(new UserModel,new UserView());
        }


    public function agregarUsuario(){
        $this->view->formularioUsuario();
    }

    public function menuLogin(){
        $this->view->showmeLogin();
    }

    function registro() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if (isset($_POST['username'],$_POST['password'], $_POST['email'], $_POST['id_user'])){
                $this->model->nuevoUsuario($_POST['username'],$_POST['password'], $_POST['email'], $_POST['id_user']);
            }
        }
        $this->redirect("registrar-usuario");
    }

    function verifyUser(){
        $username= $_POST['email'];
        $password= $_POST['password'];
        $user= $this->model->getUserByUsername($username);
         if($user && password_verify($password, $user->pass)){
            session_start();
            $_SESSION['user']=$user;
            $_SESSION['id_client']=$user->id_client;
            $_SESSION['login']=true;
            $this->redirect("home");
            
         }
         else {
            $this->view->showmeLogin("la contraseña ingresada es incorrecta");
         }
    }

    function showHome(){
        $this->view->Home();
    }

    function showProfile(){
        $this->view->showprofile();


    }

    function logout(){
        session_start();
        session_destroy();
        $this->redirect("home");
    }

                



}