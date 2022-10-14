<?php
/* Smarty version 4.2.1, created on 2022-10-14 18:15:56
  from 'C:\xampp\htdocs\Tpweb2\templates\registerUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63498b3c3660d1_91204058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cce08dbddf888a7c5b42dbbf0c5fe863b6d6669' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\registerUser.tpl',
      1 => 1665764154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63498b3c3660d1_91204058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('props'=>$_smarty_tpl->tpl_vars['props']->value), 0, false);
?>


<div class="container mb-3">
  <h3>Ingrese los siguientes datos para crear su usuario </h3>

  <form class="form-alta m-4" action='insertar-usuario' method="POST">
    <div class="col-md-4">
      <label for="validationServer01" class="form-label">Usuario</label>
      <input type="text" class="form-control" id="validationServer01" name="username" value="" required>
    </div>
    <div class="col-md-4">
      <label for="exampleInputEmail1" class="form-label">Direccion E-mail</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
      <div id="emailHelp" class="form-text">Nunca vamos a compartir su direccion E-mail con nadie</div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password"  required>
    </div>
    <select class="form-select-m3" aria-label="Default select example" name='id_client' required>
                    <option selected>Seleccionar cliente</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
$_smarty_tpl->tpl_vars['client']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['client']->value->id_client;?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value->alias;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <div class="form-check mt-3">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Acepto los terminos y condiciones
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
