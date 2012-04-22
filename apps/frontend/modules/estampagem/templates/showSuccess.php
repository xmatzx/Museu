<div style="width: 100%; padding-top: 5px; height: 36px; line-height: 36px; vertical-align: middle;">
  <div style="width: 50%; float: left;"><h1><?php echo $estampagem->getTitle() ?></h1></div>
  <div style="width: 50%; float: left;">
    <?php if($sf_user->isAuthenticated()): ?>
      <span style="text-align: right;">
        <a href="<?php echo url_for('commentEst/new?obj='.$estampagem->getId()) ?>"><?php echo __('Comentar') ?></a>
        <a style="padding-left: 5px;" href="<?php echo url_for('voteEst/new?obj='.$estampagem->getId()) ?>"><?php echo __('Votar') ?></a>
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
        <p><?php echo $estampagem->getOverview(ESC_RAW) ?></p>
      </td>
      <td style="max-width: 300px;">
        <?php echo image_tag(DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'estampagens' . DIRECTORY_SEPARATOR . $estampagem->getImagem(), array('alt' => $estampagem->getTitle(), 'title' => $estampagem->getTitle(), 'style' => 'max-width: 300px; max-height: 300px;')); ?>
      </td>
    </tr>
    <tr>
      <td>
        <b><?php echo __('Designação') ?></b>
        <p><?php echo $estampagem->getDesignation() ?></p>
      </td>
    </tr>
    <tr>
      <td>
        <b><?php echo __('Tipologia') ?></b>
        <p><?php echo $estampagem->getTipologia()->getTitle() ?></p>
      </td>
    </tr>
    <tr>
      <td>
        <b><?php echo __('Localização') ?></b>
        <p><?php echo $estampagem->getLocal()->getTitle() ?></p>
      </td>
    </tr>
    <tr>
      <td>
        <b><?php echo __('Autor') ?></b>
        <p><?php echo $estampagem->getAutor() ?></p>
      </td>
    </tr>
    <tr>
      <td>
        <b><?php echo __('Materiais') ?></b>
        <p><?php echo $estampagem->getMaterial() ?></p>
      </td>
    </tr>
    <tr>
      <td>
        <b><?php echo __('Técnicas') ?></b>
        <p><?php echo $estampagem->getTecnique() ?></p>
      </td>
    </tr>
    <tr>
      <td>
        <b><?php echo __('Cores') ?></b>
        <p><?php echo $estampagem->getColors() ?></p>
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
        <span><?php echo strip_tags($comment->getComment(ESC_RAW)) ?></span>
        <br/>
        <br/>
        <span><?php echo __('Efectuado por: ') ?> <b><?php echo $comment->getUser()->getName() ?></b></span>
        <span style="padding-left: 25px;"><?php echo $date->format($comment->getCreatedAt(), 'D') ?></span>
      </div>
      <hr/>
    <?php endforeach; ?>
  <?php endif; ?>
</div>