<div>
  <iframe name="<?php echo $iframe_name?>" id="<?php echo $iframe_name?>" frameborder="0" src="<?php echo url_for($iframe_module.'/'.$iframe_action.'?ifr=1&'.http_build_query($sf_data->getRaw('params'),'','&'))?>" style="width: <?php echo $iframe_width?>px;height: <?php echo $iframe_height?>px;"></iframe>
</div>