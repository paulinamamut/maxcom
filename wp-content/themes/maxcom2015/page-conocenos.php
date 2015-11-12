<?php get_header(); ?>
<div id="content" class="maxConexion-container">
	<!-- INIT PARALLAX TOP BANNER -->
	<?php	get_template_part( 'template/maxcom-header' ); ?>
	<!-- END PARALLAX TOP BANNER -->
	<div class="general-info">
		<p class="title">Descubre maxcom</p>
		<p>Desde 1996, hemos entregado soluciones de comunicación de última tecnología
		a empresas que buscan optimizar su productividad y ahorrar costos, hemos ayudado
		a instituciones que necesitan coordinar sus actividades y compartir información de
		manera segura y hemos conectado a millones de personas con lo que es más
		importante para ellas, todo esto con el estándar de servicio más alto.</p>
	</div>

	<div class="elements-container">
		<div class="element alphagray">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>quienes-somos.jpg" alt="Quienes somos"/>
				<h3>Quiénes</br>somos</h3>
			</div>
	    <div class="info-container">
	     <p class="single">Empresa mexicana de telecomunicaciones fundada en 1996 que basa su desarrollo en mejorar la productividad de tu hogar y de tu empresa. Resolvemos las necesidades de nuestros clientes en comunicaciones, conectividad, colaboración y servicios.</p>
	    </div>
		</div>

	<div class="element alphabgR">
		<div class="hover-container">
			<img src="<?php echo IMAGEPATH;?>sobre-nosotros.jpg" alt="Sobre nosotros"/>
			<h3>Acerca de</br>nosotros</h3>
		</div>
	    <div class="info-container red">
	      <p class="single">Ofrecemos soluciones de comunicación, de última tecnología, a hogares y empresas que buscan optimizar su productividad, ahorrar costos y mantenerse conectados. Además, brindamos un servicio personalizado a cada cliente y empresa con la que colaboramos.</p>
	    </div>
	</div>

	<div class="element alphagray">
		<div class="hover-container">
			<img src="<?php echo IMAGEPATH;?>beneficios.png" alt="Beneficios"/>
			<h3>Beneficios</h3>
		</div>
	    <div class="info-container">
	      <p class="single">Con maxcom puedes disfrutar servicios de telefonía local, larga distancia, voz sobre IP, telefonía celular, telefonía pública, acceso a Internet, televisión por cable y paquetes para uso residencial y empresarial con cobertura en muchos estados de la República Mexicana.</p>
	    </div>
	</div>

  </div>

</div>
<?php get_footer(); ?>