<?php
/* Smarty version 3.1.30, created on 2017-09-08 15:45:02
  from "/var/www/html/MVC1-master/app/views/templates/delete.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b274ae56b738_44176992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a94ac30055b11c81924b6dbdca5fee2d5815362' => 
    array (
      0 => '/var/www/html/MVC1-master/app/views/templates/delete.tpl',
      1 => 1504867458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b274ae56b738_44176992 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="" method="post">
  <table border="1">

    <tr>
      <td><span>Sure you want to delete id- <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</span></td>
      <td>
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
          <input type="hidden" name="method" value="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
"/>
          <input type="hidden" name="Param1" value="delete"/>
      </td>
    </tr>
  </table>

  <input type="submit" value="delete">



</form>
<?php }
}
