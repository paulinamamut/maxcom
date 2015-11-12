<?php
	add_action( 'init', 'custom_post_type_maxcom');

	function custom_post_type_maxcom(){
		register_post_type( 'sucursal', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Sucursal', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Sucursal', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All sucursals', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Sucursal', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Post Types', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Post Type', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Post Type', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Post Type', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example sucursal type', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'rewrite'	=> array( 'slug' => 'sucursal', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'sucursal', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'revisions')
		) /* end of options */
	); /* end of register post type */

	register_taxonomy( 'region', 
		array('sucursal'), /* if you change the name of register_post_type( 'historia', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Regiónes', 'bonestheme' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Región', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Regiónes', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'All Regiónes', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Región', 'bonestheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Región:', 'bonestheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Región', 'bonestheme' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Región', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Región', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Región Name', 'bonestheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true, 
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'region' ),
		)
	);

	register_taxonomy( 'tipo', 
		array('sucursal'), /* if you change the name of register_post_type( 'historia', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Tipo Sucursales', 'bonestheme' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Tipo Sucursal', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Tipo Sucursales', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'All Tipo Sucursales', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Tipo Sucursal', 'bonestheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Tipo Sucursal:', 'bonestheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Tipo Sucursal', 'bonestheme' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Tipo Sucursal', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Tipo Sucursal', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Tipo Sucursal Name', 'bonestheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true, 
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'tipo' ),
		)
	);
}
?>