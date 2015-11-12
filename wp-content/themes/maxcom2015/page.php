<?php get_header(); ?>
<div id="content" class="maxConexion-container">
	<?php	get_template_part( 'template/maxcom-header' ); ?>
	<div class="wrap">
		<h3><?php the_title(); ?></h3>

		<div class="the-content">
		<?php
		while ( have_posts() ) {
			the_post();
			the_content();
		}
		?>
		</div>
		<?php if (is_page('aviso-legal-terminos-y-condiciones')): ?>
		<div class="descargable-container">
			<b>Consulta</b>
			<ul class="descargable">
				<li>Carta de Derechos Mínimos de los Usuarios de los <b>Servicios Públicos de Telecomunicaciones</b><a href="<?php echo ASSETPATH;?>carta-de-derechos-minimos-de-los-usuarios-de-los-servicios-publicos-de-telecomunicaciones.pdf" class="goto" target="_blank"></a></li>
				<li>Derechos de los<b>Usuarios con Discapacidad</b><a href="<?php echo ASSETPATH;?>carta-de-derechos-minimos-de-los-usuarios-de-los-servicios-publicos-de-telecomunicaciones.pdf" class="goto" target="_blank"></a></li>
				<li>Riesgos relacionados <b>con México</b><a href="<?php echo ASSETPATH;?>factores-de-riesgo-mexico.pdf" class="goto" target="_blank"></a></li>
                <li>Consulta el <b>Contrato Residencial</b><a href="<?php echo ASSETPATH;?>contrato_carta_comodato_y_clausulado.pdf" class="goto" target="_blank"></a></li>
			</ul>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>