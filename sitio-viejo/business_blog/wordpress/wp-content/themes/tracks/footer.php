</div> <!-- .main -->

<footer id="site-footer" class="site-footer" role="contentinfo">
    
    <?php if(get_bloginfo('description') && ( get_theme_mod('tagline_display_setting') == 'header-footer' ) || ( get_theme_mod('tagline_display_setting') == 'footer' )){ ?>
        <p class="site-description"><?php bloginfo('description'); ?></p>
    <?php } ?>
    <?php
        // add footer menu if set
        get_template_part( 'menu', 'footer' );
    ?>
    <?php
        // add social icons if set
        if( (get_theme_mod('social_icons_display_setting') == 'header-footer') || (get_theme_mod('social_icons_display_setting') == 'footer')){
	        get_template_part('content/social-icons');
        }
    ?>
	<?php get_template_part('sidebar','footer'); ?>
    <div class="design-credit">
        <p>
            <a href="http://maxcom.com.mx/aviso-de-privacidad" targe="_blank">Aviso de Privacidad</a> |
           <a href="http://maxcom.com.mx/aviso-de-privacidad" targe="_blank">Términos y Condiciones</a>
        </p>
        <p>
           <a href="http://maxcom.com.mx/" targe="_blank">© 2015 Maxcom Telecomunicaciones</a>
        </p>
    </div>
</footer>

<?php if( get_theme_mod('additional_options_return_top_settings') != 'hide' ) { ?>
	<button id="return-top" class="return-top">
		<i class="fa fa-arrow-up"></i>
	</button>
<?php } ?>

<?php
    // add the background image if being used
    if(get_theme_mod( 'ct_tracks_background_image_setting')){
        echo "<div class='background-image'></div>";
    }
?>

</div><!-- .overflow-container -->

<?php wp_footer(); ?>
</body>
</html>