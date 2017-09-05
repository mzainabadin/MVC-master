
{* Smarty *}

<form action="" method="post">
  <table border="1">
    {if $error ne ""}
      <tr>
      <td bgcolor="yellow" colspan="2">
      {if $error eq "name_empty"}You must supply a name.
      {elseif $error eq "comment_empty"} You must supply a comment.
      {/if}
      </td>
      </tr>
    {/if}
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
