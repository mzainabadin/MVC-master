
{* Smarty *}

<form action="" method="post">
  <table border="1">
    {if $error ne ""}
      <tr>
      <td bgcolor="yellow" colspan="2">
        {if $error eq "Param1_empty"}You must supply all parameters
        {elseif $error eq "Param2_empty"} You must supply all parameters
        {elseif $error eq "Param3_empty"} You must supply all parameters
        {elseif $error eq "Param4_empty"} You must supply all parameters
        {/if}
      </td>
      </tr>
    {/if}
    <tr>
      <td>Attribute Name:</td>
      <td>
        <textarea name="Param1" id="Param1">{$post.Comment|escape}</textarea>
      </td>
    </tr>
    <tr>
      <td valign="top">Enter Record to add:</td>
      <td>
          <textarea name="Param2">{$post.Comment|escape}</textarea>
      </td>
    </tr>
    <tr>
      <td valign="top">Enter Record to add:</td>
      <td>
          <textarea name="Param3">{$post.Comment|escape}</textarea>
      </td>
    </tr>
    <tr>
      <td valign="top">Enter Record to add:</td>
      <td>
          <textarea name="Param4">{$post.Comment|escape}</textarea>
      </td>
    </tr>
  </table>
  <input type="submit" value="Submit">

</form>
