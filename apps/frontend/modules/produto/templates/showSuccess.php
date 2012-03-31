<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $produto->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $produto->getTitle() ?></td>
    </tr>
    <tr>
      <th>Overview:</th>
      <td><?php echo $produto->getOverview() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $produto->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $produto->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('produto/edit?id='.$produto->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('produto/index') ?>">List</a>
