<?php
/*
 Template Name: Single Maxcom 4 Business
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>
<?php get_header(); ?>
<div id="content" class="home-maxcom-for-business">
	<?php	get_template_part( 'template/maxcom-business-header' ); ?>

	<div class="elements-container maxcom-for-business nospace to-hide-mobile-container">

		<a href="hug-connectivity" class="element hc <?php echo (($post->post_name == 'hug-connectivity') ? 'current' : 'inactive'); ?>">

			<div class="info-container">
				<h3>HUG <br/>CONNECTIVITY</h3>
			</div>

		</a>

		<a href="enjoy-collaboration" class="element ec <?php echo (($post->post_name == 'enjoy-collaboration') ? 'current' : 'inactive'); ?>">

			<div class="info-container">
				<h3>ENJOY <br/>COLLABORATION</h3>
			</div>

		</a>

		<a href="smile-managed-services" class="element sms <?php echo (($post->post_name == 'smile-managed-services') ? 'current' : 'inactive'); ?>">

			<div class="info-container">
				<h3>SMILE MANAGED<br/> SERVICES</h3>
			</div>

		</a>

	</div>
	<?php $postid = get_the_ID() ;?>
	<div class="<?php echo $post->post_name; ?>-container">
		<div class="mfb-head-info">

			<h3><?php the_title();?></h3>
			
			<?php the_excerpt();?>
			
			<p><?php echo $post->post_content; ?></p>
		</div>

		<?php 

		$count = 3;
		if($post->post_name == 'smile-managed-services'){
			$count = 4;
		}
		elseif($post->post_name == 'enjoy-collaboration'){
			$count = 1;
		}	

		$args = array(
			'post_type' => 'page',
			'orderby'   => 'menu_order',
			'order'     => 'DESC',
			'post_parent' => $postid
		);

		$the_query = new WP_Query( $args ); 
       
		if ( $the_query->have_posts() ) { ?>
			<div class="elements-container nospace mfb-single elements-<?php echo $count;?>" id="mfb-single">
		
		<?php	
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
			?>
			
			<div class="element">

				<div class="info-container">
					<h4><?php the_title();?></h4>
					<?php the_excerpt(); ?>

					<span class="vermas" data-service="<?php echo $post->post_name; ?>"><b>Conocer</b> más</span>
				</div>

			</div>

			<?php 
			}	?>

			</div>
	<?php	}?>

			

		<?php
		if ( $the_query->have_posts() ) { ?>
		<div class="mfb-info-container">
		<?php	
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
			?>

			<div class="<?php echo $post->post_name; ?>-container" style="display:none;">
				<?php the_content(); ?>
				
			</div>

			<?php }?>

		</div>
		<?php } ?>
	</div>
	<div class="elements-container maxcom-for-business nospace to-show-mobile-container">

		<a href="hug-connectivity" class="element hc <?php echo (($post->post_name == 'hug-connectivity') ? 'current' : 'inactive'); ?>">

			<div class="info-container">
				<h3>HUG <br/>CONNECTIVITY</h3>
			</div>

		</a>

		<a href="enjoy-collaboration" class="element ec <?php echo (($post->post_name == 'enjoy-collaboration') ? 'current' : 'inactive'); ?>">

			<div class="info-container">
				<h3>ENJOY <br/>COLLABORATION</h3>
			</div>

		</a>

		<a href="smile-managed-services" class="element sms <?php echo (($post->post_name == 'smile-managed-services') ? 'current' : 'inactive'); ?>">

			<div class="info-container">
				<h3>SMILE MANAGED<br/> SERVICES</h3>
			</div>

		</a>

	</div>

	<!--?php	get_template_part( 'template/maxcom-business-for-you' ); ?-->

</div>
<?php get_footer(); ?>