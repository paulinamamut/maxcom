<?php global $post; $post_name = $post->post_name;
$args = array(
			'post_type' => 'page',
			'orderby'   => 'menu_order',
			'order'     => 'DESC',
			'post_parent' => 28
		);

	$the_query = new WP_Query( $args ); 
   
	if ( $the_query->have_posts() ) {  ?>


			
<div class="elements-container businessforyou-footer <?php echo (in_array($post_name, array('shine-for-sales', 'zoom-for-operations', 'expand-your-business', 'flow-for-customer-experience')) ? '' : 'elements-4');?>">
	
	<?php	
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
	?>
	<a class="element onimage  <?php echo ($post_name==$the_query->post->post_name ? 'hidden' : $the_query->post->post_name);?>" href="<?php echo SITEURL.$post->post_name; ?>">
		<div class="hover-container">
			<?php the_post_thumbnail('full' ); ?>
			<div class="active-on-hover">
				 <?php the_excerpt(); ?>
			</div>
		</div>
		<div class="info-container">
			<h3><?php the_title();?></h3>
			<!-- Shine <span>for SALES</span> -->
      		<span class="goto">Ver más</span>
		</div>
	</a>
	<?php 
		}
	?>

</div>
<?php } ?>