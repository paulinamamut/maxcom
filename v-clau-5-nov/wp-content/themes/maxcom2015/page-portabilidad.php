<?php get_header(); ?>
<div id="content" class="maxConexion-container">
	<!-- INIT PARALLAX TOP BANNER -->
	<?php	get_template_part( 'template/maxcom-header' ); ?>
	<!-- END PARALLAX TOP BANNER -->
	<div class="general-info">
		<p class="title">Cámbiate a maxcom</p>
		<p>Ahora cambiarte a maxcom es más fácil que nunca. 
		Consulta nuestra cobertura y descarga el formato de portabilidad
		para empezar el proceso para traer tu línea con nosotros.</p>
	</div>

	<div class="banner-head portabilidad">
		<h2>Portabilidad <span>en menos de 24 horas</span></h2>
	</div>

	<div class="triangle red">
		<h3>COBERTURA</h3>
	</div>
	<div class="mapa-container">
		<div class="regiones-container">
			<p>Ahora cambiarte a maxcom es más fácil que nunca. Consulta nuestra cobertura para empezar el proceso para traer tu línea con nosotros. Será el inicio de una hermosa amistad.</p>

			<select id="tipo-cobertura" name="tipo-cobertura">
				<option value="">Selecciona tipo de Cobertura</option>
				<option value="fo">Fibra Óptica</option>
				<option value="cobre">Cobre</option>
			</select>

			<select id="cobertura-regiones" style="display:none;">
				<option value="">Selecciona tú región</option>
				<option value="distrito-federal">Distrito Federal</option>
				<option value="estado-de-mexico">Estado de México</option>
				<option value="puebla">Puebla</option>
				<option value="queretaro">Querétaro</option>
				<option value="san-luis-potosi">San Luis Potosí</option>
				<option value="tehuacan">Tehuacán</option>
			</select>

			

		</div>
		<div class="mapa cobertura-map other-map" id="map-canvas">
		</div>
	</div>

	<div class="banner-head flecha">
		<div class="info">
			<h4>Requisitos de Portabilidad</h4>
			<p>Conoce todos los requisitos necesarios para
			poder realizar el trámite de portabilidad.</p>
		</div>
		<div class="button-container">
			<button class="general-a" id="ver-requisitos">Ver <span>requisitos</span></button>
		</div>
	</div>

	<div class="page-info-container info-container" id="requisitos" style="display:none">
		<div class="s-content">
			<ul class="bigger">
				<li>Número a Portar (10 dígitos)</li>
				<li>NIP (Número de Identificación Personal)</li>
				<li>Contrato de Prestación de Servicios Maxcom</li>
				<li>Identificación Oficial</li>
			</ul>

			<p>Para la obtención del NIP el cliente deberá llamar al 051, desde el teléfono que desea portar; posteriormente recibirá una llamada de regreso, indicando un numero de 4 dígitos (NIP) este número el cliente lo deberá proporcionar para solicitar su Portabilidad. El NIP tiene una vigencia de 15 días naturales.</p>

			<p class="title">
				Recuperación de número
			</p>
			<p>Si ya canceló su número con su anterior compañía y desea recuperarlo, también podrá realizar su trámite de portabilidad siempre y cuando tenga menos de 40 días naturales de haber solicitado la cancelación de su servicio.</p>
				
			<b>Los requisitos:</b>

			<ul>

				<li>Formato de Portabilidad (Sin NIP)</li>
				<li>Carta cancelación emitida por su empresa de telefónica
				con fecha menor a 40 días, esta carta tiene que venir
				membretada y con el número telefónico a portar.</li>
				<li>Contrato de Prestación de Servicios Maxcom</li>
				<li>Identificación Oficial</li>
			</ul>

			<p>El tramite se deberá realizar en un CAC o Casa Maxcom.</p>

			<p class="title">Notas Adicionales</p>
			<p>De acuerdo a la Publicación del Diario Oficial las identificaciones validas son:</p>

			<ul>
				<li>Formato de Portabilidad (Sin NIP)</li>
				<li>Credencial de elector IFE o INE vigente (Emisión 15 en adelante)</li>
				<li>Pasaporte</li>
				<li>Cédula Profesional (máximo 10 años desde su expedición)</li>
				<li>Cartilla Militar (máximo 10 años desde su expedición)</li>
				<li>IMSS</li>
				<li>Licencia</li>
				<li>CURP</li>
			</ul>

			<p>El tiempo de respuesta de la portabilidad será de 24 hrs. a partir de la instalación.</p>

			<div class="buttons-container">
				<a href="<?php echo ASSETPATH;?>formato-portabilidad-2015.pdf" class="general-a" target="_blank">Descargar formato <span>de portabilidad</span></a>
				<a href="https://www.npcpub.neoris.com.mx/PublicWebsite/" class="general-a" target="_blank">Status de tu trámite <span>de portabilidad</span></a>
			</div>

		</div>

	</div>
</div>
<?php get_footer(); ?>