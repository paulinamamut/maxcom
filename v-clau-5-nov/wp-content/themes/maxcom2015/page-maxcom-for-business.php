<?php get_header(); ?>
<div id="content" class="home-maxcom-for-business">
	<?php	get_template_part( 'template/maxcom-business-header' ); ?>
	<div class="single-container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="s-content align-center">
				<?php the_content();?>
			</div>
		<?php endwhile; endif; ?>
	</div>

	<div class="elements-container maxcom-for-business nospace">

		<a href="hug-connectivity" class="element hc">

			<div class="info-container">
				<h3>HUG <br/>CONNECTIVITY</h3>
			</div>

		</a>

		<a href="enjoy-collaboration" class="element ec">

			<div class="info-container">
				<h3>ENJOY <br/>COLLABORATION</h3>
			</div>

		</a>

		<a href="smile-managed-services" class="element sms">

			<div class="info-container">
				<h3>SMILE MANAGED<br/> SERVICES</h3>
			</div>

		</a>

	</div>

	<?php	get_template_part( 'template/maxcom-business-for-you' ); ?>

</div>
<?php get_footer(); ?>