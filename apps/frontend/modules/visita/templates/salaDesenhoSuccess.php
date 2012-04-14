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
          <li id='SalaDesenho'><a href="<?php echo url_for('visita/salaDesenho') ?>"><?php echo __('Sala de Desenho') ?></a></li>
          <li id='SalaCivil'><a href="<?php echo url_for('visita/salaCivil') ?>"><?php echo __('Sala de Civil') ?></a></li>
          <li id='SalaQuimica'><a href="<?php echo url_for('visita/salaQuimica') ?>"><?php echo __('Sala de Quimica') ?></a></li>
          <li id='SalaMecanica'><a href="<?php echo url_for('visita/salaMecanica') ?>"><?php echo __('Sala de Mecânica') ?></a></li>
          <li id='SalaFisica'><a href="<?php echo url_for('visita/salaFisica') ?>"><?php echo __('Sala de Física') ?></a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <div class="row-fluid">
    <div id="nomesala" class="well"><h2>Sala de Desenho</h2></div>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <div class="well">
        <div id="videobody" >
          <!-- "Video For Everybody" http://camendesign.com/code/video_for_everybody -->
          <video controls="controls" poster="/image.jpg" width="490" height="360">
            <source src="/nome_do_video.mp4" type="video/mp4" />
            <source src="/nome_do_video.webm" type="video/webm" />
            <source src="/nome_do_video.ogv" type="video/ogg" />
            <object type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" width="640" height="360">
              <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
              <param name="allowFullScreen" value="true" />
              <param name="wmode" value="transparent" />
              <param name="flashVars" value="config={'playlist':['%2Fimage.jpg',{'url':'%2Fnome_do_video.mp4','autoPlay':false}]}" />
              <img alt="Titulo" src="/image.jpg" width="640" height="360" title="No video playback capabilities, please download the video below" />
            </object>
          </video>
          <p>
            <strong><?php echo __('Descarregar video') ?>:</strong> <a href="/nome_do_video.mp4"><?php echo __('Formato MP4') ?></a> | <a href="/nome_do_video.ogv"><?php echo __('Formato Ogg') ?></a> | <a href="/nome_do_video.webm"><?php echo ('Formato WebM') ?></a>
          </p>
        </div>
      </div>
    </div>
    <div class="span6">
      <div class="well">
        <h1 id="">popcorn.js</h1>
      </div>
    </div>
  </div>


  <div class="row-fluid">
    <!-- <div class="span4">
      <div class="well">
        Exm.ª Dr.ª Teresa Salgado
      </div>
    </div>-->
    <div class="span">
      <div class="well">
        <p><?php echo __('A área de desenho esteve presente nos planos curriculares dos alunos desde a criação da Escola Industrial do Porto em 1852. O seu ensino compreendia a execução do desenho à vista ou mão livre, ou com auxílio de instrumentos de precisão para desenho rigoroso.') ?></p>
        <p><?php echo __('Ao longo da segunda metade do séc. XIX e séc. XX o ensino do desenho foi-se ajustando às necessidades do ensino industrial.') ?></p>
        <p><?php echo __('No museu podem ser observados diversos materiais tais como plantas topográﬁcas, palacetes, quadrantes, réguas de cálculo, entre outros.') ?></p>
        <p></p>
        <h4><p><?php echo __('História') ?></p></h4>
        <p><?php echo __('A aula de desenho surgiu com o intuito de permitir aos alunos adquirirem capacidade na linguagem gráfica, ou seja, o seu principal objetivo era tornar os alunos capazes de compreender o uso das formas e cores nas suas aplicações.') ?></p>
        <p><?php echo __('O ensino era efetuado de duas formas: com o auxílio de instrumentos de precisão, denominado de desenho rigoroso, e por intermédio de mão livre denominado de desenho à vista.') ?></p>
        <p><?php echo __('No início do século XX, Portugal juntamente com os países mais desenvolvidos, implementou um conjunto de regras a nível da quantidade e qualidade dos instrumentos de desenho, começando assim esta metodologia a merecer destaque em manuais de instrução.') ?></p>
        <p><?php echo __('De 1852 a 1864 existia uma cadeira obrigatória de desenho em todos os cursos e em todos os graus, dando-se assim uma enorme relevância ao desenho. Ao longo dos anos e até à data de hoje várias mudanças foram ocorrendo em torno do programa letivo dos cursos, onde gradualmente as disciplinas de desenho foram perdendo uma grande importância.') ?></p>
        <p><?php echo __('Hoje em dia, apenas as licenciaturas de Engenharia Geotécnica, Geoambiente e Mecânica apresentam no seu plano de estudos uma cadeira de desenho técnico.') ?></p>

      </div>
    </div>
  </div>

</div>