<?php
/* Smarty version 3.1.30, created on 2017-08-28 17:23:10
  from "/var/www/html/MVC-master/app/views/templates/addStudent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a40b2e6a0a04_45281558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd3a4314970facd11380588984558c71853831ce' => 
    array (
      0 => '/var/www/html/MVC-master/app/views/templates/addStudent.tpl',
      1 => 1503920672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a40b2e6a0a04_45281558 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
 <span>Student Record has been Added Successfully </span>
<?php } else { ?>
 <span>Student record not added </span>
<?php }
}
}
