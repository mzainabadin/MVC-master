<?php
/* Smarty version 3.1.30, created on 2017-08-29 14:39:04
  from "/var/www/html/MVC-master/app/views/templates/addStudent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a536383c40c9_92400794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd3a4314970facd11380588984558c71853831ce' => 
    array (
      0 => '/var/www/html/MVC-master/app/views/templates/addStudent.tpl',
      1 => 1503999513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a536383c40c9_92400794 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/var/www/html/MVC-master/app/smarty/plugins/function.cycle.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
 <span>Student Record Added Successfully </span>

 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
  <span>Student Record </span>
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


<?php } else { ?>
 <span>Student record not added </span>
<?php }
}
}
