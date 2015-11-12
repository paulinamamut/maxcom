<?php get_header(); ?>
<div id="content" class="maxConexion-container">
	<!-- INIT PARALLAX TOP BANNER -->
	<?php	get_template_part( 'template/maxcom-header' ); ?>
	<!-- END PARALLAX TOP BANNER -->
	<div class="general-info">
		<p class="title">Ofertas maxcom</p>
		<p>Conoce y descrubre todas las promociones que maxcom
ha creado exclusivamente para ti. No dejes pasar la oportunidad
de disfrutar lo que mes con mes tendremos preparado.</p>
	</div>

	<div class="banner-head promociones">
		<h2>PROMOCIONES <span>creadas a tu medida</span></h2>
	</div>

	<div class="elements-container promociones-container">
		<div class="element half">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>promociones/1.jpg" alt="Promociones 1"/>
			</div>
		</div>

		<div class="element half">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>promociones/2.jpg" alt="Promociones 2"/>
			</div>
		</div>

		<div class="element half">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>promociones/3.jpg" alt="Promociones 3"/>
			</div>
		</div>

		<div class="element half">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>promociones/4.jpg" alt="Promociones 4"/>
			</div>
		</div>

  </div>
</div>
<?php get_footer(); ?>