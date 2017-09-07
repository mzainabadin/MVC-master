<?php
/* Smarty version 3.1.30, created on 2017-09-06 11:42:40
  from "/var/www/html/MVC-master/app/views/templates/listTableStudent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59af98e0c027a5_33363048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80c6c5d937b812cddc0b5c6081f25797a51e6cdd' => 
    array (
      0 => '/var/www/html/MVC-master/app/views/templates/listTableStudent.tpl',
      1 => 1504680156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59af98e0c027a5_33363048 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/var/www/html/MVC-master/app/smarty/plugins/function.cycle.php';
?>

<table>
<span>Student Record </span>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
 <tr style="background: <?php echo smarty_function_cycle(array('values'=>'silver ,gray'),$_smarty_tpl);?>
 " >
    <td> <?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
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
