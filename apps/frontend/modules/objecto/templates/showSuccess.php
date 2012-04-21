<div style="width: 100%; padding-top: 5px; height: 36px; line-height: 36px; vertical-align: middle;">
  <div style="width: 50%; float: left;"><h1><?php echo $objecto->getTitle() ?></h1></div>
  <div style="width: 50%; float: left;">
    <?php if($sf_user->isAuthenticated()): ?>
      <span style="text-align: right;">
        <a href="<?php echo url_for('commentObj/new?obj='.$objecto->getId()) ?>"><?php echo __('Commentar') ?></a>
        <a style="padding-left: 5px;" href="<?php echo url_for('voteObj/new?obj='.$objecto->getId()) ?>"><?php echo __('Votar') ?></a>
        </span>
    <?php endif; ?>
  </div>
</div>
<div>
  <?php
    if(count($votes))
    {
      $total_votes = 0;
      
      foreach($votes as $vote)
        $total_votes += $vote->getVote();
      
      $votes_value = round($total_votes/count($votes));
      echo __('Votação (');
      for($i=0; $i < $votes_value; $i++)
        echo image_tag(DIRECTORY_SEPARATOR . 'images/icons/star_full.png');
      
      for($j=$i; $j < 5; $j++)
        echo image_tag(DIRECTORY_SEPARATOR . 'images/icons/star_null.png');
      
      echo ')';
      echo __(' Total de votos: ') . count($votes);
    }
  ?>
</div>
<hr/>
<table style="width: 100%;">
  <tbody>
    <tr>
      <td>
        <b><?php echo __('Descrição') ?></b>
        <p><?php echo $objecto->getOverview(ESC_RAW) ?></p>
      </td>
      <td style="max-width: 300px;">
        <?php echo image_tag(DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'objectos' . DIRECTORY_SEPARATOR . $objecto->getImage(), array('alt' => $objecto->getTitle(), 'title' => $objecto->getTitle(), 'style' => 'max-width: 300px; max-height: 300px;')); ?>
      </td>
    </tr>
    <tr>
      <td>
        <b><?php echo __('Finalidade') ?></b>
        <p><?php echo $objecto->getFinality() ?></p>
      </td>
    </tr>
    <tr>
      <td>
        <b><?php echo __('História') ?></b>
        <p><?php echo $objecto->getHistory() ?></p>
      </td>
    </tr>
    <tr>
      <td>
        <b><?php echo __('Localização') ?></b>
        <p></p>
      </td>
    </tr>
  </tbody>
</table> 
<hr/>
<div style="padding-top: 20px;">
  <?php if(count($comments)): ?>
    <?php $date = new sfDateFormat(sfContext::getInstance()->getUser()->getCulture()) ?>
    <h1><?php echo __('Comentários') ?></h1>
    <hr/>
    <?php foreach($comments as $comment): ?>
      <div style="padding-top: 5px;">
        <span><?php echo $comment->getComment(ESC_RAW) ?></span>
        <br/>
        <br/>
        <span><?php echo __('Efectuado por: ') ?> <b><?php echo $comment->getUser()->getName() ?></b></span>
        <span style="padding-left: 25px;"><?php echo $date->format($comment->getCreatedAt(), 'D') ?></span>
      </div>
      <hr/>
    <?php endforeach; ?>
  <?php endif; ?>
</div>