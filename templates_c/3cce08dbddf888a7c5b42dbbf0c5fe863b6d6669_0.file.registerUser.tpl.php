<?php
/* Smarty version 4.2.1, created on 2022-10-06 06:01:43
  from 'C:\xampp\htdocs\Tpweb2\templates\registerUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633e53276a80a4_11979507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cce08dbddf888a7c5b42dbbf0c5fe863b6d6669' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\registerUser.tpl',
      1 => 1665016719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633e53276a80a4_11979507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('props'=>$_smarty_tpl->tpl_vars['props']->value), 0, false);
?>




<div class="container-md">
  <h3>Ingrese los siguientes datos para crear su usuario </h3>

  <form class="form-alta" action='insertar-usuario' method="POST">
    <div class="col-md-4">
      <label for="validationServer01" class="form-label">Usuario</label>
      <input type="text" class="form-control" id="validationServer01" name="username" value="" required>
    </div>
    <div class="col-md-4">
      <label for="exampleInputEmail1" class="form-label">Direccion E-mail</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
      <div id="emailHelp" class="form-text">Nunca vamos a compartir su direccion E-mail con nadie</div>
    </div>
    <div class="col-md-4">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password"  required>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  
    <button type="submit" class="btn btn-primary">Crear usuario</button>
  </form>
</div>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
