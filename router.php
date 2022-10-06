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

// instancio el unico controller que existe por ahora
$clientControler = new ControlerClient();
$userControler = new ControlerUser();
$accountControler = new ControlerAccount();

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
    case 'cerrar-sesion':
        $userControler->logout();
        break;
    case 'mostrar-clientes':
        $clientControler->showClient();
        break;
    case 'mostrar-cuentas':
        $accountControler->bankAccounts();
        break;
    default:
        echo('404 Page not found');
        break;
}













