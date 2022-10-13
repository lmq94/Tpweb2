<?php

require_once "./Views/MainView.php";

class ClientView extends View {

    public function __construct() {
        parent::__construct();
    }


    function showClients($clients,$editClient=null, $id_client=null) { 
        
        $this->smarty->assign('clients', $clients);
        $this->smarty->assign('editClient', $editClient); 
        $this->smarty->assign('id_client', $id_client);
        $this->smarty->display('ClientsList.tpl');
        
    

    }


    function showCLientForm(){

        $this->smarty->display('registerClient.tpl');

    }

}
