<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php use_javascript('jquery-1.7.2.js') ?>
    <?php use_javascript('jquery.boxy/src/javascripts/jquery.boxy.js')?>
    <?php use_javascript('jquery.rating.pack.js')?>
    <?php include_javascripts() ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".ui-state-highlight").animate({
            opacity: 1,
            height: 'toggle'
          }, 2000, function() {
        });
        $(".ui-state-error").animate({
            opacity: 1,
            height: 'toggle'
          }, 2000, function() {
        });
      });
    </script>
  </head>
  <body>
    <div style="background-color: whiteSmoke;" class="container">
      <div id="main">
<!--        <div style="padding: 15px;">-->
          <?php if ($sf_user->hasFlash('success')): ?>
              <div id="noticeFlash" class="ui-pnotify ui-widget ui-helper-clearfix ui-helper-style">
                <div class="ui-pnotify-shadow ui-widget-shadow"></div>
                <div class="ui-pnotify-container ui-corner-all ui-state-highlight" style="min-height: 16px;">
                  <div class="ui-pnotify-closer" style="cursor: pointer; display: none;">
                    <span class="ui-icon ui-icon-circle-close"></span>
                  </div>
                  <div class="ui-pnotify-icon">
                    <span class="ui-icon ui-icon-info"><?php echo image_tag('icons/notify_info.png') ?></span>
                  </div>
                  <div class="ui-pnotify-text"><?php echo $sf_user->getFlash('success') ?></div>
                </div>
              </div>
            <?php endif; ?>
            <?php if ($sf_user->hasFlash('error')): ?>
              <div id="errorFlash" class="ui-pnotify ui-widget ui-helper-clearfix ui-helper-style">
                <div class="ui-pnotify-shadow ui-widget-shadow"></div>
                <div class="ui-pnotify-container ui-corner-all ui-state-error" style="min-height: 16px;">
                  <div class="ui-pnotify-closer" style="cursor: pointer; display: none;">
                    <span class="ui-icon ui-icon-circle-close"></span>
                  </div>
                  <div class="ui-pnotify-icon">
                    <span class="ui-icon ui-icon-info"><?php echo image_tag('icons/notify_error.png') ?></span>
                  </div>
                  <div class="ui-pnotify-text"><?php echo $sf_user->getFlash('error') ?></div>
                </div>
              </div>
            <?php endif; ?>
<!--        </div>-->
        <?php echo $sf_content ?>
      </div>

    </div>
  </body>
</html>
