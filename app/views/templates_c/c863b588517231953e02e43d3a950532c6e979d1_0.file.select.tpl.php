<?php
/* Smarty version 3.1.30, created on 2017-09-06 15:36:37
  from "/var/www/html/MVC1-master/app/views/templates/select.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59afcfb54a6d29_47966750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c863b588517231953e02e43d3a950532c6e979d1' => 
    array (
      0 => '/var/www/html/MVC1-master/app/views/templates/select.tpl',
      1 => 1504692291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59afcfb54a6d29_47966750 (Smarty_Internal_Template $_smarty_tpl) {
?>



<form action="" method="post">
  <table border="1">
    <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
      <tr>
      <td bgcolor="yellow" colspan="2">
      <?php if ($_smarty_tpl->tpl_vars['error']->value == "name_empty") {?>You must supply a name.
      <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == "comment_empty") {?> You must supply a comment.
      <?php }?>
      </td>
      </tr>
    <?php }?>
    <tr>
      <td>Entity:</td>
      <td>
        <select name="model">
          <option></option>
          <option value="student">student</option>
          <option value="course">course</option>
          <option value="teacher">teacher</option>
        </select>
      </td>
    </tr>
  </table>

  <input type="submit" value="Submit">



</form>
<?php }
}
