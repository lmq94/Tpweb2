<?php
/* Smarty version 4.2.1, created on 2022-10-12 22:32:54
  from 'C:\xampp\htdocs\Tpweb2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63472476f12135_53969782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b4640cfa33fafedca3673d64040b6f54e244dc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\home.tpl',
      1 => 1665538338,
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
function content_63472476f12135_53969782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



   
            <div class="d-flex " action="home">
                <?php if ($_smarty_tpl->tpl_vars['props']->value['islogged']) {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <h1 class="m-3">Hola <?php echo $_SESSION['user']->username;?>
!</h1>

                    <h1 class="m-3">Bienvenido al banco de Villa Gesell</h1>

                    <h1 class="m-3"> Haga click en "menu de usuario" para empezar</h1>  

                <?php } else { ?>
                    <div class="card m-3">
                            <img src="./Images/cuenta.jpg" class="card-img-top" alt="cuenta">
                            <div class="card-body">
                                <h5 class="card-title">Abri tu primer cuenta gratis!</h5>
                                <p class="card-text">Cansado de guardar tu dinero en tu bolsillo y que te asalten el dia que cobras tu sueldo a la noche? No lo piensen mas!! abrite tu primera cuenta sin costo de mantenimiento</p>
                                <a href="registrar-usuario" class="btn btn-primary">Registrate</a>
                            </div>
                    </div>
                    <div class="card m-3" >
                            <img src="./Images/dolares.png" class="card-img-top" alt="dolares">
                            <div class="card-body">
                                <h5 class="card-title">Compra dolares</h5>
                                <p class="card-text">Ahorraste todo el año, pero con la inflacion ahora no te alcanza ni para un caramelo? Pasa tus ahorros a dolares ahora mismo, el arbolito numero 1 de Gesell  ahora trabaja para nosotros!</p>
                                <a href='menu-login' class="btn btn-primary">Comprar ahora</a>
                            </div>
                    </div>
                <?php }?>
                        
            </div>
    



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
