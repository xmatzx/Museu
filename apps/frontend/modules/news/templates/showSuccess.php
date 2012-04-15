<style type="text/css">
  .news:first-child { border-top: none; }
  .news { border-top: 1px solid #E9E9E9; padding-bottom: 35px; }
  .news h2 { padding-top: 16px; }
  .content { min-height: 200px; }
  .content p {
    float: left;
    padding-top: 15px;
    margin-bottom: 25px;
  }
  .thumb {
/*    background: url(/images/thumb-frame.png) no-repeat;*/
    margin: 0 0 5px 0;
    padding: 0;
    margin-right: 10px;
    width: 294px;
    height: 204px;
    float: left;
  }
  .news-text { padding-top: 3px; }
</style>

<div id="InfoGeral" class="well">
  <div class="news">
    <h2><?php echo $news->getTitle() ?></h2>
    <div class="content">
      <?php if($news->getImage()): ?>
        <div class="thumb">
          <?php echo image_tag(DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'news' . DIRECTORY_SEPARATOR . $news->getImage(), array('style' => 'width: 254px; height: 165px; padding-top: 3px; padding-left: 20px;')); ?>
        </div>
      <?php endif; ?>
      <div class="news-text">
        <?php echo $news->getOverview(ESC_RAW) ?>
      </div>
      <p>
        <?php echo $date->format($news->getUpdatedAt(), 'D'); ?>
      </p>
    </div>
  </div>
</div>