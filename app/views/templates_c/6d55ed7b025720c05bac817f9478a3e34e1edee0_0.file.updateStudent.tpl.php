<?php
/* Smarty version 3.1.30, created on 2017-08-28 15:56:02
  from "/var/www/html/MVC-master/app/views/templates/updateStudent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a3f6c2654649_43892950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d55ed7b025720c05bac817f9478a3e34e1edee0' => 
    array (
      0 => '/var/www/html/MVC-master/app/views/templates/updateStudent.tpl',
      1 => 1503914808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a3f6c2654649_43892950 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
 <span>Student Record has been UpdatedSuccessfully </span>
<?php } else { ?>
 <span>Student Record has not been updA=ated </span>
<?php }
}
}
