<div>
  <?php foreach ($news as $new): ?>
    <h5>
      <a href="<?php echo url_for('news/show?id='.$new->getId()) ?>"><?php echo $new->getTitle() ?></a>
    </h5>
    <p><?php echo $new->getResume(ESC_RAW) ?></p>
  <?php endforeach; ?>
</div>