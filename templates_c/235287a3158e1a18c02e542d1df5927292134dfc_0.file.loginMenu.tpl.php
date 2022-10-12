<?php
/* Smarty version 4.2.1, created on 2022-10-12 22:32:56
  from 'C:\xampp\htdocs\Tpweb2\templates\loginMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634724789ffe92_14766631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '235287a3158e1a18c02e542d1df5927292134dfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\loginMenu.tpl',
      1 => 1665538338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634724789ffe92_14766631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






<div class="login m-3">
    <form class="mb-3" action=verify method="POST">
    <h2 class="titulo-login"> Bienvenido </h2>
        <div class="mb-4">
            <label for="email" class="form-label"> Correo electronico </label>
            <input type="email" class="form-control" name="email"  required>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label"> Contraseña</label>
            <input type="password" class="form-control" name="password"  required>
        </div>
        <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-label" name="connected">
            <label for="connected" class="form-check-label"> Mantenerme conectado</label>
        </div>
        <div class="d-grid"> 
            <button type="submit" class="btn btn-primary">Iniciar sesion </button>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>

        <div class="my-3"> 
            <span>No tenes cuenta? <a href="registrar-usuario"> Registrarse </a> </span>
        </div>
    </form>

    <div class="col">
            <img src="Images\logo-municipalidad-Gesell.jpeg" alt="foto-login">
    </div> 
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>














<?php }
}
