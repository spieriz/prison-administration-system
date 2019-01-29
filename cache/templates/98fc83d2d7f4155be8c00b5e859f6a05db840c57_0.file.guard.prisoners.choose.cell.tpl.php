<?php
/* Smarty version 3.1.33, created on 2019-01-28 01:26:03
  from 'D:\Programy\XAMPP\htdocs\pas\styles\templates\\guard\guard.prisoners.choose.cell.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4e4c1bba1172_57905973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98fc83d2d7f4155be8c00b5e859f6a05db840c57' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\pas\\styles\\templates\\\\guard\\guard.prisoners.choose.cell.tpl',
      1 => 1547477360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4e4c1bba1172_57905973 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="./styles/css/guard_choose.css">

<div id="outside_cell_container">
    <div id="content_cell" class="d-block my-4 h-25">
    <div id="main_container_cell" class="h-100">
        <div class="blur_bg h-100 col-lg-6 col-md-8 col-sm-10 col-12 m-auto"></div>
        <div class="table_container big_window h-100 col-lg-6 col-md-8 col-sm-10 col-12 m-auto">
            <table id="table_cells" class="w-100">
                <thead>
        <tr>
            <th>
                Numer celi
            </th>
            <th>
                Pojemność
            </th>
            <th>
                Osadzonych
            </th>
            <th>
                Wolnych miejsc
            </th>
            <th>
                Akcje
            </th>
        </tr>
        </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cells']->value, 'cell');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cell']->value) {
?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['cell']->value['id'];?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['cell']->value['capacity'];?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['cell']->value['inmates'];?>

                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['cell']->value['free'] == 0) {?>
                            <span class="prisoner_info" style="color: #ed3a26"><?php echo $_smarty_tpl->tpl_vars['cell']->value['free'];?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['cell']->value['capacity'] == $_smarty_tpl->tpl_vars['cell']->value['free']) {?>
                            <span class="prisoner_info" style="color: #1eba5a"><?php echo $_smarty_tpl->tpl_vars['cell']->value['free'];?>

                            <?php } else { ?>
                            <span class="prisoner_info"><?php echo $_smarty_tpl->tpl_vars['cell']->value['free'];?>

                            <?php }?>
                            </span>
                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['cell']->value['free'] == 0) {?>
                            <span class="prisoner_info" style="color: #ed3a26">-
                            <?php } else { ?>
                            <form action="guard.php" method="post" class="d-inline-block">
                                <input type="hidden" name="page" value="guardPrisoners">
                                <input type="hidden" name="mode" value="changePrisonersCell">
                                <input type="hidden" name="prisoner_id" value="<?php echo $_smarty_tpl->tpl_vars['prisoner_id']->value;?>
">
                                <input type="hidden" name="cell_id" value="<?php echo $_smarty_tpl->tpl_vars['cell']->value['id'];?>
">
                                <input type="submit" name="send" class="input_submit" value="Zmień celę">
                            </form>
                            <?php }?>
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
            </table>
        </div>
    </div>
</div>
</div><?php }
}
