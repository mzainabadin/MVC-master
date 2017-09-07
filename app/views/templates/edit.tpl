<form action="" method="post">
  <table border="1">

    <tr>
      <td><span>Enter Updated value</span></td>
      <td>
          <textarea name="Param1">{$post.Comment|escape}</textarea>
          <input type="hidden" name="id" value="{$id}"/>
          <input type="hidden" name="method" value="{$method}"/>
      </td>
    </tr>
  </table>

  <input type="submit" value="Save">



</form>
