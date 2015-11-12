<?php get_header(); ?>
<div id="content" class="maxConexion-container">
	<?php	get_template_part( 'template/maxcom-header' ); ?>

	<div class="general-info">
		<p class="title">Siempre cerca de ti</p>
		<p>Para aclararte cualquier duda y brindarte el servicio de excelencia que mereces, podrás encontrar nuestras Casas maxcom u oficinas corporativas de manera rápida y sencilla.</p>
	</div>

	<div class="banner-head encuentranos">
		<h2>Encuéntranos <span>maxcom siempre contigo</span></h2>
	</div>

	<div class="mapa-container">
		<div class="regiones-container">
			<!-- <p>Será el inicio de una hermosa amistad.</p> -->
			<?php

			$args = array(
			    'orderby'           => 'name', 
			    'order'             => 'ASC',
			    'hide_empty'        => true, 
			    'exclude'           => array(), 
			    'exclude_tree'      => array(), 
			    'include'           => array(),
			    'number'            => '', 
			    'fields'            => 'all', 
			    'slug'              => '',
			    'parent'            => '',
			    'hierarchical'      => true, 
			    'child_of'          => 0,
			    'childless'         => false,
			    'get'               => '', 
			    'name__like'        => '',
			    'description__like' => '',
			    'pad_counts'        => false, 
			    'offset'            => '', 
			    'search'            => '', 
			    'cache_domain'      => 'core'
			); 

			$terms = get_terms('regiones', $args); 
			?>
			<select id="sucursales-regiones">
				<option value="">Selecciona tú región</option>
				<option value="estado-de-mexico">Estado de México</option>
				<option value="puebla">Puebla</option>
				<option value="queretaro">Querétaro</option>
				<option value="san-luis-potosi">San Luis Potosí</option>
			</select>

			<div class="info">
				<p class="cmax">Casas Maxcom</p>
				<p class="cac">Centro de Atención a Clientes</p>
			</div>
		</div>
		<div id="map-canvas" class="mapa sucursales-map other-map"></div>
		</div>
	</div>

	
</div>

<?php get_footer(); ?>