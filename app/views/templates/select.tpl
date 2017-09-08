
{* Smarty *}

<form action="http://localhost/MVC1-master/public/" method="post">
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
  </table>

  <input type="submit" value="Submit">



</form>
