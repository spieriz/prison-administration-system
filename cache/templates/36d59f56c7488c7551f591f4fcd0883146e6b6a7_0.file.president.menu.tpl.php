<?php
/* Smarty version 3.1.33, created on 2019-01-28 01:24:09
  from 'D:\Programy\XAMPP\htdocs\pas\styles\templates\president\president.menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4e4ba959dd72_10502092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36d59f56c7488c7551f591f4fcd0883146e6b6a7' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\pas\\styles\\templates\\president\\president.menu.tpl',
      1 => 1546866888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.header.tpl' => 1,
  ),
),false)) {
function content_5c4e4ba959dd72_10502092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <link rel="stylesheet" type="text/css" href="./styles/css/president.css">
</head>

<body class="h-100">

<header>
    <div class="header_container" class="d-block">
        <div class="w-100 text-center d-table">
            <h1 class="d-table-cell">SYSTEM ADMINISTRACJI WIĘZIENIEM</h1>
        </div>
        <div class="text-center logged_in_header">
            <span>Jesteś zalogowany jako: Paweł Ledwig.</span>
            <a href="index.php" class="logout_href">Wyloguj</a>
        </div>
    </div>
</header>

<div id="content">
    <div class="president_menu h-100 w-100 d-table align-middle small_window_buttons">
        <div class="d-table-cell w-100 align-middle">
            <form class="d-inline" action="#" method="post">
                <input type="submit" value="Więźniowie" class="small_window president_menu_option d-inline-block col-xl-2 col-lg-3 col-md-3 col-sm-3 mx-xl-5 mx-lg-3 mx-md-2 mx-sm-1">
            </form>
            <form class="d-inline" action="president.php" method="post">
                <input type="submit" value="Pracownicy" class="small_window president_menu_option d-inline-block col-xl-2 col-lg-3 col-md-3 col-sm-3 mx-xl-5 mx-lg-3 mx-md-2 mx-sm-1">
                <input type="hidden" name="page" value="presidentEmployees">
            </form>
            <form class="d-inline" action="#" method="post">
                <input type="submit" value="Statystyki" class="small_window president_menu_option d-inline-block col-xl-2 col-lg-3 col-md-3 col-sm-3 mx-xl-5 mx-lg-3 mx-md-2 mx-sm-1">
            </form>
        </div>
    </div>
</div>

<footer class="d-table">
    <span class="w-100 text-center d-table-cell">Created by Paweł Ledwig, 2019</span>
</footer>
</body>
</html><?php }
}
