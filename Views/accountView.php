<?php

require_once "./Views/MainView.php";

 
class AccountView extends View{

    public function __construct() {
        parent::__construct();
    }


    function showForm($clients){
        $this->smarty->assign('clients',$clients);
        $this->smarty->display('registerAccount.tpl');
    }

    function showAccounts($accounts,$editAccount=false,$id_account=null) {

        $this->smarty->assign('accounts', $accounts);
        $this->smarty->assign('editAccount', $editAccount); 
        $this->smarty->assign('id_account', $id_account);
        $this->smarty->display('AccountList.tpl');
    
        
    }


}