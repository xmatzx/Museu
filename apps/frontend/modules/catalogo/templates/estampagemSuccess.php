<script type="text/javascript">
  function showObject(obj_id)
  {
    var params = new Array();
    params[0] = 'i_module=estampagem';
    params[1] = 'i_action=show';
    params[2] = 'p[id]='+obj_id;
    var url = '/boxiframe';
    title = '<?php echo __('Ver Estampagem') ?>';
    Boxy.load(url,{title: title, type: 'POST', modal: true, unloadOnHide: true, data: params.join('&') });
  };
</script>

<div id="main">
  
  <div class='navbar-innerguide'>
    <div class='container-fluid'>
      <a data-target='.nav-collapse' data-toggle='collapse' class='btn btn-navbar'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </a>
      <div class='nav-collapse'>
        <ul class='nav'>
          <li id='cat_objecto'><a href="<?php echo url_for('catalogo/index') ?>"><?php echo __('Objectos') ?></a></li>
          <li id='cat_estampagem'><a href="<?php echo url_for('catalogo/estampagem') ?>"><?php echo __('Estampagens') ?></a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <div class="row-fluid">
    <div class="well">
      <h1><?php echo __('Catálogo: estampagens') ?></h1>
    </div>
  </div>

  <?php if ($pager->haveToPaginate()): ?>
    <div class="row-fluid">
      <div class="pagination pagination-right">
        <ul>
          <li>
            <a href="<?php echo url_for('catalogo/estampagem') ?>?page=1">←</a>
          </li>
          <?php foreach ($pager->getLinks() as $page): ?>
            <?php if ($page == $pager->getPage()): ?>
              <li class="active"><a href="#"><?php echo $page ?></a></li>
            <?php else: ?>
              <li><a href="<?php echo url_for('catalogo/estampagem') ?>?page=<?php echo $page ?>"><?php echo $page ?></a></li>
            <?php endif; ?>
          <?php endforeach; ?>
          <li>
            <a href="<?php echo url_for('catalogo/estampagem') ?>?page=<?php echo $pager->getLastPage() ?>">→</a>
          </li>
        </ul>
      </div>
    </div>
  <?php endif; ?>

  <div class="row-fluid">



    <ul class="thumbnails">
      <?php foreach ($pager->getResults() as $page): ?>
        <li class="span3">
          <div class="thumbnail">
            <?php echo image_tag(DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'estampagens' . DIRECTORY_SEPARATOR . $page->getImagem(), array('alt' => $page->getTitle(), 'title' => $page->getTitle(),'style' => 'max-width: 260px; max-height: 180px;cursor: pointer;', 'onclick' => 'showObject('.$page->getId().')')); ?>
            <h5><a href="javascript:void(0)" onclick="showObject(<?php echo $page->getId() ?>)"><?php echo $page->getTitle() ?></a></h5>
<!--            <p><?php //echo $page->getCategoria()->getTitle() ?></p>-->
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <?php if ($pager->haveToPaginate()): ?>
    <div class="row-fluid">
      <div class="pagination pagination-right">
        <ul>
          <li>
            <a href="<?php echo url_for('catalogo/estampagem') ?>?page=1">←</a>
          </li>
          <?php foreach ($pager->getLinks() as $page): ?>
            <?php if ($page == $pager->getPage()): ?>
              <li class="active"><a href="#"><?php echo $page ?></a></li>
            <?php else: ?>
              <li><a href="<?php echo url_for('catalogo/estampagem') ?>?page=<?php echo $page ?>"><?php echo $page ?></a></li>
            <?php endif; ?>
          <?php endforeach; ?>
          <li>
            <a href="<?php echo url_for('catalogo/estampagem') ?>?page=<?php echo $pager->getLastPage() ?>">→</a>
          </li>
        </ul>
      </div>
    </div>
  <?php endif; ?>
</div>