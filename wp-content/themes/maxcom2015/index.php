<?php get_header(); ?>
<div id="content">
	<!-- INIT PARALLAX TOP BANNER -->
	<?php	get_template_part( 'template/maxcom-header' ); ?>

	<!-- END PARALLAX TOP BANNER -->

	<div class="elements-container elements-3">
	<!-- ELEMENT 1 -->
		<a class="element free" href="<?php echo SITEURL;?>maxconexion">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>product_01.jpg" alt="maxConexión"/>
				
				<div class="active-on-hover">
					<h4>Conéctate</h4>
					<small>con tu familia, amigos y el mundo entero.</small>
					<ul>
						<li>Planes</li>
						<li>Tarifas adicionales</li>
						<li>Equipos telefónicos</li>
					</ul>
				</div>

			</div>

			<div class="info-container">
				<h3 class="icon maxConexion">maxConexión</h3>
				<p class="excerpt">Internet + Telefonía Incluida</p>
				<span class="goto">Ver más</span>
			</div>
		</a>
	<!-- FIN ELEMENT 1  -->

	<!-- ELEMENT 2 -->
		<a class="element free alphabgB" href="<?php echo SITEURL;?>maxdiversion">

			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>product_02.jpg" alt="maxDiversión"/>
				<div class="active-on-hover">
					<h4>Diviértete</h4>
					<small>de muchas maneras con lo que te gusta.</small>
					<ul>
						<li>Paquetes de canales</li>
						<li>Servicios adicionales</li>
						<li>Video Bajo Demanda</li>
					</ul>
				</div>
			</div>

			<div class="info-container">
				<h3 class="icon maxDiversion">maxDiversión</h3>
				<p class="excerpt">Diversión a tu medida</p>
				<span class="goto">Ver más</span>
			</div>


		</a>
	<!-- FIN ELEMENT 2 -->

	<!-- ELEMENT 3 -->
		<a class="element free" data-href="<?php echo SITEURL;?>maxmovil">

			<div class="hover-container">

				<img src="<?php echo IMAGEPATH;?>product_03.jpg" alt="maxMóvil"/>
				<div class="active-on-hover">
					<h4>Un celular,</h4>
					<small>muchas oportunidades.</small>
					<ul>
						<li>Planes</li>
						<li>Tarifas adicionales</li>
						<li>Equipos telefónicos</li>
					</ul>
				</div>
			</div>

			<div class="info-container">
				<h3 class="icon maxMovil">maxMóvil</h3>
				<p class="excerpt">Prácticamente es para ti</p>
				<span class="goto">Ver más</span>
			</div>


		</a>
	<!-- FIN ELEMENT 3 -->
	</div>

	<div class="more-info">

		<div class="banner-promocion">
			<a href="index-maxcom-for-business"><img src="<?php echo IMAGEPATH;?>bannerbusiness2.jpg" alt="Maxcom for business"/></a>
		</div>

		<div class="mapa-container versucursales">
			<h5>maxcom cerca de ti</h5>
			<p>Haz clic y conoce nuestras sucursales</p>
			<a href="<?php echo SITEURL;?>encuentranos"><img src="<?php echo IMAGEPATH;?>mapa.png" class="mapco"/></a>
		</div>

	</div>

	<div class="elements-container">
		<a class="element onimage alphabgR" href="<?php echo SITEURL;?>portabilidad">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>s1.jpg" alt="maxDiversión"/>
				<div class="active-on-hover">
					<ul class="single">
						<li>Cambiarte a maxcom es muy fácil. Consulta nuestra cobertura y descarga el formato de portabilidad para traer tu línea con nosotros.</li>
					</ul>
				</div>
			</div>
			<div class="info-container">
				<h3 class="bigger">Portabilidad</h3>
				<span class="goto">Ver más</span>
			</div>
		</a>

		<a class="element onimage alphabgB">

			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>s2.jpg" alt="maxMóvil"/>
				<div class="active-on-hover">
					<ul class="single">
						<li>En maxcom sumamos esfuerzos para brindarte el servicio que mereces al mejor precio. Tenemos paquetes que se adaptan a tu estilo de vida y al de tu empresa.</li>
					</ul>
				</div>	
			</div>
			<div class="info-container">
				<h3 class="bigger">Beneficios maxcom</h3>
				<span class="goto">Ver más</span>
			</div>

		</a>

		<a class="element onimage alphabgR" href="http://ri.maxcom.com/" target="_blank">

			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>s3.jpg" alt="maxMóvil"/>
				<div class="active-on-hover">
					<ul class="single">
						<li>Maxcom fortalece el compromiso con la transparencia.</li>
					</ul>
				</div>
			</div>

			<div class="info-container">
				<h3 class="bigger">Inversionistas</h3>
				<span class="goto">Ver más</span>
			</div>

		</a>

	</div>
</div>
<?php get_footer(); ?>