<?php get_header(); ?>
<div id="content" class="home-maxcom-for-business">
	<?php	get_template_part( 'template/maxcom-business-header' ); ?>

	<?php	get_template_part( 'template/maxcom-business-for-you' ); ?>

	<div class="elements-container maxcom-for-business">

		<a href="<?php echo SITEURL?>hug-connectivity" class="element hc">

			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>hug-connectivity.jpg" alt="Hug Connectivity"/>
				
				<div class="active-on-hover">
					<h4>Conecta</h4>
              		<small>Cambia la forma en que tus clientes y empleados se conectan con tu empresa.</small>
				</div>

			</div>

			<div class="info-container">
				<h3>HUG CONNECTIVITY</h3>
			</div>

		</a>

		<a  href="<?php echo SITEURL?>enjoy-collaboration" class="element ec">

			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>enjoy-collaboration.png" alt="Enjoy Collaboration"/>
				
				<div class="active-on-hover">
					<h4>Colabora</h4>
              		<small>Cambia la forma en que tu empresa se mueve, colaborando a distancia.</small>
				</div>

			</div>

			<div class="info-container">
				<h3>ENJOY COLLABORATION</h3>
			</div>

		</a>

		<a href="<?php echo SITEURL?>smile-managed-services" class="element sms">

			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>smile-managed-services.jpg" alt="Smile Managed Services"/>
				
				<div class="active-on-hover">
					<h4>Administra</h4>
              		<small>Cambia la forma de administrar tu información eliminando riesgos.</small>
				</div>

			</div>

			<div class="info-container">
				<h3>SMILE MANAGED SERVICES</h3>
			</div>

		</a>

	</div>
	<div class="banner">
		<p>¿Por qué maxcom en tu empresa?</p>
		<ul>
			<li>Contamos con soluciones integrales y planes específicos que se adaptan a las necesidades de tu empresa</li>
			<li>Protegemos y respaldamos la información más valiosa de tu negocio</li>
			<li>Colaboramos a mejorar la productividad de tu compañía</li>
		</ul>
	</div>

	<div class="maxcomblog">
		<a href="http://www.maxcomforbusiness.com/blog/" target="_blank">
			<p>Mantente informado con temas de interés para tu empresa maxcom Link es un portal en línea en el cual tendrás acceso a diferentes artículos que pueden servirte de apoyo para impulsar y fortalecer tu empresa.</p>
			<span></span></a>
	</div>


</div>
<?php get_footer(); ?>