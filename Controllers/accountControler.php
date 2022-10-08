<?php

require_once "./Models/accountModel.php";
require_once "./Views/accountView.php";
require_once "./Controllers/MainControler.php";
require_once "./Helper/helper.php";

class ControlerAccount extends Controler{
   


    public function __construct(){
            parent::__construct(new AccountModel,new AccountView());

        }
    
    public function showAccounts($id_client) {
        $Accounts = $this->model->getAllAccountsbyClient($id_client);
        $this->view->showAccounts($Accounts);
    }

    public function bankAccounts() {
        if(helper::checkAdmin ()){
            $Accounts = $this->model->getBankaccounts();
            $this->view->showAccounts($Accounts);
        }
    }


    function addAccount() {
        // TODO: validar entrada de datos
        $id_client = $_POST['id_client'];
        $dni = $_POST['dni'];
        $alias = $_POST['alias'];
        $city = $_POST['city'];

        $this->model->CreateAccount($dni, $alias, $city, $id_client);

        header("Location: " . BASE_URL); 
    }



    function deleteAccount($id) {
        $this->model->deleteAccountId($id);
        header("Location: " . BASE_URL);
    }


}