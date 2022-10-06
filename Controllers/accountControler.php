<?php

require_once "./Models/accountModel.php";
require_once "./Views/accountView.php";


class ControlerAccount{
    private $model;
    private $view;


    public function __construct(){
        $this->model = new AccountModel();
        $this->view  = new AccountView();
    }
    
    public function showAccounts($id_client) {
        $Accounts = $this->model->getAllAccountsbyClient($id_client);
        $this->view->showAccounts($Accounts);
    }

    public function bankAccounts() {
        $Accounts = $this->model->getBankaccounts();
        $this->view->showAccounts($Accounts);
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