<div id="main">
  <div class="row">
    <div class="carousel" id="myCarousel">
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="active item">
          <img style="width: 100%; max-height: 200px;" src="img/objecto3.png">
        </div>
        <div class="item">
          <img style="width: 100%; max-height: 200px;" src="img/objecto4.png">
        </div>
        <div class="item">
          <img style="width: 100%; max-height: 200px;" src="img/objecto5.png">
        </div>
      </div>
      <!-- Carousel nav -->
      <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
      <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
    </div>
  </div><!-- row -->

  <div class="row">
    <div class="span2">
      <div class="well">
        <img style="width: 100%" src="http://placekitten.com/g/200/200">
      </div>
    </div>
    <div class="span10">
      <div class="well">
        <h2><?php echo __('Museu do ISEP') ?></h2>
        <p><?php echo __('Instalado no ISEP, o Museu foi criado em 1998 e possui um numeroso espólio de instrumentos científicos datados, na sua grande maioria do séc. XIX.') ?></p>
        <p><?php echo __('Sendo o ISEP uma escola de carácter tecnológico, desde cedo teve necessidade de adquirir objetos que demonstrassem de forma clara a evolução científica e técnica, muito importante no ensino experimental de então.') ?></p>
        <p><?php echo __('A sua coleção, que documenta a história das engenharias dos últimos 155 anos, estende-se a quase todas as áreas lecionadas neste estabelecimento, da física à eletrotécnica, da matemática à mecânica, da engenharia química à civil sem esquecer a copiosa coleção de mineralogia.') ?></p>
        <p><?php echo __('Para além dos objetos, o museu do ISEP, possui ainda um considerável espólio bibliográﬁco onde podemos encontrar grandes obras de referência como a enciclopédia de Diderot e Alembert, um precioso livro de física de Musschenbroeck ou um livro de arquitetura de Leon Battista Alberti.') ?></p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="span4">
      <div class="well">
        <h5><?php echo __('Últimas Notícias') ?></h5>
        <hr>
        <?php echo include_partial('news/list', array('news' => $news)) ?>
      </div>
    </div>
    <div class="span4">
      <div class="well">
        <h5><?php echo __('Peças em destaque') ?></h5>
        <hr>
        <div class="row-fluid">
          <?php foreach($objects as $object): ?>
            <ul class="thumbnails" style="width: 100%;">
              <li class="span3" style="width: 100%;">
                <div class="thumbnail">
                  <?php echo image_tag(DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'objectos' . DIRECTORY_SEPARATOR . $object->getImage(), array('style' => 'max-height: 250px;')); ?>
<!--                  <img alt="" src="<?php echo $object->getImage() ?>">-->
                  <h5 style="padding-top: 10px;"><?php echo $object->getTitle() ?></h5>
                  <p><?php echo $object->getDesignation() ?></p>
                </div>
              </li>
            </ul>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    
    
    
    <div class="span4">
      <div style="background: orange;" class="well">
        <h5><i class="icon-info-sign icon-white"></i><?php echo __('Informações Úteis') ?></h5>
        <hr>
        <h6><?php echo __('Morada') ?></h6>
        <p>Rua Dr. António Bernardino de Almeida 431, 4200-072 Porto  Portugal</p>
        <iframe width="300" height="247" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-PT&amp;q=R.+do+Dr.+Ant%C3%B3nio+Bernardino+de+Almeida,+Paranhos,+4200+Porto,+Portugal&amp;aq=&amp;sll=41.179108,-8.605716&amp;sspn=0.010191,0.016544&amp;g=Dr.+Ant%C3%B3nio+Bernardino+de+Almeida,+431+-+4200-072+Porto+-+Portugal&amp;ie=UTF8&amp;geocode=FZRNdAIdqqV8_w&amp;split=0&amp;hq=&amp;hnear=R.+do+Dr.+Ant%C3%B3nio+Bernardino+de+Almeida,+Porto,+Portugal&amp;ll=41.179106,-8.605707&amp;spn=0.002548,0.004136&amp;t=m&amp;z=14&amp;output=embed"></iframe>
        <br />
        <small>
          <a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=pt-PT&amp;q=R.+do+Dr.+Ant%C3%B3nio+Bernardino+de+Almeida,+Paranhos,+4200+Porto,+Portugal&amp;aq=&amp;sll=41.179108,-8.605716&amp;sspn=0.010191,0.016544&amp;g=Dr.+Ant%C3%B3nio+Bernardino+de+Almeida,+431+-+4200-072+Porto+-+Portugal&amp;ie=UTF8&amp;geocode=FZRNdAIdqqV8_w&amp;split=0&amp;hq=&amp;hnear=R.+do+Dr.+Ant%C3%B3nio+Bernardino+de+Almeida,+Porto,+Portugal&amp;ll=41.179106,-8.605707&amp;spn=0.002548,0.004136&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left"><?php echo __('Ver mapa maior') ?></a>
        </small>
        <h6><?php echo __('Telefone') ?></h6>
        <p>228 340 508</p>
      </div>
    </div>
  </div>
</div>