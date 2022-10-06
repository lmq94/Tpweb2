<?php

require_once 'smarty-master\libs\Smarty.class.php';
 
class AccountView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('props', Helper::getAppProps()); 
    }



    function showAccounts($accounts) {

        $this->smarty->assign('accounts', $accounts);

        $this->smarty->display('AccountList.tpl');
    
        
    }


}