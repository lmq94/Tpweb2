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
    
    public function showClient() {
        $clients = $this->model->getAllClient();
        $this->view->showClients($clients);
        
    }


    function addClient() {
        // TODO: validar entrada de datos

        $dni = $_POST['dni'];
        $alias = $_POST['alias'];
        $city = $_POST['city'];

        $this->model->insertClient($dni, $alias, $city);

        header("Location: " . BASE_URL); 
    }



    function deleteClient($id) {
        $this->model->deleteClientById($id);
        header("Location: " . BASE_URL);
    }



}