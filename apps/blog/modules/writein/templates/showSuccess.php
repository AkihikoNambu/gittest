<?php
// auto-generated by sfPropelCrud
// date: 2014/05/09 14:14:41
?>
<table>
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $writein->getId() ?></td>
</tr>
<tr>
<th>Title: </th>
<td><?php echo $writein->getTitle() ?></td>
</tr>
<tr>
<th>Body: </th>
<td><?php echo $writein->getBody() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $writein->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $writein->getUpdatedAt() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'writein/edit?id='.$writein->getId()) ?>
&nbsp;<?php echo link_to('list', 'writein/list') ?>
