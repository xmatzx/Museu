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
    <div id="nomesala" class="well"><h2><?php echo __('Sala de Física, Eletrotécnia e Geometria Descritiva') ?></h2></div>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <div class="well">
        <div id="videobody" >
          <!-- "Video For Everybody" http://camendesign.com/code/video_for_everybody -->
          <video controls="controls" poster="/image.jpg" width="490" height="360">
            <source src="/uploads/videos/Sala5_Fisica_legendado.mp4" type="video/mp4" />
            <source src="/uploads/videos/Sala5_Fisica_legendado.webm" type="video/webm" />
            <source src="/uploads/videos/Sala5_Fisica_legendado.ogv" type="video/ogg" />
            <object type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" width="640" height="360">
              <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
              <param name="allowFullScreen" value="true" />
              <param name="wmode" value="transparent" />
              <param name="flashVars" value="config={'playlist':['%2Fimage.jpg',{'url':'%2Fn/uploads/videos/Sala5_Fisica_legendado.mp4','autoPlay':false}]}" />
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

    <div class="span">
      <div class="well">
        <h4><p><?php echo __('Introdução') ?></p></h4>
        <p><?php echo __('O estudo da física esteve presente na escola desde a sua criação. Na década de 70 do séc. XIX o gabinete de física continha uma numerosa e muito escolhida coleção de máquinas e aparelhos, em todos os ramos ou sessões da física experimental, que satisfazia as necessidades do ensino da época e estava preparado para acolher os novos inventos que entretanto surgiam.') ?></p>
        <p><?php echo __('Na reforma do ensino industrial, foi criado o Gabinete Eletrotécnico que era destinado às experiências necessárias para as lições e para exempliﬁcação e ensino das diversas aplicações da eletricidade. Atualmente esta coleção também possui alguns objetos pertencentes à antiga Escola Prática de telegraﬁa que era destinada ao ensino do uso e manipulação dos aparelhos telegráﬁcos e telefónicos dos diversos sistemas que ﬁcariam instalados, após algumas obras no edifico, no extinto convento das Carmelitas, onde já tinha funcionado a Repartição Central dos Telégrafos da cidade do Porto.') ?></p>
        <p><?php echo __('A geometria descritiva foi desde o início uma importante disciplina na formação dos alunos da escola. Foi comprado diverso material para o ensino prático, entre eles, em 1868 um conjunto de trinta modelos de ﬁguras de geometria descritiva, desde a projeção das linhas até à penetração dos sólidos, todos iguais aos que havia no Conservatório de Artes e Ofícios de Paris, que podem ser hoje contemplados no nosso museu.') ?></p>
        <audio controls="controls"> 
            <source src="/uploads/audio/13Sala_Fisica_Electrotecnia_Geometria_Descritiva.mp3" type="audio/mp3" />
            <source src="/uploads/audio/13Sala_Fisica_Electrotecnia_Geometria_Descritiva.ogg" type="audio/ogg" />
        </audio>
        <br/>
        <h4><p><?php echo __('História') ?></p></h4>
        <p><?php echo __('O estudo da Física esteve sempre presente na Escola. Em 1855 e após a instalação definitiva da escola no Edifício da Graça o Gabinete de Física é partilhado pela Escola e pela Academia Politécnica durante vários anos.') ?></p>
        <p><?php echo __('No registo oficial, o Gabinete de Física apenas passa a existir oficialmente em 1864, após a reforma do ensino industrial.') ?></p>
        <p><?php echo __('Entre 1891 e 1911 o Gabinete possuiu outro nome, denominado de Gabinete e Laboratório de Física, voltando após este intervalo ao nome anterior') ?>.</p>
        <p><?php echo __('Na década de 50, devido ao facto de o número de alunos ter aumentado bastante, foi elaborado um estudo para a criação de um novo laboratório de Física. Nos anos mais recentes e devido às necessidades do próprio ensino, o Departamento de Física reestruturou os seus laboratórios, passando a existir atualmente por exemplo, o Laboratório da Câmara Escura.') ?></p>
        <audio controls="controls"> 
            <source src="/uploads/audio/14Sala_Fisica_Electrotecnia_Geometria_Descritiva_historia.mp3" type="audio/mp3" />
            <source src="/uploads/audio/14Sala_Fisica_Electrotecnia_Geometria_Descritiva_historia.ogg" type="audio/ogg" />
        </audio>
        <br/>
        <h4><p><?php echo __('A Geometria Descritiva e Estereotomia') ?></p></h4>
        <p><?php echo __('O estudo da Geometria Descritiva foi desde início de estrema importância para a formação dos alunos na escola.') ?></p>
        <p><?php echo __('Em 1864, após mais uma reforma, as cadeiras foram alteradas e foi introduzido o estudo da Estereotomia.') ?></p>
        <p><?php echo __('O ensino da Geometria e da Estereotomia esteve sempre presente ao longo dos anos no estabelecimento de ensino, embora os nomes das disciplinas tenham variado com as contínuas reformas que foram ocorrendo ao longo dos anos.') ?></p>
        <p><?php echo __('Hoje em dia existem ainda disciplinas referentes a Geometria e Estereotomia nos cursos de Engenharia Civil e Geotécnica.') ?></p>
        <audio controls="controls"> 
            <source src="/uploads/audio/15Geometria_Descritiva_Estereotomia.mp3" type="audio/mp3" />
            <source src="/uploads/audio/15Geometria_Descritiva_Estereotomia.ogg" type="audio/ogg" />
        </audio>
        <br/>
        <h4><p><?php echo __('Gabinete Eletrotécnico') ?></p></h4>
        <p><?php echo __('O Gabinete Eletrónico foi criado em 1886 aquando da reforma do ensino industrial. Este gabinete, por falta de espaço no Edifício da Graça, foi instalado no Convento das Carmelitas.') ?></p>
        <p><?php echo __('Em 1981, após mais uma reforma dos Institutos Industriais e Comerciais, tanto o Gabinete Eletrotécnico como a disciplina foram descontinuadas, voltando ao ativo apenas em 1911. Contudo, ressalva-se que em 1905 foi introduzido o curso de Eletrotecnia.') ?></p>
        <p><?php echo __('Como referido anteriormente, em 1911 dá-se o regresso do Gabinete e Laboratório de Eletrotecnia e a partir de 1931 este passou a denominar-se de Laboratório de Eletricidade.') ?></p>
        <p><?php echo __('Hoje em dia, existem no departamento de Eletrotecnia diversos laboratórios que dão suporte às aulas práticas dos diversos ramos do curso.') ?></p>
        <audio controls="controls"> 
            <source src="/uploads/audio/16Gabinete_Eletrot.mp3" type="audio/mp3" />
            <source src="/uploads/audio/16Gabinete_Eletrot.ogg" type="audio/ogg" />
        </audio>
        <br/>
        <h4><p><?php echo __('Escola prática de Telegrafia') ?></p></h4>
        <p><?php echo __('Por intermédio do desenvolvimento dos meios de comunicação, a Telegrafia foi introduzida no Ensino Industrial em 1864, com a criação do curso de Telegrafistas.') ?></p>
        <p><?php echo __('Após a reforma de 1886, este curso passou a denominar-se de Curso de Correios e Telégrafos. Foi criada também uma Escola Prática de Telegrafia.') ?></p>
        <p><?php echo __('Na restruturação do ensino em 1891 o Curso de Telegrafista é suprimido, deixando também de ser referenciada a Escola Prática de Telegrafia.') ?></p>
        <p><?php echo __('Em 1905 reaparece o curso de Telégrafos, com a duração de 3 anos.') ?></p>
        <p><?php echo __('No ano de 1911, foi criado o Gabinete e Laboratório de Eletrotecnia onde estariam os aparelhos telegráficos.') ?></p>
        <p><?php echo __('Em 1919, após mais uma reforma do Ensino Industrial e Comercial, passa a existir o Curso Especializado de Eletrotecnia, tendo terminado o ensino de Telegrafia.') ?></p>
        <audio controls="controls"> 
            <source src="/uploads/audio/17Escola_Pr.mp3" type="audio/mp3" />
            <source src="/uploads/audio/17Escola_Pr.ogg" type="audio/ogg" />
        </audio>
      </div>
    </div>
  </div>

</div>