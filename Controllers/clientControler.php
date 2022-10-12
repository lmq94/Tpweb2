<?php

require_once "./Models/clientModel.php";
require_once "./Views/clientView.php";
require_once "./Controllers/MainControler.php";
require_once "./Helper/helper.php";


class ControlerClient extends Controler{
   


    public function __construct(){
        parent::__construct(new ClientModel,new ClientView());
        $helper = new Helper();
        $helper->isLogged();

    
    }


    public function getClientById($id){
        return $this->model->getClientById($id);

    }
    
    public function showClient() {
        if(helper::checkAdmin ()){
            $clients = $this->model->getAllClient();
            $this->view->showClients($clients);
        }
    }

    public function showClientForm(){
        if(helper::checkAdmin ()){
            $this->view->showCLientForm();
        }

    }


    function addClient() {
        // TODO: validar entrada de datos
        if(helper::checkAdmin ()){
            $dni = $_POST['dni'];
            $alias = $_POST['alias'];
            $city = $_POST['city'];

            $this->model->insertClient($dni, $alias, $city);
        }

        header("Location: " . BASE_URL."show-clients"); 
    }



    function deleteClient($id) {
        $this->model->deleteClientById($id);
        header("Location: " . BASE_URL. "show-clients");
    }



}