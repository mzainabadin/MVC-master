<?php
/* Smarty version 3.1.30, created on 2017-08-31 18:20:11
  from "/var/www/html/MVC-master/app/views/templates/addStudent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a80d0bdf1fa9_69578321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd3a4314970facd11380588984558c71853831ce' => 
    array (
      0 => '/var/www/html/MVC-master/app/views/templates/addStudent.tpl',
      1 => 1504185597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a80d0bdf1fa9_69578321 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
<span>Student Record has been Created Successfully </span>
<?php } else { ?>
<span>Student Record has not been Created </span>
<?php }
}
}
