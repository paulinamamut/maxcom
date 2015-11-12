<?php
/*
 Template Name: Single-Business For You
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
	<?php if (have_posts()) : while (have_posts()) : the_post(); 
		$post_name = $post->post_name;
	?>
		<div class="single-container <?php echo $post->post_name; ?>">
			<div class="head">
				<div class="half">
					<?php $title = get_the_title(); $title_arr = explode(' ',$title);?>
					<h1>
						<?php echo $title_arr[0].' '; ?>
					<span>
						<?php foreach ($title_arr as $key => $val): 
							if($key!=0)
								echo $val.' ';	
						 endforeach; ?>
					</span>
					</h1>
				</div>
				<div class="half">
					<a href="<?php echo SITEURL; ?>/contacto-comercial/">Contacta a un ejecutivo</a>
				</div>
			</div>
			<div class="s-content">
				<div class="heady"><?php the_excerpt();?></div>
				<?php the_content();?>
			</div>
		</div>
	<?php endwhile; endif; ?>

	<?php	get_template_part( 'template/maxcom-business-for-you' ); ?>

</div>
<?php get_footer(); ?>