
<?php

require_once "./Views/MainView.php";

class UserView extends View {

    public function __construct() {
        parent::__construct();
    }


    function showClients($Users) { 
        
        $this->smarty->assign('users', $Users);

        $this->smarty->display('UsersList.tpl');

    }

   function formularioUsuario(){
        $this->smarty->display('registerUser.tpl');

   }

   function showmeLogin($error=null){
    $this->smarty->assign("error", $error);
    $this->smarty->display('loginMenu.tpl');
   }


   function Home(){
        $this->smarty->display('home.tpl');
   }

   function showProfile(){
    $this->smarty->display('PerfilUsuario.tpl');
   }

  

}




