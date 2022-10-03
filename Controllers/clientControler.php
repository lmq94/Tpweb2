<?php

require_once "./Models/clientModel.php";
require_once "./Views/clientView.php";


class ControlerClient{
    private $model;
    private $view;


    public function __construct(){
        $this->model = new ClientModel();
        $this->view  = new ClientView();
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