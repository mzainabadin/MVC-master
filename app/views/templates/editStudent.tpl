
<table>
<span>Student Record </span>
{foreach from =$user item =i }
 <tr style="background: {cycle values='silver ,gray'} " >
    <td> {$i->id}</td>
    <td> {$i->name}</td>
    <td>
      <form method="post" action="">
      <input type="hidden" name="id" value="{$i->id}"/>
      <input type="submit" value="Edit">
      </form>
    <td>
 </tr>
{/foreach}

</table>
