<table>
  <br>
  <br>
  <span><strong> Detail of Student with id - {$id} </strong> </span>
  <br>
  <th>Course id</th>
  <th>Course name</th>
  {foreach from =$user item =i }
  <tr style="background: {cycle values='silver ,gray'} " >
      <td>{$i->id}</td>
      <td> {$i->name}</td>
  {/foreach}
</table>
<form method="post" action="">
    <input type="hidden" name="id" value="{$id}"/>
    <input type="hidden" name="model" value="course_student"/>
    <input type="hidden" name="method" value="addcourse"/>
    <input type="submit" value="Add another course">
</form>
