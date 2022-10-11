<?php
/* Smarty version 4.2.1, created on 2022-10-11 17:36:16
  from 'C:\xampp\htdocs\Tpweb2\templates\AccountList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63458d7031b403_70616618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '085bbdc9942dc84874eda9ed2165be749b0b3c79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\AccountList.tpl',
      1 => 1665502558,
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
function content_63458d7031b403_70616618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="d-flex">

  <?php $_smarty_tpl->_subTemplateRender("file:panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php if ($_SESSION['user']->rol == "admin") {?>

    <h3>Cuentas registradas en el banco en el banco </h3>
  <?php } else { ?>
    <h3>Tus cuentas</h3>
  <?php }?>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Numero de cliente</th>
        <th scope="col">Monto</th>
        <th scope="col">Tipo de cuenta</th>
        <th scope="col">Tipo de moneda</th>
        <th scope="col">Borrar</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accounts']->value, 'account');
$_smarty_tpl->tpl_vars['account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->do_else = false;
?>
          <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['account']->value->id_client;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['account']->value->amount;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['account']->value->type_account;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['account']->value->coin;?>
</td>
          <td> <a href='delete-account/<?php echo $_smarty_tpl->tpl_vars['account']->value->id_account;?>
' type='button' class='btn btn-danger'>Cerrar cuenta</a></td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>

    <a href='register-account' type='button' class="btn btn-success mx-3 mt-3 m-3">Abrir una cuenta</a>
    <a href='' type='button' class="btn btn-success mx-3 mt-3 m-3">Editar una cuenta</a>
</div>





<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
