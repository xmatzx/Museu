<div class='navbar-innerguide'>
          <div class='container-fluid'>
            <a data-target='.nav-collapse' data-toggle='collapse' class='btn btn-navbar'>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </a>
            <div class='nav-collapse'>
              <ul class='nav'>
                <li id='SalaDesenho'><a href="<?php echo url_for('visita/salaDesenho') ?>">Sala de Desenho</a></li>
                <li id='SalaCivil'><a href="<?php echo url_for('visita/salaCivil') ?>">Sala de Civil</a></li>
                <li id='SalaQuimica'><a href="<?php echo url_for('visita/salaQuimica') ?>">Sala de Quimica</a></li>
                <li id='SalaMecanica'><a href="<?php echo url_for('visita/salaMecanica') ?>">Sala de Mecânica</a></li>
                <li id='SalaFisica'><a href="<?php echo url_for('visita/salaFisica') ?>">Sala de Física</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
<div id="nomesala" class="well"><h2>Sala de Quimica</h2></div>
<div id="videobody" class="well">
    <!-- "Video For Everybody" http://camendesign.com/code/video_for_everybody -->
<video controls="controls" poster="/image.jpg" width="640" height="360">
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
    <div class="well" style="float:right;width:440px;">TEXT</div>
<p>
	<strong>Download video:</strong> <a href="/nome_do_video.mp4">MP4 format</a> | <a href="/nome_do_video.ogv">Ogg format</a> | <a href="/nome_do_video.webm">WebM format</a>
</p>
</div>

