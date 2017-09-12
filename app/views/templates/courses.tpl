<table>
<span> Detail </span>
{foreach from =$user item =i }
 <tr style="background: {cycle values='silver ,gray'} " >

    <td> {$i->student_id}</td>
    <td> {$i->course_id}</td>
    <td>
        <input type="hidden" name="id" value="{$id}"/>
        <input type="hidden" name="method" value="{$method}"/>
    </td>
 </tr>
{/foreach}

</table>
