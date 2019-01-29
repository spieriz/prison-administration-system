<?php
/* Smarty version 3.1.33, created on 2019-01-28 01:23:40
  from 'D:\Programy\XAMPP\htdocs\pas\styles\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4e4b8caa5111_73927657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f34c64047966fe96977089101669d95aed9bf56c' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\pas\\styles\\templates\\login.tpl',
      1 => 1547490457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.header.tpl' => 1,
  ),
),false)) {
function content_5c4e4b8caa5111_73927657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <link rel="stylesheet" type="text/css" href="./styles/css/login.css">
</head>

<body class="h-100">
<header>
    <div id="header_name" class="h-100 w-100 text-center d-table">
        <h1 class="d-table-cell align-middle">SYSTEM ADMINISTRACJI WIĘZIENIEM</h1>
    </div>
</header>

<div id="content">
    <div id="main_container">
        <div class="blur_bg col-xl-4 col-lg-6 col-md-8 col-sm-10 m-auto"></div>
        <div id="login_window" class="big_window col-xl-4 col-lg-6 col-md-8 col-sm-10 d-inline-block text-center">
            <form id="login_form" name="login" action="index.php" method="post">
                <h3>PANEL LOGOWANIA</h3>
                <input type="text" name="username" class="col-lg-7 col-md-8 col-sm-10 col-10 input_text" placeholder="Nazwa użytkownika" autocomplete="off">
                <input type="password" name="password" class="col-lg-7 col-md-8 col-sm-10 col-10 input_text" placeholder="Hasło" autocomplete="off">
                <input type="submit" class="col-lg-7 col-md-8 col-sm-10 col-10 input_submit" value="Zaloguj się">
                <input type="hidden" name="user" value="president">
            </form>
        </div>
    </div>
</div>

<div id="message_box" class="w-100 my-1">
    <div id="message_inner" class="col-xl-4 col-lg-6 col-md-8 col-sm-10 col-12 m-auto text-center">
        <span>Dodano pracownika.</span>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['message']->value == true) {?>
    <?php echo '<script'; ?>
>
        showPopup(<?php echo $_smarty_tpl->tpl_vars['message_type']->value;?>
, '<?php echo $_smarty_tpl->tpl_vars['message_text']->value;?>
');
    <?php echo '</script'; ?>
>
<?php }?>

<footer class="d-table">
    <span class="w-100 text-center d-table-cell">Created by Paweł Ledwig, 2019</span>
</footer>
</body>
</html><?php }
}
