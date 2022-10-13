<?php
/* Smarty version 4.2.1, created on 2022-10-13 20:49:01
  from 'C:\xampp\htdocs\Tpweb2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63485d9d99f843_02239390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14424e8e1dd422bff0c3e51df386a49ab66657fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpweb2\\templates\\header.tpl',
      1 => 1665582502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63485d9d99f843_02239390 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
      <base href="<?php echo BASE_URL;?>
">

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <link rel="stylesheet" href="<?php echo BASE_URL;?>
Css/visual.css">
      <title>Banco de Gesell</title>
  </head>
  <body>
      <header>
          <img src="./Images/VillaGesell.jpg">
          <nav class="navbar navbar-expand-lg bg-light">
              <div class="container-fluid">
                <a class="navbar-brand" >Banco de Gesell</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="">About</a>
                    </li>
                    <?php if (!$_smarty_tpl->tpl_vars['props']->value['islogged']) {?>
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="menu-login">Login</a>
                    <?php }?>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
      </header>

      <!-- inicio main container -->
      <main class="main-container">

<?php }
}
