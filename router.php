<?php

require_once 'Controllers\clientControler.php';
require_once 'Controllers\userControler.php';
require_once 'Controllers\accountControler.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$action = 'home'; // accion por defecto, aparece el Home
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion 
$params = explode('/', $action);

// instancio aca el unico controller que tiene funcionalidades que no requieren logeo

$userControler = new ControlerUser();

// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $userControler->showHome();
        break;
    case 'registrar-usuario':
        $userControler->agregarUsuario();
        break;
    case 'insertar-usuario':
        $userControler->registro();
        break;
    case 'menu-login':
        $userControler->menuLogin();
        break;
    case 'verify':
        $userControler->verifyUser();
        break;
    case 'show-profile':
        $clientControler = new ControlerClient();
        $_SESSION['client']= $clientControler->getClientById($_SESSION['user']->id_client);
        $userControler->showProfile();
        break;
    case 'close-sesion':
        $userControler->logout();
        break;
    case 'show-clients':
        $clientControler = new ControlerClient();
        $clientControler->showClient();
        break;
    case 'delete-cliente':
        $clientControler = new ControlerClient();
        $id_client= $params[1];
        $clientControler->deleteClient($id);
        break;
    case 'show-accounts':
        $accountControler = new ControlerAccount();
        $accountControler->bankAccounts();
        break;
    case 'client-accounts':
        $accountControler = new ControlerAccount();
        $id_client= $params[1];
        $accountControler->showAccounts($id_client);
        break;
    case 'register-account':
        $accountControler = new ControlerAccount();
        $accountControler->accountForm();
        break;
    case 'open-account':
        $accountControler = new ControlerAccount();
        $accountControler->addAccount();
        break;
    case 'delete-account':
        $accountControler = new ControlerAccount();
        $id_account= $params[1];
        $accountControler->deleteAccount($id_account);
        break;
    default:
        echo('404 Page not found');
        break;
}













