<?php get_header(); ?>

<div id="content" class="maxConexion-container">

 	<?php	get_template_part( 'template/maxcom-header' ); ?>

  <div class="elements-container products-container" id="maxConexion-container">
    <a class="element onimagefull alphabgB" data-product="maxConexion" href="<?php echo SITEURL;?>maxconexion" >

        <img src="<?php echo IMAGEPATH;?>product_01_half.jpg" alt="maxConexión"/>
        <div class="info-container">
          <h3 class="icon maxConexion">maxConexión</h3>
          <p class="excerpt">Internet + Telefonía Incluida</p>
          <span class="goto">Ver más</span>
        </div>

    </a>

    <a class="element onimagefull alphabgB" href="<?php echo SITEURL;?>maxdiversion"  data-product="maxDiversion">

        <img src="<?php echo IMAGEPATH;?>product_02_half.jpg" alt="maxDiversión"/>
        <div class="info-container">
          <h3 class="icon maxDiversion">maxDiversión</h3>
          <p class="excerpt">La televisión hecha para ti</p>
          <span class="goto">Ver más</span>
        </div>

    </a>

    <a class="element onimagefull alphabgB" href="<?php echo SITEURL;?>maxmovil"  data-product="maxMovil">

        <img src="<?php echo IMAGEPATH;?>product_03_half.jpg" alt="maxMóvil"/>
        <div class="info-container">
          <h3 class="icon maxMovil">maxMóvil</h3>
          <p class="excerpt">Prácticamente es para ti</p>
          <span class="goto">Ver más</span>
        </div>

    </a>

  </div>

  <div id="products-container-info">
    <?php get_template_part( 'template/max-canales' ); ?>
   <?php	get_template_part( 'template/max-conexion-oferta' ); ?>
  </div>

<div class="elements-container">
	<a class="element onimage alphabgB half" href="<?php echo SITEURL;?>beneficios-de-asistencia">
		<div class="hover-container">
			<img src="<?php echo IMAGEPATH;?>beneficios_a.png" alt="maxcom Beneficios"/>

			<div class="active-on-hover">
				<!-- <h4>maxcom Beneficios</h4>
				<small>la televisión hecha para ti.</small> -->
				<ul class="single">
					<li>Despreocúpate por los imprevistos; te ofrecemos servicios

adicionales como asesoría legal, apoyo económico, envío de 

grúas, ayuda en el hogar, entre otros.</li>
				</ul>
			</div>
		</div>
    <div class="info-container">
      <h3>Beneficios de Asistencia</h3>
      <p class="excerpt">Siempre estamos de cerca de ti para ayudarte.</p>
      <span class="goto">Ver más</span>
    </div>
	</a>

	<div class="element onimage alphabgR half">
		<div class="hover-container">
			<img src="<?php echo IMAGEPATH;?>b2.jpg" alt="Compara maxcom"/>

			<div class="active-on-hover">
				<!-- <h4>Compara maxcom</h4>
				 <small>prácticamente es para ti.</small> -->
				<ul class="single">
					<li>En maxcom sumamos esfuerzos para brindarte el servicio que mereces al mejor precio. Tenemos paquetes que se adaptan a tu estilo de vida y al de tu empresa.</li>
				</ul>
			</div>
		</div>
    <div class="info-container red">
      <h3>Beneficios maxcom</h3>
      <p class="excerpt">Siempre pensamos en tus necesidades.</p>
      <a href="<?php echo SITEURL;?>portabilidad" class="goto">Ver más</a>
    </div>
	</div>

  </div>

  <div class="more-info">
    <div class="banner-head flecha">
      <div class="info">
        <h4>Cobertura</h4>
        <p>Cambiarte a maxcom es muy fácil. Consulta nuestra cobertura y descarga el formato de portabilidad para traer tu línea con nosotros.</p>
      </div>
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

      <div class="mapa cobertura-map other-map" id="map-canvas"></div>
    </div>

  </div>
  <div class="bgred">
    <div class="banner-head flecha nobg">
      <div class="info">
        <h4>Ligas destacadas</h4>
      </div>
      <div class="button-container">
        <button class="general-a bggray veroferta" data-show="ligas-container">Conoce <span>más</span></button>
      </div>
    </div>
  </div>

  <div class="elements-container ligas-container" style="display:none">
    <div class="buttons-container elements-4">
        <a href="http://xline.maxcom.com/PagoSuertudo/" class="general-a" target="_blank">Consulta tus Boletos <span>de Pago Suertudo</span></a>
        <a href="<?php echo ASSETPATH;?>planes-vigentes-2015.pdf" class="general-a" target="_blank">Descargar Planes <span>Vigentes 2015</span></a>
        <a href="<?php echo ASSETPATH;?>planes-vigentes-no-disponibles.pdf" class="general-a" target="_blank">Descargar Planes <span>Vigentes No Disponibles</span></a>
        <a href="<?php echo ASSETPATH;?>codigo-practicas-comerciales.pdf" class="general-a" target="_blank">Descargar Código de <span>Prácticas Comerciales</span></a>
      </div>
  </div>

</div>

<?php get_footer(); ?>