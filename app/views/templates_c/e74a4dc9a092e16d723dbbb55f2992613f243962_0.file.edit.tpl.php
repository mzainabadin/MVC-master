<?php
/* Smarty version 3.1.30, created on 2017-09-08 15:44:25
  from "/var/www/html/MVC1-master/app/views/templates/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b27489297e74_38893855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e74a4dc9a092e16d723dbbb55f2992613f243962' => 
    array (
      0 => '/var/www/html/MVC1-master/app/views/templates/edit.tpl',
      1 => 1504867438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b27489297e74_38893855 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="" method="post">
  <table border="1">

    <tr>
      <td><span>Enter Updated value for id-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</span></td>
      <td>
          <textarea name="Param1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['Comment'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
          <input type="hidden" name="method" value="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
"/>
      </td>
    </tr>
  </table>

  <input type="submit" value="Save">



</form>
<?php }
}
