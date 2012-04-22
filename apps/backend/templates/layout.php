<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
  <head>
    <title>Museu ISEP</title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php use_stylesheet('admin.css') ?>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>
          <img src="/images/banner.png" alt="Jobeet Job Board" style="width: 100%;" />
        </h1>
      </div>
      
      <?php if ($sf_user->isAuthenticated()): ?>
        <div id="menu">
          <ul>
            <li><?php echo link_to('Utilizadores', 'sf_guard_user') ?></li>
            <li><?php echo link_to('Objectos', 'objecto') ?></li>
            <li><?php echo link_to('Objectos: Comentários', 'commentobject') ?></li>
            <li><?php echo link_to('Objectos: Votações', 'vote_objecto') ?></li>
            <li><?php echo link_to('Estampagens', 'estampagem') ?></li>
            <li><?php echo link_to('Estampagens: Comentários', 'comment_estampagem') ?></li>
            <li><?php echo link_to('Estampagens: Votações', 'vote_estampagem') ?></li>
            <li><?php echo link_to('Notícias', 'news') ?></li>
            <li><?php echo link_to('Eventos', 'evento') ?></li>
            <li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
          </ul>
        </div>
      <?php endif; ?>
      
      <div id="content">
        <?php echo $sf_content ?>
      </div>
 
      <div id="footer">
      </div>
    </div>
  </body>
</html>
