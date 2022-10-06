<?php
/* Smarty version 4.2.1, created on 2022-10-05 23:43:41
  from 'C:\xampp\htdocs\Tpweb2\Tpweb2\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633dfa8da7b891_07994836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70cf578b61307f782aa359fe85dc522811eae258' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\Tpweb2\\templates\\Home.tpl',
      1 => 1665006220,
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
function content_633dfa8da7b891_07994836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('props'=>$_smarty_tpl->tpl_vars['props']->value), 0, false);
?>



   
            <div class="d-flex" action="home">
                <?php if ($_smarty_tpl->tpl_vars['props']->value['islogged']) {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } else { ?>
                    <div class="card">
                            <img src="./Images/cuenta.jpg" class="card-img-top" alt="cuenta">
                            <div class="card-body">
                                <h5 class="card-title">Abri tu primer cuenta gratis!</h5>
                                <p class="card-text">Cansado de guardar tu dinero en tu bolsillo y que te asalten el dia que cobras tu sueldo a la noche? No lo piensen mas!! abrite tu primera cuenta sin costo de mantenimiento</p>
                                <a href="registrar-usuario" class="btn btn-primary">Registrate</a>
                            </div>
                    </div>
                    <div class="card" >
                            <img src="./Images/dolares.png" class="card-img-top" alt="dolares">
                            <div class="card-body">
                                <h5 class="card-title">Compra dolares</h5>
                                <p class="card-text">Ahorraste todo el año, pero con la inflacion ahora no te alcanza ni para un caramelo? Pasa tus ahorros a dolares ahora mismo, el arbolito numero 1 de Gesell  ahora trabaja para nosotros!</p>
                                <a href="#" class="btn btn-primary">Comprar ahora</a>
                            </div>
                    </div>
                <?php }?>
                        
            </div>
    



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
