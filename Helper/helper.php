<?php

class Helper {
    function __construct()
    {
        
    }

    function checkAdmin () {
        session_start();
        if ($_SESSION['logged']){
            if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'admin') 
                { session_abort(); return true;}
            else { 
                session_abort();
                return false;}
        }
        else {  session_abort(); 
                return false;}
    }

    function isLogged() {
        session_start();
        if ( isset($_SESSION['logged'])){   
            session_abort(); 
            return true;}
        else {  
            session_abort();
            return false;}

    }
    
    public static function getAppProps(){
        session_start();
        $props=[];
        $props['islogged']= isset($_SESSION['login']);
        $props['username']= Isset($_SESSION['username'])? $_SESSION["username"]:"invitado";
        
        //voy a necesitar mas cosas jaja



        session_abort();
        return $props;

         
    }

}