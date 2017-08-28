<?php
/* Smarty version 3.1.30, created on 2017-08-28 16:03:52
  from "/var/www/html/MVC-master/app/views/templates/editStudent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a3f898064b46_61421106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de926f9050d261fe8c9bad0d2013029deed8c936' => 
    array (
      0 => '/var/www/html/MVC-master/app/views/templates/editStudent.tpl',
      1 => 1503918211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a3f898064b46_61421106 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
 <span>Student Record has been UpdatedSuccessfully </span>
<?php } else { ?>
 <span>Student Record has not been updA=ated </span>
<?php }
}
}
