
<table>
{foreach from =$user item =i }
 <span>Student Record </span>
 <tr style="background: {cycle values='silver ,gray'} " >
    <td> {$i->id}</td>
    <td> {$i->name}</td>
 </tr>

{/foreach}

</table>
