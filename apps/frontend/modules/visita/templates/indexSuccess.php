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
          <li id='SalaCivil'><a href="<?php echo url_for('visita/salaCivil') ?>"><?php echo __('Sala de Civil, Metalúrgica e Hidráulica') ?></a></li>
          <li id='SalaQuimica'><a href="<?php echo url_for('visita/salaQuimica') ?>"><?php echo __('Sala de Química') ?></a></li>
          <li id='SalaMecanica'><a href="<?php echo url_for('visita/salaMecanica') ?>"><?php echo __('Sala de Mecânica') ?></a></li>
          <li id='SalaFisica'><a href="<?php echo url_for('visita/salaFisica') ?>"><?php echo __('Sala de Física, Eletrotécnia e Geometria Descritiva') ?></a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <div class="row-fluid">
    <div id="nomesala" class="well"><h2><?php echo __('Sala de Desenho') ?></h2></div>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <div class="well">
        <div id="videobody">
          <!-- "Video For Everybody" http://camendesign.com/code/video_for_everybody -->
          <video id ="video" controls="controls" poster="/images/video.jpg" width="490" height="360">
            <source src="/uploads/videos/Sala1_Desenho_legendado.mp4" type="video/mp4" />
            <source src="/uploads/videos/Sala1_Desenho_legendado.webm" type="video/webm" />
            <source src="/uploads/videos/Sala1_Desenho_legendado.ogv" type="video/ogg" />
            <object type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" width="640" height="360">
              <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
              <param name="allowFullScreen" value="true" />
              <param name="wmode" value="transparent" />
              <param name="flashVars" value="config={'playlist':['%2F/images/video.jpg',{'url':'%2F/uploads/videos/Sala1_Desenho_legendado.mp4','autoPlay':false}]}" />
              <img alt="Titulo" src="/images/video.jpg" width="490" height="360" title="No video playback capabilities, please download the video below" />
            </object>
          </video>
          <p>
            <strong><?php echo __('Descarregar video') ?>:</strong> <a href="/uploads/videos/Sala1_Desenho.mp4"><?php echo __('Formato MP4') ?></a> | <a href="/uploads/videos/Sala1_Desenho.ogv"><?php echo __('Formato Ogg') ?></a> |<a href="/uploads/videos/Sala1_Desenho.webm"><?php echo ('Formato WebM') ?></a>
          </p>
        </div>
      </div>
    </div>
    <div class="span6">
      <div id="imagesPop" class="well">
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
        <h4><p><?php echo __('Introdução') ?></p></h4>
        <p><?php echo __('A área de desenho esteve presente nos planos curriculares dos alunos desde a criação da Escola Industrial do Porto em 1852. O seu ensino compreendia a execução do desenho à vista ou mão livre, ou com auxílio de instrumentos de precisão para desenho rigoroso.') ?></p>
        <p><?php echo __('Ao longo da segunda metade do séc. XIX e séc. XX o ensino do desenho foi-se ajustando às necessidades do ensino industrial.') ?></p>
        <p><?php echo __('No museu podem ser observados diversos materiais tais como plantas topográﬁcas, palacetes, quadrantes, réguas de cálculo, entre outros.') ?></p>
        <p></p>
        <audio controls="controls"> 
            <source src="/uploads/audio/04Sala_Desenho_Historia.mp3" type="audio/mp3" />
            <source src="/uploads/audio/04Sala_Desenho_Historia.ogg" type="audio/ogg" />
        </audio>
        <br/>
        <h4><p><?php echo __('História') ?></p></h4>
        <p><?php echo __('A aula de desenho surgiu com o intuito de permitir aos alunos adquirirem capacidade na linguagem gráfica, ou seja, o seu principal objetivo era tornar os alunos capazes de compreender o uso das formas e cores nas suas aplicações.') ?></p>
        <p><?php echo __('O ensino era efetuado de duas formas: com o auxílio de instrumentos de precisão, denominado de desenho rigoroso, e por intermédio de mão livre denominado de desenho à vista.') ?></p>
        <p><?php echo __('No início do século XX, Portugal juntamente com os países mais desenvolvidos, implementou um conjunto de regras a nível da quantidade e qualidade dos instrumentos de desenho, começando assim esta metodologia a merecer destaque em manuais de instrução.') ?></p>
        <p><?php echo __('De 1852 a 1864 existia uma cadeira obrigatória de desenho em todos os cursos e em todos os graus, dando-se assim uma enorme relevância ao desenho. Ao longo dos anos e até à data de hoje várias mudanças foram ocorrendo em torno do programa letivo dos cursos, onde gradualmente as disciplinas de desenho foram perdendo uma grande importância.') ?></p>
        <p><?php echo __('Hoje em dia, apenas as licenciaturas de Engenharia Geotécnica, Geoambiente e Mecânica apresentam no seu plano de estudos uma cadeira de desenho técnico.') ?></p>
        <audio controls="controls"> 
            <source src="/uploads/audio/04Sala_Desenho_Historia.mp3" type="audio/mp3" />
            <source src="/uploads/audio/04Sala_Desenho_Historia.ogg" type="audio/ogg" />
        </audio>
      </div>
    </div>
  </div>

</div>
 <?php include_javascripts() ?>
    <script type="text/javascript">
    $(document).ready(function() {
     var p = Popcorn('#video')
      .image({
        start: 0, // seconds
        end: 9, // seconds
        src: '/images/desenho/1.jpg',
        target: 'imagesPop'
      } )
      
      .image({
        start: 9, // seconds
        end: 18, // seconds
        src: '/images/desenho/2.jpg',
        target: 'imagesPop'
      } )
      .image({
        start:18, // seconds
        end: 27, // seconds
        src: '/images/desenho/3.jpg',
        target: 'imagesPop'
      } )
      .image({
        start: 27, // seconds
        end: 36, // seconds
        src: '/images/desenho/4.jpg',
        target: 'imagesPop'
      } )
      .image({
        start: 36, // seconds
        end: 45, // seconds
        src: '/images/desenho/5.jpg',
        target: 'imagesPop'
      } )
      .image({
        start: 45, // seconds
        end: 54, // seconds
        src: '/images/desenho/6.jpg',
        target: 'imagesPop'
      } )
      .image({
        start: 54, // seconds
        end: 63, // seconds
        src: '/images/desenho/7.jpg',
        target: 'imagesPop'
      } )
      
      .image({
        start: 63, // seconds
        end: 72, // seconds
        src: '/images/desenho/8.jpg',
        target: 'imagesPop'
      } )
      .image({
        start:72, // seconds
        end: 81, // seconds
        src: '/images/desenho/9.jpg',
        target: 'imagesPop'
      } )
      .image({
        start: 81, // seconds
        end: 90, // seconds
        src: '/images/desenho/10.jpg',
        target: 'imagesPop'
      } )
      .image({
        start: 90, // seconds
        end: 99, // seconds
        src: '/images/desenho/11.jpg',
        target: 'imagesPop'
      } )
      .image({
        start: 99, // seconds
        end: 108, // seconds
        src: '/images/desenho/12.jpg',
        target: 'imagesPop'
      } )
    })
    </script>