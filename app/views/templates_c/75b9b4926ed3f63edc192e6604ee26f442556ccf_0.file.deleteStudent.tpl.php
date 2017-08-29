<?php
/* Smarty version 3.1.30, created on 2017-08-29 11:16:38
  from "/var/www/html/MVC-master/app/views/templates/deleteStudent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a506c6a035f0_85283188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75b9b4926ed3f63edc192e6604ee26f442556ccf' => 
    array (
      0 => '/var/www/html/MVC-master/app/views/templates/deleteStudent.tpl',
      1 => 1503920683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a506c6a035f0_85283188 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
 <span>Student Record deleted Successfully </span>
<?php } else { ?>
 <span>Student Record has not been updA=ated </span>
<?php }
}
}
