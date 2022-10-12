<?php
/* Smarty version 4.2.1, created on 2022-10-12 22:01:23
  from 'C:\xampp\htdocs\Tpweb2\templates\PerfilUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63471d1341e019_61616888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '855fb04929b007fed46faa7970718ad2f79031c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\PerfilUsuario.tpl',
      1 => 1665540977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:panel.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63471d1341e019_61616888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">

    <?php $_smarty_tpl->_subTemplateRender("file:panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="row">
        <div class="col-12 my-3 pt-3 shadow">
            <h1>Usuario <?php echo $_SESSION['user']->username;?>
</h1>
            <h3>Correo electronico: <?php echo $_SESSION['user']->email;?>
</h3>
            <h3> Rango: <?php echo $_SESSION['user']->rol;?>
 </h3>
        </div>
        <?php if (!($_SESSION['user']->rol == "admin")) {?>
            <div class="col-12 my-3 pt-3 shadow">
                <h2>Tus datos de cliente</h2>
                <h3> Id de cliente : <?php echo $_SESSION['client']->id_client;?>
 </h3>
                <h3>Nombre: <?php echo $_SESSION['client']->alias;?>
</h3>
                <h3>Dni: <?php echo $_SESSION['client']->dni;?>
</h3>
                <h3>Ciudad: <?php echo $_SESSION['client']->city;?>
</h3>
            </div>
        <?php }?>
    </div>
</div>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
