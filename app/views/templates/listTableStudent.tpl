
<table>
<span>Student Record </span>
{foreach from =$user item =i }
 <tr style="background: {cycle values='silver ,gray'} " >
    <td> {$i->id}</td>
    <td> {$i->name}</td>
    <td><input type="button" value="Edit" onclick="edit({$i->id});"></td>
 </tr>
{/foreach}
<script>
function edit(id)
{
  document.write(id);
}
</script>

</table>
