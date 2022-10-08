<?php

class Helper {
    function __construct()
    {
        
    }

     public static function checkAdmin () {
        if ($_SESSION['login']){
            if (isset($_SESSION['rol']) && $_SESSION['rol'] == "admin") 
                { session_abort(); 
                return true;}
            else {
                session_abort();
                return false;}
        }
        else {  
            echo "ramera";
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