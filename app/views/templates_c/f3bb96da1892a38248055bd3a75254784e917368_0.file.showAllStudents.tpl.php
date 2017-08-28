<?php
/* Smarty version 3.1.30, created on 2017-08-28 16:03:52
  from "/var/www/html/MVC-master/app/views/templates/showAllStudents.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a3f8980a8310_55170280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3bb96da1892a38248055bd3a75254784e917368' => 
    array (
      0 => '/var/www/html/MVC-master/app/views/templates/showAllStudents.tpl',
      1 => 1503914186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a3f8980a8310_55170280 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/var/www/html/MVC-master/app/smarty/plugins/function.cycle.php';
?>

<table>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>

 <tr style="background: <?php echo smarty_function_cycle(array('values'=>'silver ,gray'),$_smarty_tpl);?>
 " >
    <td> <?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['p']->value->name;?>
</td>
 </tr>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</table>
<?php }
}
