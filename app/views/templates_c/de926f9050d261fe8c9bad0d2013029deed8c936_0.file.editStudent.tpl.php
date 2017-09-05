<?php
/* Smarty version 3.1.30, created on 2017-08-31 18:18:12
  from "/var/www/html/MVC-master/app/views/templates/editStudent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a80c940707c9_44351733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de926f9050d261fe8c9bad0d2013029deed8c936' => 
    array (
      0 => '/var/www/html/MVC-master/app/views/templates/editStudent.tpl',
      1 => 1504179136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a80c940707c9_44351733 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/var/www/html/MVC-master/app/smarty/plugins/function.cycle.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
 <span>Student Record ediited Successfully </span>
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
 <span>Student Record not edited </span>
<?php }
}
}
