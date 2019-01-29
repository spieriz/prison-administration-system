<?php
/* Smarty version 3.1.33, created on 2019-01-28 01:25:49
  from 'D:\Programy\XAMPP\htdocs\pas\styles\templates\guard\guard.prisoners.default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4e4c0d9c4f98_18100607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a12ecda0726080c5a7f19a7b36572fbdd84c0c8' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\pas\\styles\\templates\\guard\\guard.prisoners.default.tpl',
      1 => 1547477493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.header.tpl' => 1,
    'file:\\guard\\guard.prisoners.choose.cell.tpl' => 1,
  ),
),false)) {
function content_5c4e4c0d9c4f98_18100607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <link rel="stylesheet" type="text/css" href="./styles/css/guard.css">
    <link rel="stylesheet" type="text/css" href="./styles/css/selectric.css">
    <link rel="stylesheet" type="text/css" href="./styles/css/selectric_over.css">
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

<div id="page_title" class="d-block w-100 text-center">
    <h2>Lista pracowników</h2>
</div>

<?php if ($_smarty_tpl->tpl_vars['choose_cell']->value == true) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:\guard\guard.prisoners.choose.cell.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div id="content" class="d-block my-4 h-50">
    <div id="main_container" class="h-100">
        <div class="blur_bg col-lg-8 col-md-10 col-sm-12 col-12 m-auto"></div>
        <div class="table_container big_window h-100 col-lg-8 col-md-10 col-sm-12 col-12 m-auto">
            <table id="table_prisoners" class="w-100">
                <thead>
                    <tr>
                        <th>
                            Numer więźnia
                        </th>
                        <th>
                            Imię i nazwisko
                        </th>
                        <th>
                            Adres
                        </th>
                        <th>
                            Numer celi
                        </th>
                        <th>
                            Izolowany
                        </th>
                        <th>
                            Akcje
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prisoners']->value, 'prisoner');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prisoner']->value) {
?>
                    <tr>
                        <td>
                            <span class="prisoner_info"><?php echo $_smarty_tpl->tpl_vars['prisoner']->value['id'];?>
</span>
                        </td>
                        <td>
                            <span class="prisoner_info"><?php echo $_smarty_tpl->tpl_vars['prisoner']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['prisoner']->value['surname'];?>
</span>
                        </td>
                        <td>
                            <span class="prisoner_info"><?php echo $_smarty_tpl->tpl_vars['prisoner']->value['address'];?>
</span>
                        </td>
                        <td>
                            <span class="prisoner_info"><?php echo $_smarty_tpl->tpl_vars['prisoner']->value['cell_id'];?>
</span>
                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['prisoner']->value['isolated'] == 0) {?>
                                <span class="prisoner_info">Nie
                            <?php } else { ?>
                                <span class="prisoner_info" style="color: #edd139">Tak
                            <?php }?>
                                </span>
                        </td>
                        <td>
                            <form action="guard.php" method="post" class="d-inline-block">
                                <input type="hidden" name="page" value="guardPrisoners">
                                <input type="hidden" name="mode" value="showChangeCell">
                                <input type="hidden" name="prisoner_id" value="<?php echo $_smarty_tpl->tpl_vars['prisoner']->value['id'];?>
">
                                <input type="submit" name="send" class="input_submit" value="Zmień celę">
                            </form>
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <tr>
                    <td>
                        <form id="prisoner_add" action="guard.php" method="post">+</form>
                        <input form="prisoner_add" type="hidden" name="page" value="guardprisoners">
                    </td>
                    <td>
                        <input form="prisoner_add" name="name_surname" type="text" class="input_text text-center" placeholder="Imię i nazwisko">
                    </td>
                    <td>
                        <input form="prisoner_add" name="address" type="text" class="input_text text-center" placeholder="Adres">
                    </td>
                    <td>
                        <input form="prisoner_add" name="salary" type="text" class="input_text text-center" placeholder="Izolowany">
                    </td>
                    <td>
                        <input form="prisoner_add" name="salary" type="text" class="input_text text-center" placeholder="Numer celi">
                    </td>
                    <td>
                        <input form="prisoner_add" name="send" type="submit" class="input_submit" value="Dodaj">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="return_container" class="my-2">
        <a href="guard.php"><span>Powrót</span></a>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['cell_changed']->value == true) {?>
    <div id="message_box" class="w-100 my-1">
        <div id="message_inner" class="col-xl-4 col-lg-6 col-md-8 col-sm-10 col-12 m-auto text-center">
            <span>Zmieniono celę więźnia.</span>
        </div>
    </div>
    <?php }?>
</div>

<footer class="d-table">
    <span class="w-100 text-center d-table-cell">Created by Paweł Ledwig, 2019</span>
</footer>
</body>
<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/guard.prisoners.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/jquery.selectric.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        showPopup(true, 'Zmieniono celę więźnia.');
    <?php echo '</script'; ?>
>
</html><?php }
}
