<?php

// get the post meta display options
$post_date = get_theme_mod('post_date_display_setting');
$post_author = get_theme_mod('post_author_display_setting');
$post_category = get_theme_mod('post_category_display_setting');

// has to equal 'hide' in case still unset
if($post_date != 'hide'){ ?>
    <span class="date"><?php
	echo date_i18n( get_option( 'date_format' ), strtotime( get_the_date('r') ) );
	?></span><?php
}

?>