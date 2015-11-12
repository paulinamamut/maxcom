<?php 
	$start = 'background-position: 0px -286px;';
	$end = 'background-position: 0px 600px;';
	if(!is_home()){
		$img = 'small-header';
		$start = 'background-position: 0px -220px;';
		$end = 'background-position: 0px 300px;';
	}
 ?>
<div class="banner fullscreen background parallax-window maxcom-header <?php echo $img;?>" data-0="<?php echo $start; ?>" data-end="<?php echo $end; ?>" data-anchor-target="#maxcom-general-header" id="maxcom-general-header">
<div class="inner-parallax-window">
		<div class="mainText">
			<div class="text-phrase">
				<h4>Conéctate</h4>
				<small>con lo que más te gusta, <br/>conéctate con el mundo</small>
			</div>
		</div>
		<div class="footerBanner">
			<a href="<?php echo SITEURL;?>envianos-un-mensaje/?quiero-ser-cliente" class="contratanos">Contrátanos</a>
			<a href="<?php echo SITEURL;?>cotizador" class="contratanos cotiza">Cotiza ahora</a>
		</div>
		<div class="redes-container" id="tostick">
			<ul class="other">
				<li><a class="chat" onclick="window.open('http://maxchat.maxcom.com/', 'window_chat_maxcom','_blank', 'width=20, height=20, menubar=no');"><span>Chat</span> en línea</a></li>
				<li><a class="acceso" href="<?php echo SITEURL;?>acceso-a-clientes"><span>Acceso</span> a clientes</a></li>
			</ul>
			<ul class="redes-sociales">
				<li>
					<a href="https://twitter.com/Maxcom_Mexico" target="_blank">maxcom_mexico</a>
				</li>
				<li>
					<a href="https://www.facebook.com/MaxcomMexico" target="_blank">MaxcomMexico</a>
				</li>
				<li>
					<a href="https://www.youtube.com/user/MaxcomContigo" target="_blank">MaxcomContigo</a>
				</li>
			</ul>
			<!-- <a class="acceso-clientes" href="#">Acceso a Clientes</a> -->
		</div>
	</div>
</div>