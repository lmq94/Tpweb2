<?php

require_once 'smarty-master/libs/Smarty.class.php';
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
$ClientControler = new ControlerClient();
$UserControler = new ControlerUser();
$AccountControler = new ControlerAccount();
$smarty= new Smarty();


// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $smarty->display('Home.tpl');
        break;
    case 'registrar-usuario':
        $UserControler->agregarUsuario();
        break;
    case 'insertar-usuario':
        $UserControler->registro();
        break;
        case 'menu-login':
            $UserControler->menuLogin();
            break;
        case 'verify':
            $UserControler->verifyUser();
            break;
    default:
        echo('404 Page not found');
        break;
}













