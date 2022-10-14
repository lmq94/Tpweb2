

<?php

class Controler{
    protected $model;
    protected $view;


    public function __construct($model, $view){
        $this->model = $model;
        $this->view= $view;
    }

    function redirect($lugar){
        header("Location: " . BASE_URL."$lugar"); 
    }

   




}