<?php

require_once 'smarty-master/libs/Smarty.class.php';

class ClientView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }


    function showClients($Clients) { 
        
        $this->smarty->assign('clients', $Clients);

        $this->smarty->display('ClientsList.tpl');
    

    }
}
