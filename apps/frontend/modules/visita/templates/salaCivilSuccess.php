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
    <div id="nomesala" class="well"><h2><?php echo __('Sala de Civil, Metalúrgica e Hidráulica') ?></h2></div>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <div class="well">
        <div id="videobody" >
          <!-- "Video For Everybody" http://camendesign.com/code/video_for_everybody -->
          <video id="video" controls="controls" poster="/images/video.jpg" width="490" height="360">
            <source src="/uploads/videos/Sala2_Civil_Minas_legendado.mp4" type="video/mp4" />
            <source src="/uploads/videos/Sala2_Civil_Minas_legendado.webm" type="video/webm" />
            <source src="/uploads/videos/Sala2_Civil_Minas_legendado.ogv" type="video/ogg" />
            <object type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" width="640" height="360">
              <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
              <param name="allowFullScreen" value="true" />
              <param name="wmode" value="transparent" />
              <param name="flashVars" value="config={'playlist':['%2F/images/video.jpg',{'url':'%2F/uploads/videos/Sala2_Civil_Minas_legendado.mp4','autoPlay':false}]}" />
              <img alt="Titulo" src="/images/video.jpg" width="640" height="360" title="No video playback capabilities, please download the video below" />
            </object>
          </video>
          <p>
            <strong><?php echo __('Descarregar video') ?>:</strong> <a href="/uploads/videos/Sala2_Civil_Minas_legendado.mp4"><?php echo __('Formato MP4') ?></a> | <a href="/uploads/videos/Sala2_Civil_Minas_legendado.ogv"><?php echo __('Formato Ogg') ?></a> | <a href="/uploads/videos/Sala2_Civil_Minas_legendado.webm"><?php echo ('Formato WebM') ?></a>
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

    <div class="span">
      <div class="well">
        <h4><p><?php echo __('Introdução') ?></p></h4>
        <p><?php echo __('A primeira referência à área de civil aparece em 1864, na primeira reforma do ensino industrial, quando é criado o curso de Condutores de Obras Públicas e 6ª cadeira – Construções Civis e Tecnologia Geral.') ?></p>
        <p><?php echo __('A coleção existente no museu é composta por modelos de pontes e viadutos, modelos de rodas hidráulicas, turbinas, comportas.') ?></p>
        <audio controls="controls"> 
            <source src="/uploads/audio/05Sala_Civil_Metalurgica_Hidraulica.mp3" type="audio/mp3" />
            <source src="/uploads/audio/05Sala_Civil_Metalurgica_Hidraulica.ogg" type="audio/ogg" />
        </audio>
        <br/>
        <h4><p><?php echo __('História') ?></p></h4>
        <p><?php echo __('Apenas em 1864, após a primeira reforma do ensino industrial, aparece a primeira referência à área de Civil. Posteriormente não existe qualquer referência a um gabinete e/ou laboratório específico nesta área.') ?></p>
        <p><?php echo __('Em 1898 o Gabinete de Construções estava situado no extinto Convento das Carmelitas, juntamente com a aula de pintura, as oficinas de serralharia e carpintaria e a aula de mecânica.') ?></p>
        <p><?php echo __('No início do século XX foi criado o curso de Construções Civis e Obras Públicas, que apenas foi alterado em 1931 quando passou a incorporar as Minas, passando assim a denominar-se de Obras Públicas e Minas.') ?></p>
        <p><?php echo __('No ano de 1950, para dar apoio ao curso de Construção Civil e Minas, foram criados dois gabinetes, o de Resistência de Materiais e Estabilidade e o de Materiais de Construção e Cimento Armado.') ?></p>
        <audio controls="controls"> 
            <source src="/uploads/audio/06Sala_Civil_Metalurgica_Hidraulica_Historia.mp3" type="audio/mp3" />
            <source src="/uploads/audio/06Sala_Civil_Metalurgica_Hidraulica_Historia.ogg" type="audio/ogg" />
        </audio>
        <br/>
        <h4><p><?php echo __('Gabinete de Mineralogia e Arte de Minas') ?></p></h4>
        <p><?php echo __('A arte de minas no século XIX era vista como um fator importante para o progresso da Sociedade. Só em 1864, esta área integrou o plano de estudos. Também neste ano surgem registos sobre o Gabinete de Mineralogia, embora não constem nos respetivos decretos. Em 1869 esta área ganha relevância no Porto ao ser decretado o Curso de Condutores de Minas e de Mestres Mineiros, sendo unicamente lecionado nesta cidade. O Gabinete de Mineralogia e Arte de Minas foi criado em 1886, mas no ano seguinte passou a denominar-se apenas de Gabinete de Arte e de Minas.') ?></p>
        <p><?php echo __('Já em 1888 por intermédio do Professor Miranda Júnior é realizada a instalação do Gabinete de Arte de Minas e Metalurgia. A importância destes Laboratórios foi enorme, pois os alunos tinham possibilidade de encontrar modelos das grandes inovações tecnológicas da época. Ao longo dos restantes anos foram surgindo inúmeras reformas a nível destas áreas, sendo lecionadas em diversos cursos, como por exemplo o curso de Construção Civil e Minas, nos anos cinquenta. Desde 1975 existe no Instituto o Departamento de Engenharia Geotécnica (DEG), com a Licenciatura em Geotécnica e Geoambiente, onde as áreas de Mineralogia e Minas ainda são abordadas.') ?></p>
        <p><?php echo __('A coleção é composta por modelos de revestimentos de galerias, poços verticais, ventiladores de minas, modelos de bombas centrífugas, minérios, modelos de lavra de minas, modelos de fornos e de aparelhos de perfuração, modelos de recuperação de ar quente, modelos de aparelhos metalúrgicos e outros aparelhos e mecanismos empregues nas minas.') ?></p>
        <audio controls="controls"> 
            <source src="/uploads/audio/07Gabinete_Mineralogia_Arte_Minas.mp3" type="audio/mp3" />
            <source src="/uploads/audio/07Gabinete_Mineralogia_Arte_Minas.ogg" type="audio/ogg" />
        </audio>
        <br/>
        <h4><p><?php echo __('Gabinete de Hidráulica') ?></p></h4>
        <p><?php echo __('A Hidráulica assumiu um papel importante em grande parte dos cursos lecionados neste Instituto.') ?></p>
        <p><?php echo __('Inicialmente o estudo desta temática era dividida em duas grandes partes, em que a primeira era dedicada aos aspetos relacionados com o uso no contexto diário da Hidráulica. A segunda era dedicada à aplicabilidade e estudo da Hidráulica no contexto mais específico dos rios, canais e portos do mar.') ?></p>
        <p><?php echo __('Contudo, após a reforma do ensino industrial e comercial de 1919 o estudo da Hidráulica passou a ser dividido em três partes. A primeira parte refere o estudo da Hidráulica em geral, urbana e agrícola, sendo uma disciplina mais teórica e de cálculo; a segunda parte era referente à hidráulica mecânica e aplicações do ar comprimido e da água em pressão, esta tinha uma componente orientada para a utilidade da hidráulica no aproveitamento da água; A terceira parte era responsável pelo estudo de rios e portos do mar, onde o seu principal objetivo, como o nome indica, tratava do estudo dos rios nas suas diferentes tipologias, partes que o constituem e da utilização e proteção dos mesmos.') ?></p>
        <p><?php echo __('A partir de 1919 a cadeira dedicada ao ensino da Hidráulica fazia parte do Curso Especializado de Construções Civis e Obras Públicas, do Curso Especializado de Minas, do Curso Especializado de Máquinas e do Curso Especializado de Eletrotecnia.') ?></p>
        <p><?php echo __('Em 1927 o plano curricular sofre alterações, mantendo-se de igual forma as três partes da cadeira, embora sofrendo uma substancial alteração.') ?></p>
        <p><?php echo __('Desde 1919 e até à data de hoje a cadeira manteve-se sempre dívida em três partes, com campos de estudo bastante específicos. Contudo, graças à evolução humana, científica e tecnológica, foram existindo bastantes reformas ao longo dos anos, o que fez com que estas três partes fossem sofrendo ligeiras adaptações, de forma a adequarem-se à atualidade.') ?></p>
        <audio controls="controls"> 
            <source src="/uploads/audio/08Gabinete de Hidr.mp3" type="audio/mp3" />
            <source src="/uploads/audio/08Gabinete de Hidr.ogg" type="audio/ogg" />
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
        src: '/images/civil/1.JPG',
        target: 'imagesPop'
      } )
      
      .image({
        start: 9, // seconds
        end: 18, // seconds
        src: '/images/civil/2.JPG',
        target: 'imagesPop'
      } )
      .image({
        start:18, // seconds
        end: 27, // seconds
        src: '/images/civil/3.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 27, // seconds
        end: 36, // seconds
        src: '/images/civil/4.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 36, // seconds
        end: 45, // seconds
        src: '/images/civil/5.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 45, // seconds
        end: 54, // seconds
        src: '/images/civil/6.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 54, // seconds
        end: 63, // seconds
        src: '/images/civil/7.JPG',
        target: 'imagesPop'
      } )
      
      .image({
        start: 63, // seconds
        end: 72, // seconds
        src: '/images/civil/8.JPG',
        target: 'imagesPop'
      } )
      .image({
        start:72, // seconds
        end: 81, // seconds
        src: '/images/civil/9.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 81, // seconds
        end: 90, // seconds
        src: '/images/civil/10.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 90, // seconds
        end: 99, // seconds
        src: '/images/civil/11.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 99, // seconds
        end: 108, // seconds
        src: '/images/civil/12.JPG',
        target: 'imagesPop'
      } )
    })
    </script>