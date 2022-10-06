<?php
/* Smarty version 4.2.1, created on 2022-10-06 03:11:23
  from 'C:\xampp\htdocs\Tpweb2\templates\panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633e2b3ba43dc6_92086938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbb2076eb76d91b8c06cbf32b3b89e8362738c7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\panel.tpl',
      1 => 1665018682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633e2b3ba43dc6_92086938 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container p-3">

    <button class="btn btn-success mx-3 mt-3 m-3" data-bs-toggle="offcanvas" data-bs-target="#intro">Menu de usuario</button>

    <div class="offcanvas offcanvas-start" id="intro">
        <h3> Bienvenido <?php echo $_smarty_tpl->tpl_vars['props']->value['username'];?>
</h3>
        <div class="offcanvas-header">
        </div>
        <div class="offcanvas-body">
            <p>Perfil</p>
            <a href="mostrar-cuentas"><p>Mostrar clientes</p></a>
            <p>Mostrar cuentas</p>
            <p>Configuracion</p>
            <a href="cerrar-sesion"><button class="btn btn-primary">Cerrar sesion</button></a>
        </div>
    </div>




<?php }
}
