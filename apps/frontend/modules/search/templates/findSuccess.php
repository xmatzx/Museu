<script type="text/javascript">
  function showObject(obj_id)
  {
      var params = new Array();
      params[0] = 'i_module=objecto';
      params[1] = 'i_action=show';
      params[2] = 'p[id]='+obj_id;
      var url = '/boxiframe';
      title = '<?php echo __('Ver Objecto') ?>';
      Boxy.load(url,{title: title, type: 'POST', modal: true, unloadOnHide: true, data: params.join('&') });
  };
  
  function showEstamp(obj_id)
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

<div class="row" style="min-height: 50px;">
  <div class="span12">
    <div class="well">
      <h5><?php echo __('Pesquisa') ?></h5>
      <hr/>
      <form action="<?php echo url_for('search/find') ?>" method="post" enctype="multipart/form-data" >
        <table style="width: 100%; text-align: left;">
          <tfoot>
            <tr>
              <td colspan="2">
                <input type="submit" value="<?php echo __('Pesquisar') ?>" />
              </td>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <th><?php echo __('Pesquisar') ?>:</th>
              <td><input type="text" name="slug" id="slug"/></td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>

  <div class="span12">
    <div class="well">
      <h5><?php echo __('Resultados da pesquisa por: '. $slug) ?></h5>
      <hr/>
      <?php if(count($objectos) || count($estampagens) || count($noticias) || count($eventos)): ?>
        
        <?php if(count($objectos)): ?>
          <br/>
          <b><?php echo __('Categoria: Objectos') ?></b>
          <div style="text-indent: 10px;">
          <br/>
            <?php foreach($objectos as $objecto): ?>
            <p><a href="javascript:void(0)" onclick="showObject(<?php echo $objecto->getId() ?>)"><?php echo $objecto->getTitle() ?></a></p>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        
        <?php if(count($estampagens)): ?>
          <br/>
          <b><?php echo __('Categoria: Estampagens') ?></b>
          <div style="text-indent: 10px;">
          <br/>
            <?php foreach($estampagens as $estampagem): ?>
            <p><a href="javascript:void(0)" onclick="showEstamp(<?php echo $estampagem->getId() ?>)"><?php echo $estampagem->getTitle() ?></a></p>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
          
        <?php if(count($noticias)): ?>
          <br/>
          <b><?php echo __('Categoria: Notícias') ?></b>
          <div style="text-indent: 10px;">
          <br/>
            <?php foreach($noticias as $noticia): ?>
              <p><a href="<?php echo url_for('news/show?id='.$noticia->getId()) ?>"><?php echo $noticia->getTitle() ?></a></p>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        
        <?php if(count($eventos)): ?>
          <br/>
          <b><?php echo __('Categoria: Eventos') ?></b>
          <div style="text-indent: 10px;">
          <br/>
            <?php foreach($eventos as $evento): ?>
              <p><a href="<?php echo url_for('evento/show?id='.$evento->getId()) ?>"><?php echo $evento->getTitle() ?></a></p>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
          
      <?php else: ?>
        <p><?php echo __('Não foram encontradas resultados com os termos da sua pesquisa.') ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>