<?php
/* Smarty version 4.2.1, created on 2022-10-16 17:12:58
  from 'C:\xampp\htdocs\Tpweb2\templates\loginMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c1f7a490786_72284976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '235287a3158e1a18c02e542d1df5927292134dfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\loginMenu.tpl',
      1 => 1665933176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c1f7a490786_72284976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






<div class="container mt-4 bg-light">

    <form class=" container justify-content-center m-4" action=verify method="POST">
        <h4> Bienvenido al banco de Gesell </h2>
        <div class="col-md-4">
            <label for="email" class="form-label"> Correo electronico </label>
            <input type="email" class="form-control" name="email"  required>
        </div>
        <div class="col-md-4 mb-2 ">
            <label for="password" class="form-label"> Contraseña</label>
            <input type="password" class="form-control" name="password"  required>
        </div>
        <div class="">
            <input type="checkbox" class="form-check-label" name="connected">
            <label for="connected" class="form-check-label"> Mantenerme conectado</label>
        </div>
        <div class="col-md-4"> 
            <button type="submit" class="btn btn-primary mt-4 ">Iniciar sesion </button>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger col-md-4  mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>

        <div class="mt-3 "> 
            <span>No tenes cuenta? <a href="registrar-usuario"> Registrarse </a> </span>
        </div>
    </form>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>














<?php }
}
