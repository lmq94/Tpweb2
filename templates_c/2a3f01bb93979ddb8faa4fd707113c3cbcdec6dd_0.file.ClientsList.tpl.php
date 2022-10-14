<?php
/* Smarty version 4.2.1, created on 2022-10-14 20:21:58
  from 'C:\xampp\htdocs\Tpweb2\templates\ClientsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349a8c648cca6_07267458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a3f01bb93979ddb8faa4fd707113c3cbcdec6dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\ClientsList.tpl',
      1 => 1665771714,
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
function content_6349a8c648cca6_07267458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="d-flex">
      
    <?php $_smarty_tpl->_subTemplateRender("file:panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="container ">
        <h3>Clientes registrados en el banco </h3>

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
                    <?php if (($_smarty_tpl->tpl_vars['editClient']->value) && ($_smarty_tpl->tpl_vars['id_client']->value == $_smarty_tpl->tpl_vars['client']->value->id_client)) {?>
                      <form action='update-client/<?php echo $_smarty_tpl->tpl_vars['client']->value->id_client;?>
' method="POST">
                         <td> <input name="alias" type="text" required> </td>
                         <td> <input name="city" type="text" required> </td>
                         <td class="d-flex">  <button  type='submit' class='btn btn-success mx-3 mt-3 m-3'>Listo</button>
                      </form>
                          <a href='delete-client/<?php echo $_smarty_tpl->tpl_vars['client']->value->id_client;?>
' type='button' class='btn btn-danger mx-3 mt-3 m-3'>Eliminar cliente</a> </td>
                    <?php } else { ?>
                          <td><?php echo $_smarty_tpl->tpl_vars['client']->value->alias;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['client']->value->city;?>
</td>
                          <td class="d-flex">  <a href='edit-client/<?php echo $_smarty_tpl->tpl_vars['client']->value->id_client;?>
' type='button' class='btn btn-primary mx-3 mt-3 m-3'>Editar cliente</a>
                          <a href='delete-client/<?php echo $_smarty_tpl->tpl_vars['client']->value->id_client;?>
' type='button' class='btn btn-danger mx-3 mt-3 m-3'>Eliminar cliente</a>
                    <?php }?>
                    
      
                    </td>
                    </tr>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>

          <p>Nota: Si se elimina un cliente, tambien se eliminaran todas sus cuentas y el usuario asociado </p>

          <a href='register-client' type='button' class="btn btn-success mx-3 mt-3 m-3">Registrar un cliente nuevo</a>     

       </div>
    </div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
