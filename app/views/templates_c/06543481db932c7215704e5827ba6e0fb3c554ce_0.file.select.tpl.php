<?php
/* Smarty version 3.1.30, created on 2017-08-31 19:17:44
  from "/var/www/html/MVC-master/app/views/templates/select.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a81a88867cf4_86016736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06543481db932c7215704e5827ba6e0fb3c554ce' => 
    array (
      0 => '/var/www/html/MVC-master/app/views/templates/select.tpl',
      1 => 1504189062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a81a88867cf4_86016736 (Smarty_Internal_Template $_smarty_tpl) {
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
    <tr>
      <td valign="top">Method:</td>
      <td>
        <select name="method">
          <option></option>
          <option value="add">Add a record</option>
          <option value="delete">delete a record</option>
          <option value="edit">edit a record</option>
              <option value="listTable">List Record</option>
        </select>
      </td>
    </tr>
  </table>

  <input type="submit" value="Submit">



</form>
<?php }
}
