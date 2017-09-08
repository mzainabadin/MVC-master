<form action="" method="post">
  <table border="1">

    <tr>
      <td><span>Sure you want to delete id- {$id}</span></td>
      <td>
          <input type="hidden" name="id" value="{$id}"/>
          <input type="hidden" name="method" value="{$method}"/>
          <input type="hidden" name="Param1" value="delete"/>
      </td>
    </tr>
  </table>

  <input type="submit" value="delete">



</form>
