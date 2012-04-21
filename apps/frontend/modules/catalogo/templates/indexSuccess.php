<script type="text/javascript">
  function showObject(obj_id)
  {
    console.log(obj_id);
      var params = new Array();
      params[0] = 'i_module=objecto';
      params[1] = 'i_action=show';
      params[2] = 'p[id]='+obj_id;
      var url = '/boxiframe';
      title = 'Comment';
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
      <h1><?php echo __('Catálogo: objectos') ?></h1>
    </div>
  </div>

  <div class="row-fluid">
    <div class="pagination pagination-right">
      <ul>
        <li><a href="#">←</a></li>
        <li class="active">
          <a href="#">1</a>
        </li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">→</a></li>
      </ul>
    </div>
  </div>

  <div class="row-fluid">

    <?php if ($pager->haveToPaginate()): ?>
      teste
    <?php endif; ?>

    <ul class="thumbnails">
      <?php foreach ($pager->getResults() as $page): ?>
        <li class="span3">
          <div class="thumbnail">
            <?php echo image_tag(DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'objectos' . DIRECTORY_SEPARATOR . $page->getImage(), array('alt' => $page->getTitle(), 'title' => $page->getTitle(),'style' => 'max-width: 260px; max-height: 180px;')); ?>
  <!--            <img alt="<?php echo $page->getTitle() ?>" title="<?php echo $page->getTitle() ?>" src="http://placehold.it/260x180"/>-->
            <h5><a href="javascript:void(0)" onclick="showObject(<?php echo $page->getId() ?>)"><?php echo $page->getTitle() ?></a></h5>
            <p>Thumbnail caption right here...</p>
          </div>
        </li>
      <?php endforeach; ?>
<!--        <li class="span3">
          <div class="thumbnail">
            
            <img alt="" title="" src="http://placehold.it/260x180"/>
            <h5>teste</h5>
            <p>Thumbnail caption right here...</p>
          </div>
        </li>-->
    </ul>
  </div>

  <div class="row-fluid">
    <div class="pagination pagination-right">
      <ul>
        <li><a href="#">←</a></li>
        <li class="active">
          <a href="#">1</a>
        </li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">→</a></li>
      </ul>
    </div>
  </div>
</div>