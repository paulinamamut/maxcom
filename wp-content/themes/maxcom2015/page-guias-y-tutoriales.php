<?php get_header(); ?>
<div id="content" class="maxConexion-container">
	<!-- INIT PARALLAX TOP BANNER -->
	<?php	get_template_part( 'template/maxcom-header' ); ?>
	<!-- END PARALLAX TOP BANNER -->
	<div class="general-info">
		<p class="title">Guías y tutoriales</p>
		<p>Tú tienes muchas maneras de comunicarte con lo que más te gusta. Por eso, te ofrecemos planes que te permiten elejir lo que quieres: teléfono de línea fija, Internet, televisión y telefono móvil. Sólo maxcom te ofrece tantas maneras de comunicarte con tu mundo.</p>
	</div>

	<div class="banner-head guias-y-tutoriales">
		<h2>Guias y tutoriales</h2>
	</div>

	<div class="general-info">
		<p class="title">Descubre la nueva televisión</p>
		<p>En maxcom contamos con la mejor selección de canales
para toda la familia. Aquí encontrarás una gran
variedad de contenido y programación.</p>
	</div>

	<div class="tarifas-container maxdiversion-container tutoriales">
		<div class="row">
			<a class="tarifa veroferta" target="_blank" href="<?php echo ASSETPATH;?>guia_servicios_digitales.pdf">
				<h4>Guía <span>Cómo usar las soluciones digitales</span></h4>
				
				<span class="goto"></span>

			</a>

			<div class="tarifa veroferta" data-show="oferta-2">
				<h4>Video Tutorial <span>Cambio de contraseña TPLINK</span></h4>
				
				<span class="goto"></span>
			</div>

			<div class="tarifa veroferta" data-show="oferta-3">
				<h4>Video Tutorial <span>Cómo utilizar la guía interactiva de TV</span></h4>
				
				<span class="goto"></span>

			</div>

			<div class="tarifa veroferta" data-show="oferta-4">
				<h4>Video Tutorial <span>Configuración Módem Linitec LT150 maxcom</span></h4>
				<span class="goto"></span>

			</div>
		</div>

		<div class="canales-container oferta-1" style="display:none">
			<div class="general-info">
				<p class="title">Guía</p>
				<p>Cómo usar las soluciones digitales</p>

				<div class="canales-group">

				</div>
			</div>
		</div>

		<div class="canales-container oferta-2" style="display:none">
			<div class="general-info">
				<p class="title">Video Tutorial</p>
				<p>Cambio de contraseña TPLINK</p>

				<div class="canales-group">
					<iframe width="676" height="378" src="//www.youtube.com/embed/o1wWdWjnAPY?showinfo=0&amp;controls=0" frameborder="0" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>

		<div class="canales-container oferta-3" style="display:none">
			<div class="general-info">
				<p class="title">Video Tutorial</p>
				<p>Cómo utilizar la guía interactiva de TV</p>

				<div class="canales-group">
					<iframe width="676" height="378" src="//www.youtube.com/embed/https://youtu.be/RExeIQuFvfA?showinfo=0&amp;controls=0" frameborder="0" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>

		<div class="canales-container oferta-4" style="display:none">
			<div class="general-info">
				<p class="title">Video Tutorial</p>
				<p>Configuración Módem Linitec LT150 maxcom</p>

				<div class="canales-group">
					<iframe width="676" height="378" src="//www.youtube.com/embed/LVz-2GTTUDU?showinfo=0&amp;controls=0" frameborder="0" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>

	</div>



</div>
<?php get_footer(); ?>