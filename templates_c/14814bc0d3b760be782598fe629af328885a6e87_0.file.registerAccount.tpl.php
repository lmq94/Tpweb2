<?php
/* Smarty version 4.2.1, created on 2022-10-14 17:27:10
  from 'C:\xampp\htdocs\Tpweb2\templates\registerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63497fce70bd59_90664454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14814bc0d3b760be782598fe629af328885a6e87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\registerAccount.tpl',
      1 => 1665761228,
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
function content_63497fce70bd59_90664454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php $_smarty_tpl->_subTemplateRender("file:panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <form class="container-md" action="open-account" method="POST">
            <?php if ($_SESSION['user']->rol == "admin") {?>
                <h4> Seleccione un cliente</h4>
                <select class="form-select-m3" aria-label="Default select example" name='id_client'>
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
            <?php }?>

            <div class="col-md-4">
                <label for="exampleInputPassword1" class="form-label"> <h4>Ingrese el monto inicial (opcional)</h4></label>
                <input type="number" class="form-control" id="exampleInputPassword1" value="" name="amount">
            </div>
            <h4> Seleccione el tipo de cuenta que desea abrir </h4>

            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="type_account" value="Caja de ahorro" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Caja de ahorro
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="type_account" value="Plazo fijo" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    Plazo fijo
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="type_account" value="Cuenta corriente" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault3">
                    Cuenta corriente
                </label>
            </div>

            <h4>Selecione el tipo de moneda que desea para su nueva cuenta </h4>

            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="coin" value="Peso Argentino" id="flexRadioDefault4">
                <label class="form-check-label" for="flexRadioDefault4">
                    Peso Argentino
                </label>
            </div>
            <div class="form-check mb-3 ">
                <input class="form-check-input" type="radio" name="coin" value="Dolar Estadounidense" id="flexRadioDefault5" >
                <label class="form-check-label" for="flexRadioDefault5">
                    Dolar Estadounidense
                </label>
            <div>
            <button type="submit" class="btn btn-primary mt-3">Crear cuenta</button>
            <?php if (!($_SESSION['user']->rol == "admin")) {?>
                <h3 class="mt-3"> Importante: Esta cuenta tendra como titular al cliente asociado al usuario</h3>
            <?php }?>
        </form>  
        
  


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
