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
    <div id="nomesala" class="well"><h2><?php echo __('Sala de Química') ?></h2></div>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <div class="well">
        <div id="videobody" >
          <!-- "Video For Everybody" http://camendesign.com/code/video_for_everybody -->
          <video controls="controls" poster="/image.jpg" width="490" height="360">
            <source src="/uploads/videos/Sala3_Quimica_legendado.mp4" type="video/mp4" />
            <source src="/uploads/videos/Sala3_Quimica_legendado.webm" type="video/webm" />
            <source src="/uploads/videos/Sala3_Quimica_legendado.ogv" type="video/ogg" />
            <object type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" width="640" height="360">
              <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
              <param name="allowFullScreen" value="true" />
              <param name="wmode" value="transparent" />
              <param name="flashVars" value="config={'playlist':['%2F/images/video.jpg',{'url':'%2F/uploads/videos/Sala3_Quimica_legendado.mp4','autoPlay':false}]}" />
              <img alt="Titulo" src="/images/video.jpg" width="640" height="360" title="No video playback capabilities, please download the video below" />
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

    <div class="span">
      <div class="well">
        <h4><p><?php echo __('Introdução') ?></p></h4>
        <p><?php echo __('Com a criação da Escola Industrial em 1852, a instalação do laboratório químico foi sempre uma preocupação e desde logo foi adquirido diverso material para o ensino prático da química. O Conselho Escolar do Instituto considerava que este estabelecimento era uma das repartições de ensino prático mais importantes.') ?></p>
        <p><?php echo __('O laboratório químico era destinado não só a preparar as experiências necessárias às lições orais da cadeira de química e às manipulações dos alunos para complemento do ensino teórico mas, também para fazer análises, experiências e ensaios, que lhes eram incumbidos pelo governo ou solicitados pelos particulares. Era também destinado à realização de investigações científicas ou tecnológicas ordenadas pelo respetivo diretor, ministrar o ensino da química prática aos indivíduos estranhos ao Instituto, que se dedicavam à indústria e facilitar aos particulares a execução de quaisquer análises ou trabalhos compatíveis com o ensino.') ?></p>
        <p><?php echo __('A coleção existente no museu é composta por inúmeros utensílios vulgarmente utilizados nos laboratórios químicos, como pipetas, buretas, areómetros, balões, retortas, e instrumentos, como polarímetro, vino-colorímetro, microscópios, balanças, entre outros.') ?></p>
        <br/>
        <h4><p><?php echo __('História') ?></p></h4>
        <p><?php echo __('Uma das prioridades após a criação da escola industrial em 1852 foi a criação do Laboratório Químico, fundamental para o funcionamento da 7ª cadeira – Química Aplicada às Artes.') ?></p>
        <p><?php echo __('A escassez de espaço para instalar o Laboratório obrigou o órgão dirigente da escola a considerar várias alternativas para ver finalmente a cadeira a ser lecionada.') ?></p>
        <p><?php echo __('O Conselho Escolar da Escola considerava que este estabelecimento era uma das repartições de ensino prático mais importantes, ao qual o referido conselho pretendia dar maior desenvolvimento, pelas vantagens que poderia trazer para o ensino da Química aplicada às Artes e para a Indústria em geral.') ?></p>
        <p><?php echo __('Após a reforma de 1886, o Laboratório Químico ganhou uma maior importância, agregando à sua componente meramente teórica uma maior capacidade a nível da experiência e da investigação. Muitas das experiências eram incumbidas por intermédio do Governo ou solicitadas por parte das organizações particulares.') ?></p>
        <p><?php echo __('Ao longo das várias reformas foram surgindo inúmeros laboratórios, atualmente ligados ao ensino da Química: o Laboratório de Eletroquímica e Corrosão, o Laboratório de Química Analítica, o Laboratório de Química Orgânica e Bioquímica Microbiana, o Laboratório de Química Analítica Qualitativa, o Laboratório de Tecnologia Química, entre outros.') ?></p>
      </div>
    </div>
  </div>

</div>