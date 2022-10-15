<?php
/* Smarty version 4.2.1, created on 2022-10-15 17:53:13
  from 'C:\xampp\htdocs\Tpweb2\templates\registerClient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ad769e3b676_86768937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c23985a5249eb29196a743f1eeb65be5a2871dc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\registerClient.tpl',
      1 => 1665847873,
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
function content_634ad769e3b676_86768937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container mb-3 ">
  <h4>Registrar cliente</h4>
  <form class="row g-3" action='activation-client' method="POST">
    <div class="col-md-4">
      <label for="validationServer01" class="form-label">Alias</label>
      <input type="text" class="form-control " id="validationServer01" name="alias" value="" required>
    </div>
    <div class="col-md-4">
      <label for="validationServer02" class="form-label">Dni</label>
      <input type="number" class="form-control " id="validationServer02" name="dni" value="" required>
    </div>
    <div class="col-md-6">
      <label for="validationServer03" class="form-label">City</label>
      <input type="text" class="form-control mb-3 " id="validationServer03" name="city" value="" aria-describedby="validationServer03Feedback" required>
    <div class="col-12">
      <div class="form-check">
        <label for="invalidCheck3" class="form-label">Acepto las politicas de registro de clientes</label>
        <input class="form-check-input " type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Registrar</button>
    </div>
  </form>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
