<?php
/* Smarty version 4.2.1, created on 2022-10-13 20:49:10
  from 'C:\xampp\htdocs\Tpweb2\templates\panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63485da6e9adb1_97990441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbb2076eb76d91b8c06cbf32b3b89e8362738c7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\panel.tpl',
      1 => 1665504434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63485da6e9adb1_97990441 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container p-3">

    <button class="btn btn-success mx-3 mt-3 m-3" data-bs-toggle="offcanvas" data-bs-target="#intro">Menu de usuario</button>

    <div class="offcanvas offcanvas-start" id="intro">
        <h3> Bienvenido <?php echo $_SESSION['user']->username;?>
</h3>
        <div class="offcanvas-header">
        </div>
        <div class="offcanvas-body">
            <a href="show-profile"><p>Perfil</p></a>
                <?php if ($_SESSION['user']->rol == "admin") {?>
                <a href="show-clients"><p>Mostrar clientes</p></a>
                <a href="show-accounts"><p>Mostrar cuentas</p></a>
            <?php } else { ?>
                <a href='client-accounts/<?php echo $_SESSION['user']->id_client;?>
'> <p>Tus cuentas</p></a>
            <?php }?>
            <p>Configuracion</p>
            <a href="close-sesion"><button class="btn btn-primary">Cerrar sesion</button></a>
        </div>
    </div>




<?php }
}
