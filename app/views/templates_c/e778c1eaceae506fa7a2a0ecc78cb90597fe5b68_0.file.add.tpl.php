<?php
/* Smarty version 3.1.30, created on 2017-08-31 15:39:07
  from "/var/www/html/MVC-master/app/views/templates/add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a7e74b2709d3_21245248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e778c1eaceae506fa7a2a0ecc78cb90597fe5b68' => 
    array (
      0 => '/var/www/html/MVC-master/app/views/templates/add.tpl',
      1 => 1504175608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a7e74b2709d3_21245248 (Smarty_Internal_Template $_smarty_tpl) {
?>



<form action="" method="post">
  <table border="1">
    <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
      <tr>
      <td bgcolor="yellow" colspan="2">
      <?php if ($_smarty_tpl->tpl_vars['error']->value == "Param1_empty") {?>You must supply all parameters
      <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == "Param2_empty") {?> You must supply all parameters
      <?php }?>
      </td>
      </tr>
    <?php }?>
    <tr>
      <td>Attribute Name:</td>
      <td>
        <textarea name="Param1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['Comment'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
      </td>
    </tr>
    <tr>
      <td valign="top">Enter Record to add:</td>
      <td>
          <textarea name="Param2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['Comment'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
      </td>
    </tr>
  </table>

  <input type="submit" value="Submit">



</form>
<?php }
}
