<?php
/* Smarty version 3.1.30, created on 2017-09-11 17:20:30
  from "/var/www/html/MVC1-master/app/views/templates/detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b67f8e748b18_73566907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8ad110b102eb56be6ff8aeca7806fdeb8865fdc' => 
    array (
      0 => '/var/www/html/MVC1-master/app/views/templates/detail.tpl',
      1 => 1505132418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b67f8e748b18_73566907 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/var/www/html/MVC1-master/app/smarty/plugins/function.cycle.php';
?>
<table>
<span> Detail </span>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
 <tr style="background: <?php echo smarty_function_cycle(array('values'=>'silver ,gray'),$_smarty_tpl);?>
 " >
    <td> <?php echo $_smarty_tpl->tpl_vars['i']->value->Student_id;?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['i']->value->Course_id;?>
</td>
    <td>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
        <input type="hidden" name="method" value="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
"/>
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
