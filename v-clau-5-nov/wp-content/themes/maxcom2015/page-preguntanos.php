<?php get_header(); ?>
<div id="content" class="maxConexion-container">
	<!-- INIT PARALLAX TOP BANNER -->
	<?php	get_template_part( 'template/maxcom-header' ); ?>
	<!-- END PARALLAX TOP BANNER -->
	<div class="general-info">
		<p class="title">Atención a clientes</p>
		<p>Ante cualquier duda o aclaración, ponemos a tu disposición un
equipo especializado para brindarte el servicio de excelencia
que mereces. Siempre estamos cerca de ti.</p>
	</div>

	<div class="banner-head preguntanos">
		<h2>PREGÚNTANOS <span>RESOLVEMOS tus dudas</span></h2>
	</div>

	<div class="elements-container elements-3">
		<a class="element onimage alphabgB" href="<?php echo SITEURL;?>envianos-un-mensaje">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>consulta-mail.png" alt="maxcom Beneficios"/>

				<div class="active-on-hover">
					<ul class="single">
						<li>¿Necesitas contactarnos de inmediato? Sólo llena un sencillo formulario con tus datos y comentarios; nosotros nos pondremos en contacto contigo a la brevedad. Estamos para servirte.</li>
					</ul>
				</div>
			</div>
		    <div class="info-container">
		      <h3 class="bigger">Envíanos un mensaje</h3>
		      
		      <span class="goto">Ver más</span>
		    </div>
		</a>

		<a class="element onimage alphabgR" href="<?php echo SITEURL;?>acceso-a-clientes">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>acceso-clientes.png" alt="Compara maxcom"/>

				<div class="active-on-hover">
					<ul class="single">
						<li>Administra tus servicios, consulta tus pagos y descarga comprobantes en nuestro portal de manera rápida, sencilla y segura.</li>
					</ul>
				</div>
			</div>
		    <div class="info-container">
		      <h3 class="bigger">Acceso a clientes</h3>
		      <span class="goto">Ver más</span>
		   	</div>
		</a>

		<a class="element onimage alphabgB" href="<?php echo SITEURL; ?>guias-y-tutoriales">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>guia-y-tutoriales.png" alt="maxcom Beneficios"/>

				<div class="active-on-hover">
					<ul class="single">
						<li>Nuestros tutoriales y guías te explican de manera sencilla y paso a paso todo lo que necesitas saber para sacar el máximo provecho de tus servicios.</li>
					</ul>
				</div>
			</div>
		    <div class="info-container">
		      <h3 class="bigger">Guías y Tutoriales</h3>
		      <span class="goto">Ver más</span>
		    </div>
		</a>

  </div>

	<div class="triangle red left">
		<h3>Números de servicio</h3>
	</div>

	<div class="medios-container">
		<div class="republica-container">
			<p>Interior de
			la República</p>
			<span>01 800 629 2662</span>
		</div>
		<div class="elements">
			<div class="elements-container elements-3">
				<div class="telefono">
					<p>Distrito Federal</p>
					<span>5147 5147</span>
				</div>

				<div class="telefono">
					<p>Puebla</p>
					<span>266 2266</span>
				</div>

				<div class="telefono">
					<p>San Martín Texmelucan</p>
					<span>348 486 0266</span>
				</div>
			</div>

			<div class="elements-container elements-3">
				<div class="telefono">
					<p>Tehuacán</p>
					<span>328 124 4646</span>
				</div>

				<div class="telefono">
					<p>Querétaro</p>
					<span>442 497 1000</span>
				</div>

				<div class="telefono">
					<p>San Luis Potosí</p>
					<span>444 240 4343</span>
				</div>
			</div>
		</div>
	</div>

</div>
<?php get_footer(); ?>