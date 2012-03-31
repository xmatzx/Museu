<h1>Produtos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Overview</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($produtos as $produto): ?>
    <tr>
      <td><a href="<?php echo url_for('produto/show?id='.$produto->getId()) ?>"><?php echo $produto->getId() ?></a></td>
      <td><?php echo $produto->getTitle() ?></td>
      <td><?php echo $produto->getOverview() ?></td>
      <td><?php echo $produto->getCreatedAt() ?></td>
      <td><?php echo $produto->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('produto/new') ?>">New</a>
