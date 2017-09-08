<?php
/* Smarty version 3.1.30, created on 2017-09-08 17:40:59
  from "/var/www/html/MVC1-master/app/views/templates/listTable.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b28fdbc8d930_37228483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edd01f8738a6cb1883a0bcd66fa2e79bfc4e27e2' => 
    array (
      0 => '/var/www/html/MVC1-master/app/views/templates/listTable.tpl',
      1 => 1504873450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b28fdbc8d930_37228483 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/var/www/html/MVC1-master/app/smarty/plugins/function.cycle.php';
?>

<table>
<span> Record </span>
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
    <td>
      <form method="post" action="">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
"/>
          <input type="hidden" name="method" value="edit"/>
          <input type="submit" value="Edit">
      </form>
    </td>
    <td>
      <form method="post" action="">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
"/>
          <input type="hidden" name="method" value="delete"/>
          <input type="submit" value="delete">
      </form>
    </td>

    <td>
      <form method="post" action="">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
"/>
          <input type="hidden" name="method" value="add"/>
          <input type="submit" value="add">
      </form>
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
