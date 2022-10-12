<?php

require_once "./Models/accountModel.php";
require_once "./Views/accountView.php";
require_once "./Controllers/MainControler.php";
require_once "./Helper/helper.php";

class ControlerAccount extends Controler{

     private ClientModel $clientModel;
   

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

    public function bankAccounts() {
        if(helper::checkAdmin ()){
            $Accounts = $this->model->getBankaccounts();
            $this->view->showAccounts($Accounts);
        }
    }

    function accountForm(){
        $clients=$this->clientModel->getAllClient();
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
        $this->redirigir( $id_client);
    }

        

    function redirigir($id){
        if(helper::checkAdmin ())
            header("Location: " . BASE_URL . "show-accounts");
        else
            header("Location: " . BASE_URL . "client-accounts/$id"); 
    }

    


    function deleteAccount($id) {
        $this->model->deleteAccountId($id);
        $id_client= $_SESSION['id_client'];
        $this->redirigir($id_client);
    }


}