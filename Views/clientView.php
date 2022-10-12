<?php

require_once "./Views/MainView.php";

class ClientView extends View {

    public function __construct() {
        parent::__construct();
    }


    function showClients($clients) { 
        
        $this->smarty->assign('clients', $clients);

        $this->smarty->display('ClientsList.tpl');
        
    

    }


    function showCLientForm(){

        $this->smarty->display('registerClient.tpl');

    }

}
