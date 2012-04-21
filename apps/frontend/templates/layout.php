<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php use_javascript('jquery-1.7.2.js') ?>
     <?php use_javascript('bootstrap.js')?>
    <?php use_javascript('popcorn.js')?>
    <?php include_javascripts() ?>
    <script type="text/javascript">
      function setCulture(language)
      {
        $.ajax({
          url: "<?php echo url_for('home/setCulture') ?>",
          data: { culture: language}
        }).done(function(data) { 
          window.location.href = location.href;
        });
      }
    </script>
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="row-fluid">
          <img src="/images/banner.png" style="width: 100%; margin-top: 5px;"/>
        </div>
        
        

        <div class="navbar-inner">
          <ul id="flags">
            <li><a href="javascript:void(0)" onclick="setCulture('pt')" title="<?php echo __('Português') ?>"><?php echo image_tag('icons/pt.png') ?></a></li>
            <li><a href="javascript:void(0)" onclick="setCulture('en')" title="<?php echo __('Inglês') ?>"><?php echo image_tag('icons/en.png') ?></a></li>
          </ul>
          <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <span class="brand"><?php echo __('Bem vindo') ?></span>
            <div class="nav-collapse">
              <ul class="nav">
                <li id="home"><a href="<?php echo url_for('@homepage') ?>"><?php echo __('Home') ?></a></li>
                <li id="catalogo"><a href="<?php echo url_for('catalogo/index') ?>"><?php echo __('Catálogo') ?></a></li>
                <li id="visita"><a href="<?php echo url_for('visita/index') ?>"><?php echo __('Visita Guiada') ?></a></li>
                <li id="contact"><a href="<?php echo url_for('contacto/index') ?>"><?php echo __('Contactos') ?></a></li>
                <li id="Help" style="margin-left: 400px;"><a  href="<?php echo url_for() ?>"><img src="/images/icons/BT_Ajuda.png"></img></a></li>
                <li id="Search"><a href="<?php echo url_for('') ?>"><img src="/images/icons/BT_PESQUISA.png"></img></a></li>
              </ul>
              <p class="navbar-text pull-right">
                <?php if($sf_user->isAuthenticated()): ?>
                  <span><?php echo $sf_user->getGuardUser()->getName() ?></span>
                  <a href="<?php echo url_for('@sf_guard_signout') ?>"><?php echo __('Sair') ?></a>
                <?php else: ?>
                  <a href="<?php echo url_for('@sf_guard_signin') ?>"><?php echo __('Entrar/Registar') ?></a>
                <?php endif; ?>
              </p>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div><!-- navbar -->

      <div id="main">
        <?php echo $sf_content ?>
      </div>

      <hr/>

      <footer class="well">
        <div class="row-fluid">
          <div class="span3">
            <h5>Telefone</h5>
            <hr/>
            <a href="">+351 228 340 508</a>
          </div>
          <div class="span3">
            <h5>FAX</h5>
            <hr/>
            <a href="">+351 228 321 159</a>
          </div>
          <div class="span3">
            <h5>Mail</h5>
            <hr/>
            <a href="mailto:museu@isep.ipp.pt">museu@isep.ipp.pt</a>
          </div>
          <div class="span3">
            <h5><?php echo __('O Museu no teu telemóvel') ?></h5>
            <hr/>
            <a href=""><img src="/images/qrcodeMuseuVCard.png" style="width: 125px; max-height: 125px;"/></a>
          </div>
        </div>

        <div class="row-fluid">
          <div class="pull-right">
            <p>&copy; ISEP 2012</p>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
