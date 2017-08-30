<?php
/* Smarty version 3.1.30, created on 2017-08-30 15:43:37
  from "/var/www/html/MVC-master/app/views/templates/data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a696d9241394_84342140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ec88cab2bcafe9d4fea05a4b6301f82e0cde880' => 
    array (
      0 => '/var/www/html/MVC-master/app/views/templates/data.tpl',
      1 => 1504089811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a696d9241394_84342140 (Smarty_Internal_Template $_smarty_tpl) {
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
