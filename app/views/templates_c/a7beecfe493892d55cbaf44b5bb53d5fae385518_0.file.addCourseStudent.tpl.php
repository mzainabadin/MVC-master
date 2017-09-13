<?php
/* Smarty version 3.1.30, created on 2017-09-13 16:42:55
  from "/var/www/html/MVC1-master/app/views/templates/addCourseStudent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b919bf166b56_93153361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7beecfe493892d55cbaf44b5bb53d5fae385518' => 
    array (
      0 => '/var/www/html/MVC1-master/app/views/templates/addCourseStudent.tpl',
      1 => 1505302966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b919bf166b56_93153361 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="" method="post">
  <table border="1">

    <tr>
      <td><span>Enter course id to add for student id - <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</span></td>
      <td>
          <textarea name="Param1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['Comment'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
          <input type="hidden" name="method" value="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
"/>
          <input type="hidden" name="model" value="<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
"/>
      </td>
    </tr>
  </table>

  <input type="submit" value="Save">



</form>
<?php }
}
