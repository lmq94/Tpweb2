<?php

require_once "./Views/MainView.php";

class ClientView extends View {

    public function __construct() {
        parent::__construct();
    }


    function showClients($Clients) { 
        
        $this->smarty->assign('clients', $Clients);

        $this->smarty->display('ClientsList.tpl');
    

    }


    function showCLientForm(){

        $this->smarty->display('registerClient.tpl');

    }

}
