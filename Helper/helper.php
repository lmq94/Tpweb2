<?php

class Helper {
    function __construct()
    {
        
    }

     public static function checkAdmin () {
        if ($_SESSION['login']){
            if (isset($_SESSION['user']->rol) && $_SESSION['user']->rol == "admin") 
                { session_abort(); 
                return true;}
            else {
                session_abort();
                return false;}
        }
        else {  
            session_abort(); 
            return false;}
    }

    function isLogged() {
        session_start();
        if (!isset($_SESSION['login'])) {
            header("Location: " . BASE_URL . 'menu-login');
            die();
        }

    }



    public static function verify($id){
        if ($id==$_SESSION['id_client'])
            return true;
        else
            return false;
    }
    
    public static function getAppProps(){
        session_start();
        $props=[];
        $props['islogged']= isset($_SESSION['login']);
        $props['username']= Isset($_SESSION['username'])? $_SESSION["username"]:"invitado";
        $props ['pass']=isset($_SESSION['login']); 
        //voy a necesitar mas cosas jaja



        session_abort();
        return $props;

         
    }

}