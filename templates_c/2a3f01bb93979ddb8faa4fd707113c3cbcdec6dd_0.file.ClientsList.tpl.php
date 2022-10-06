<?php
/* Smarty version 4.2.1, created on 2022-10-06 03:29:32
  from 'C:\xampp\htdocs\Tpweb2\templates\ClientsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633e2f7c485c96_40830970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a3f01bb93979ddb8faa4fd707113c3cbcdec6dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\ClientsList.tpl',
      1 => 1665019770,
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
function content_633e2f7c485c96_40830970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="d-flex">
      
    <?php $_smarty_tpl->_subTemplateRender("file:panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="container ">
        <h3>Datos de los clientes registrados en el banco </h3>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Dni</th>
                <th scope="col">Alias</th>
                <th scope="col">City</th>
                <th scope="col"> Borrar </th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
$_smarty_tpl->tpl_vars['client']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->do_else = false;
?>
                  <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['client']->value->dni;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['client']->value->alias;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['client']->value->city;?>
</td>
                  <td> <a href='delete/<?php echo $_smarty_tpl->tpl_vars['client']->value->id;?>
' type='button' class='btn btn-danger'>Eliminar cliente</a></td>
                  </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
        </div>
    </div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
