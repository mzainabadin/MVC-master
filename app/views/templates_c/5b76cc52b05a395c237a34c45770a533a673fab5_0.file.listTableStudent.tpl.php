<?php
/* Smarty version 3.1.30, created on 2017-09-06 16:05:06
  from "/var/www/html/MVC1-master/app/views/templates/listTableStudent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59afd6622636c6_73953224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b76cc52b05a395c237a34c45770a533a673fab5' => 
    array (
      0 => '/var/www/html/MVC1-master/app/views/templates/listTableStudent.tpl',
      1 => 1504695902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59afd6622636c6_73953224 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/var/www/html/MVC1-master/app/smarty/plugins/function.cycle.php';
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
 </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</table>
<?php }
}
