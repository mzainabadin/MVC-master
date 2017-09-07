
<table>
<span>Student Record </span>
{foreach from =$user item =i }
 <tr style="background: {cycle values='silver ,gray'} " >
    <td> {$i->id}</td>
    <td> {$i->name}</td>
    <td>
      <form method="post" action="">
          <input type="hidden" name="id" value="{$i->id}"/>
          <input type="hidden" name="method" value="edit"/>
          <input type="submit" value="Edit">
      </form>
    </td>
    <td>
      <form method="post" action="">
          <input type="hidden" name="id" value="{$i->id}"/>
          <input type="hidden" name="method" value="delete"/>
          <input type="submit" value="delete">
      </form>
    </td>

    <td>
      <form method="post" action="">
          <input type="hidden" name="id" value="{$i->id}"/>
          <input type="hidden" name="method" value="add"/>
          <input type="submit" value="add">
      </form>
    </td>
 </tr>
{/foreach}

</table>
