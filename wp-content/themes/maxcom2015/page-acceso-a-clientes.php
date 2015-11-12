<?php get_header(); ?>
<div id="content" class="maxConexion-container">
	<!-- INIT PARALLAX TOP BANNER -->
	<?php	get_template_part( 'template/maxcom-header' ); ?>
	<!-- END PARALLAX TOP BANNER -->
	<div class="general-info">
		<p class="title">Tu cuenta maxcom</p>
		<p>Te damos acceso a las herramientas para que le
saques el mayor provecho a tus servicios.</p>
	</div>

	<div class="banner-head acceso-clientes">
		<h2>ACCESO A CLIENTES <span>CONSULTA TUS SERVICIOS</span></h2>
	</div>

	<div class="elements-container elements-4">
		<a class="element onimage alphabgB" href="http://mail.maxcom.net.mx/" target="_blank">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>consulta-de-mail.png" alt="maxcom Beneficios"/>

				<div class="active-on-hover">
					<ul class="single">
						<li>Accede a tus cuentas de correo maxcom.</li>
					</ul>
				</div>
			</div>
		    <div class="info-container">
		      <h3>Consulta tu mail</h3>
		      
		      <span class="goto">Ver más</span>
		    </div>
		</a>

		<a class="element onimage alphabgR" href="http://audioconferencia.maxcom.com/" target="_blank">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>audio-conferencias.png" alt="Compara maxcom"/>

				<div class="active-on-hover">
					<ul class="single">
						<li>Una forma páctica de mantenerte conectado.</li>
					</ul>
				</div>
			</div>
		    <div class="info-container">
		      <h3>Accede a </br>Audio Conferencias</h3>
		      <span class="goto">Ver más</span>
		    </div>
		</a>

		<a class="element onimage alphabgB" href="https://webhosting02.maxcom.net.mx/FacturaWeb/" target="_blank" >
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>detalle-de-llamadas.png" alt="maxcom Beneficios"/>

				<div class="active-on-hover">
					<ul class="single">
						<li>Consulta el detalle de tus llamadas.</li>
					</ul>
				</div>
			</div>
		    <div class="info-container">
		      <h3>Detalle de llamadas</h3>
		      <small>Sólo clientes comerciales</small>
		      <span class="goto">Ver más</span>
		    </div>
		</a>

		<a class="element onimage alphabgR" href="<?php echo SITEURL; ?>mi-cuenta/" target="_blank">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>mi-cuenta.png" alt="Compara maxcom"/>

				<div class="active-on-hover">
					<ul class="single">
						<li>Estamos siempre cerca de ti.</li>
					</ul>
				</div>
			</div>
		    <div class="info-container">
		      <h3>Mi cuenta</h3>
		      <span class="goto">Ver más</span>
		    </div>
		</a>

  </div>

</div>
<?php get_footer(); ?>