<h1><?php echo __('Listagem de eventos') ?></h1>

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
    <?php foreach ($eventos as $evento): ?>
    <tr>
      <td><a href="<?php echo url_for('evento/edit?id='.$evento->getId()) ?>"><?php echo $evento->getId() ?></a></td>
      <td><?php echo $evento->getTitle() ?></td>
      <td><?php echo $evento->getOverview() ?></td>
      <td><?php echo $evento->getCreatedAt() ?></td>
      <td><?php echo $evento->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('evento/new') ?>">New</a>
