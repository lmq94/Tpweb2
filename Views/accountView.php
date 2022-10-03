<?php

require_once 'smarty-master\libs\Smarty.class.php';
 
class AccountView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }



    function showAccounts($Accounts) {

        $this->smarty->assign('accounts', $Accounts);

        $this->smarty->display('AccountList.tpl');
    
        
    }


}