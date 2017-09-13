<?php
/* Smarty version 3.1.30, created on 2017-09-13 15:08:32
  from "/var/www/html/MVC1-master/app/views/templates/courses.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b903a02cd6d0_97539924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4509c78d45b72b7de7d5758c450cd812c6f0123' => 
    array (
      0 => '/var/www/html/MVC1-master/app/views/templates/courses.tpl',
      1 => 1505297304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b903a02cd6d0_97539924 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/var/www/html/MVC1-master/app/smarty/plugins/function.cycle.php';
?>
<table>
  <br>
  <br>
  <span><strong> Detail of Student with id - <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 </strong> </span>
  <br>
  <th>Course id</th>
  <th>Course name</th>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
  <tr style="background: <?php echo smarty_function_cycle(array('values'=>'silver ,gray'),$_smarty_tpl);?>
 " >
      <td><?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
</td>
      <td> <?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
</td>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
    <input type="hidden" name="model" value="course_student"/>
    <input type="hidden" name="method" value="addcourse"/>
    <input type="submit" value="Add another course">
</form>
<?php }
}
