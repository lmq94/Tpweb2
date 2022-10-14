<?php

require_once "./Models/accountModel.php";
require_once "./Views/accountView.php";
require_once "./Controllers/MainControler.php";
require_once "./Helper/helper.php";

class ControlerAccount extends Controler{

    public function __construct(){
            parent::__construct(new AccountModel,new AccountView());
            $this->clientModel= new ClientModel();

        }
    
    public function showAccounts($id_client) {
        if(Helper::verify($id_client)){
            $Accounts = $this->model->getAllAccountsbyClient($id_client);
            $this->view->showAccounts($Accounts);
        }
    }

    public function bankAccounts($editAccount=false,$id_account=null) {
        if(helper::checkAdmin ()){
            $accounts = $this->model->getAllItems("account");
            $this->view->showAccounts($accounts,$editAccount,$id_account);
        }
    }

    function accountForm(){
        $clients=$this->clientModel->getAllItems("client");
        $this->view->showForm($clients);
        
    }


    function addAccount() {
        // TODO: validar entrada de datos
        if(helper::checkAdmin ()){
            $id_client =$_POST['id_client'];
        }
        else {$id_client = $_SESSION['id_client'];
        }

        $amount = $_POST['amount'];
        $type_account = $_POST['type_account'];
        $coin = $_POST['coin'];

        $this->model->CreateAccount($id_client, $amount,$type_account, $coin);
        $this->redirect("show-accounts/$id_client");
    }

        

    function updateAccount($id_account){
        $amount = $_POST['amount'];
        $type_account = $_POST['type_account'];
        $coin = $_POST['coin'];

        $this->model->updateAccount($id_account, $coin, $amount, $type_account);
        $this->redirect("show-accounts");

    }

    


    function deleteAccount($id) {
        $this->model->deleteAccountId($id);
        $id_client= $_SESSION['id_client'];
        $this->redirect("show-accounts/$id_client");
    }


}