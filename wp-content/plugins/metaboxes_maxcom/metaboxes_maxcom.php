<?php
/**
* Plugin Name: metaboxes_maxcom
**/

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	//Start with an underscore to hide fields from custom fields list
	$prefix = '_suc_';

		$meta_boxes['coord_sucursal'] = array(
		'id'         => 'coord_sucursal',
		'title'      => __( 'Coordenadas de la sucursal', 'suc' ),
		'pages'      => array( 'sucursal' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
				'name' => __( 'Latitud', 'suc' ),
				'id'   => $prefix . 'lat',
				'type' => 'text_small',
				// 'repeatable' => true,
			),
			array(
				'name' => __( 'Longitud', 'suc' ),
				'id'   => $prefix . 'lon',
				'type' => 'text_small',
				// 'repeatable' => true,
			),
		),
	);

	
	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
