
<?php

require_once 'smarty-master/libs/Smarty.class.php';

class UserView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
        $this->smarty->assign('props', Helper::getAppProps());
    }


    function showClients($Users) { 
        
        $this->smarty->assign('users', $Users);

        $this->smarty->display('UsersList.tpl');
    

    }

   function formularioUsuario(){
        $this->smarty->display('registerUser.tpl');

   }

   function showmeLogin(){
     $this->smarty->display('loginMenu.tpl');
   }


   function Home(){
        $this->smarty->display('home.tpl');
   }

  

}




