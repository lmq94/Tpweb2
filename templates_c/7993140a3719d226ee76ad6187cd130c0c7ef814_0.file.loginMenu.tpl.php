<?php
/* Smarty version 4.2.1, created on 2022-10-05 23:42:30
  from 'C:\xampp\htdocs\Tpweb2\Tpweb2\templates\loginMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633dfa46239e21_25754269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7993140a3719d226ee76ad6187cd130c0c7ef814' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\Tpweb2\\templates\\loginMenu.tpl',
      1 => 1665004174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633dfa46239e21_25754269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






<div class="login">
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