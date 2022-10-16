<?php

require_once "./Models/clientModel.php";
require_once "./Views/clientView.php";
require_once "./Controllers/MainControler.php";
require_once "./Helper/helper.php";


class ControlerClient extends Controler{
   


    public function __construct(){
        parent::__construct(new ClientModel,new ClientView());
        Helper::isLogged();

    
    }

    public function getClientById($id){
        return $this->model->getClientById($id);

    }
    
    public function showClient($editClient=false, $id_client=null) {
        if(helper::checkAdmin ()){
            $clients = $this->model->getAllItems("client");
            $this->view->showClients($clients, $editClient, $id_client); }
        else
            $this->redirect("home");
    
       
    }

    public function showClientForm(){
        if(helper::checkAdmin ()){
            $this->view->showCLientForm();
        }
        else
            $this->redirect("home");

    }

    function addClient() {
        // TODO: validar entrada de datos
        if(helper::checkAdmin ()){
            $dni = $_POST['dni'];
            $alias = $_POST['alias'];
            $city = $_POST['city'];

            $this->model->insertClient($dni, $alias, $city);
        }

        $this->redirect("show-clients");
    }

    function deleteClient($id) {
        $this->model->deleteClientById($id);
        $this->redirect("show-clients");
    }

    function updateClient($id_client){
        $alias = $_POST['alias'];
        $city = $_POST['city'];
        $this->model->updateClient($id_client, $alias, $city);
        $this->redirect("show-clients");      
    }

}