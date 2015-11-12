<?php
/*
Author: Clau Carrillo
*/

// LOAD BONES CORE (if you remove this, the theme will break)
define( 'SITEURL', site_url() . '/' );
define( 'THEMEPATH', get_template_directory_uri() . '/' );
define( 'IMAGEPATH', get_template_directory_uri() . '/library/images/' );
define( 'ASSETPATH', get_template_directory_uri() . '/library/assets/' );
require_once( 'library/_include.php' );

/*********************
LAUNCH BONES
Let's get everything up and running.
*********************/

function ahoy() {

  //Allow editor style.
  // add_editor_style( get_stylesheet_directory_uri() . '/library/css/editor-style.css' );

  // USE THIS TEMPLATE TO CREATE CUSTOM POST TYPES EASILY
  require_once( 'library/custom-post-types.php' );

  // launching operation cleanup
  add_action( 'init', 'head_cleanup' );
  // A better title
  add_filter( 'wp_title', 'rw_title', 10, 3 );
  // remove WP version from RSS
  add_filter( 'the_generator', 'rss_version' );
  // remove pesky injected css for recent comments widget
  add_filter( 'wp_head', 'remove_wp_widget_recent_comments_style', 1 );
  // clean up comment styles in the head
  add_action( 'wp_head', 'remove_recent_comments_style', 1 );
  // clean up gallery output in wp
  add_filter( 'gallery_style', 'gallery_style' );

  // enqueue base scripts and styles
  add_action( 'wp_enqueue_scripts', 'scripts_and_styles', 999 );
  // ie conditional wrapper

  // launching this stuff after theme setup
  theme_support();

  // adding sidebars to Wordpress (these are created in functions.php)
  add_action( 'widgets_init', 'register_sidebars' );

  // cleaning up random code around images
  add_filter( 'the_content', 'filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'excerpt_more' );

} /* end bones ahoy */

// let's get this party started
add_action( 'after_setup_theme', 'ahoy' );


/************* OEMBED SIZE OPTIONS *************/

if ( ! isset( $content_width ) ) {
	$content_width = 680;
}

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes

if ( function_exists('add_image_size') ){
    add_image_size( 'product-thumb', 230, 145, true );
    add_image_size( 'product-page', 520, 346, true );
    
    // cambiar el tamaño del thumbnail
    
    update_option( 'thumbnail_size_w', 300 );
    update_option( 'thumbnail_size_h', 224 );
    update_option( 'thumbnail_crop', true );

    // cambiar el tamaño del medium
    update_option( 'medium_size_w', 520 );
    update_option( 'medium_size_h', 520 );
    update_option( 'medium_crop', true );

    // cambiar el tamaño del large
    update_option( 'large_size_w', 698 );
    update_option( 'large_size_h', 492 );
    update_option( 'large_crop', true );

    
  }

/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 100 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 150 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

// add_filter( 'image_size_names_choose', 'custom_image_sizes' );

// function custom_image_sizes( $sizes ) {
//     return array_merge( $sizes, array(
//         'bones-thumb-600' => __('600px by 150px'),
//         'bones-thumb-300' => __('300px by 100px'),
//     ) );
// }

/*
The function above adds the ability to use the dropdown menu to select
the new images sizes you have just created from within the media manager
when you add media to your content blocks. If you add more image sizes,
duplicate one of the lines in the array and name it according to your
new image size.
*/

/************* THEME CUSTOMIZE *********************/

/* 
  A good tutorial for creating your own Sections, Controls and Settings:
  http://code.tutsplus.com/series/a-guide-to-the-wordpress-theme-customizer--wp-33722
  
  Good articles on modifying the default options:
  http://natko.com/changing-default-wordpress-theme-customization-api-sections/
  http://code.tutsplus.com/tutorials/digging-into-the-theme-customizer-components--wp-27162
  
  To do:
  - Create a js for the postmessage transport method
  - Create some sanitize functions to sanitize inputs
  - Create some boilerplate Sections, Controls and Settings
*/
/*
This is a modification of a function found in the
twentythirteen theme where we can declare some
external fonts. If you're using Google Fonts, you
can replace these fonts, change it in your scss files
and be up and running in seconds.
*/
function fonts() {
  wp_enqueue_style('font', 'http://fast.fonts.net/cssapi/ba4e46bd-824b-4f0c-9d91-ce97008001a4.css');
}

add_action('wp_enqueue_scripts', 'fonts');

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}


function getMarkersMap(){

  $region = (isset($_POST['region']) ? $_POST['region'] : '');

  if(isset($_POST['region']) && !empty($_POST['region'])){
      $args = array(
      'post_type' => 'sucursal',
      'orderby'   => 'title',
      'order'     => 'ASC',
       'posts_per_page' => -1,
      'tax_query' => array(
        array(
          'taxonomy' => 'region',
          'field'    => 'slug',
          'terms'    => $region,
        ),
      )
    );
  }
  else{
      $args = array(
      'post_type' => 'sucursal',
      'orderby'   => 'title',
      'order'     => 'ASC',
      'posts_per_page' => -1
    );
  }


  $sucursales_query = new WP_Query( $args );
  $sucursales = array();

  if ( $sucursales_query->have_posts() ) {
    while ( $sucursales_query->have_posts() ) { 
        $sucursales_query->the_post();
        $lat = get_post_meta( $sucursales_query->post->ID, '_suc_lat', true);
        $lon = get_post_meta( $sucursales_query->post->ID, '_suc_lon', true);
        $content = get_the_content();
        $title = get_the_title();

        if($lat!='' && $lon != ''){
          $tipo = 'centros-de-atencion-a-clientes';

          if(has_term( 'casas-maxcom', 'tipo' )){
            $tipo = 'casas-maxcom';
          }

          $sucursales[$sucursales_query->post->ID] = array();
          $sucursales[$sucursales_query->post->ID]['lat'] = $lat;
          $sucursales[$sucursales_query->post->ID]['lon'] = $lon;
          $sucursales[$sucursales_query->post->ID]['content'] = $content;
          $sucursales[$sucursales_query->post->ID]['title'] = $title;
          $sucursales[$sucursales_query->post->ID]['tipo'] = $tipo;
       }

    }
  }

  echo json_encode($sucursales);
  die();
}

add_action('wp_ajax_getMarkersMap', 'getMarkersMap');
add_action('wp_ajax_nopriv_getMarkersMap', 'getMarkersMap');

function getFormDataCliente() {
  $post_id = 0;
  $success = false;

  if(isset($_POST['nombre'])){

    $nombre      = sanitize_text_field( $_POST["nombre"] );
    // $apellido    = sanitize_text_field( $_POST["apellido"] );
    $email       = sanitize_email( $_POST["email"] );
    $lada       = sanitize_email( $_POST["lada"] );
    $telefono    = sanitize_text_field( $_POST["telefono"] );
    $horario = sanitize_text_field( $_POST["horario"] );
    $cuenta = sanitize_text_field( $_POST["no_cuenta"] );
    $asunto = sanitize_text_field( $_POST["asunto"] );
    $mensaje = sanitize_text_field( $_POST["mensaje"] );

    $formtype    = 'ya-soy-cliente';

    // if( $formtype == 'servicio'){

    //       $content = 'Nombre: '.$nombre.' '.$apellido.'<br />'.
    //       'Email: '.$email.'<br />'.
    //       'Empresa: '.$empresa.'<br />'.
    //       'Teléfono: '.$telefono.'<br />'.
    //       'Calle: '.$calle.'<br />'.
    //       'Colonia: '.$colonia.'<br />'.
    //       'Pais: '.$pais.'<br />'.
    //       'Estado: '.$estado.'<br />'.
    //       'Ciudad: '.$ciudad.'<br />'.
    //       'Código Postal: '.$codigopostal.'<br />'.
    //       'País: '.$pais.'<br />'.
    //       'Mensaje: '.$mensaje;

    //       $to = 'serviciotecnico@nexttec.com.mx';
    // }
    // else{
    //       $content = 'Nombre: '.$nombre.' '.$apellido.'<br />'.
    //       'Email: '.$email.'<br />'.
    //       'Teléfono: '.$telefono.'<br />'.
    //       'Mensaje: '.$mensaje;

    //       $to = 'ventas@nexttec.com.mx';
    }

  //   $headers = "MIME-Version: 1.0\r\n";
  //   $headers.= "Content-type: text/html; charset=utf-8\r\n";
  //   $headers.= "From: Hifin Formulario <claudia@elmamut.com>";
  //   // $headers = 'From: My Name <myname@example.com>' . "\r\n";

  //   $subject = ' Formulario'.' '.$nombre.' '.$apellido.'-'.$empresa;

  //   wp_mail( $to, $subject, $content, $headers );

  //   $post = array(
  //     'post_content'   => $content,
  //     'post_title'     => $subject.' '.date( 'Y-m-d H:i:s'),
  //     'post_status'    => 'private',
  //     'post_type'      => 'enviosformulario'
  //   );  

  //   $post_id = wp_insert_post( $post );

  //   if($post_id) $success= true;

  //   wp_set_object_terms( $post_id, array($type), 'formulario', true );
  // }

  // wp_send_json( array('id'=> $post_id, 'success'=> $success));


   die();
}


add_action('wp_ajax_getFormDataCliente', 'getFormDataCliente');
add_action('wp_ajax_nopriv_getFormDataCliente', 'getFormDataCliente');

function getFormDataProspecto() {
  $post_id = 0;
  $success = false;

  if(isset($_POST['nombre'])){

    $nombre      = sanitize_text_field( $_POST["nombre"] );
    // $apellido    = sanitize_text_field( $_POST["apellido"] );
    $email       = sanitize_email( $_POST["email"] );
    $lada       = sanitize_email( $_POST["lada"] );
    $telefono    = sanitize_text_field( $_POST["telefono"] );
    $horario = sanitize_text_field( $_POST["horario"] );
    $calle       = sanitize_text_field( $_POST["calle"] );
    $numext     = sanitize_text_field( $_POST["ext"] );
    $numint     = sanitize_text_field( $_POST["int"] );
    $entre     = sanitize_text_field( $_POST["entre-calles"] );
    $colonia     = sanitize_text_field( $_POST["colonia"] );
    $codigopostal= sanitize_text_field( $_POST["cp"] );
    $delegacion     = sanitize_text_field( $_POST["delegacion"] );
    $entidad      = sanitize_text_field( $_POST["entidad"] );
    $mensaje     = esc_textarea( $_POST["mensaje"] );

    $formtype    = 'quiero-ser-cliente';

    // if( $formtype == 'servicio'){

    //       $content = 'Nombre: '.$nombre.' '.$apellido.'<br />'.
    //       'Email: '.$email.'<br />'.
    //       'Empresa: '.$empresa.'<br />'.
    //       'Teléfono: '.$telefono.'<br />'.
    //       'Calle: '.$calle.'<br />'.
    //       'Colonia: '.$colonia.'<br />'.
    //       'Pais: '.$pais.'<br />'.
    //       'Estado: '.$estado.'<br />'.
    //       'Ciudad: '.$ciudad.'<br />'.
    //       'Código Postal: '.$codigopostal.'<br />'.
    //       'País: '.$pais.'<br />'.
    //       'Mensaje: '.$mensaje;

    //       $to = 'serviciotecnico@nexttec.com.mx';
    // }
    // else{
    //       $content = 'Nombre: '.$nombre.' '.$apellido.'<br />'.
    //       'Email: '.$email.'<br />'.
    //       'Teléfono: '.$telefono.'<br />'.
    //       'Mensaje: '.$mensaje;

    //       $to = 'ventas@nexttec.com.mx';
  }

  //   $headers = "MIME-Version: 1.0\r\n";
  //   $headers.= "Content-type: text/html; charset=utf-8\r\n";
  //   $headers.= "From: Hifin Formulario <claudia@elmamut.com>";
  //   // $headers = 'From: My Name <myname@example.com>' . "\r\n";

  //   $subject = ' Formulario'.' '.$nombre.' '.$apellido.'-'.$empresa;

  //   wp_mail( $to, $subject, $content, $headers );

  //   $post = array(
  //     'post_content'   => $content,
  //     'post_title'     => $subject.' '.date( 'Y-m-d H:i:s'),
  //     'post_status'    => 'private',
  //     'post_type'      => 'enviosformulario'
  //   );  

  //   $post_id = wp_insert_post( $post );

  //   if($post_id) $success= true;

  //   wp_set_object_terms( $post_id, array($type), 'formulario', true );
  // }

  // wp_send_json( array('id'=> $post_id, 'success'=> $success));


   die();
}


add_action('wp_ajax_getFormDataProspecto', 'getFormDataProspecto');
add_action('wp_ajax_nopriv_getFormDataProspecto', 'getFormDataProspecto');
/* DON'T DELETE THIS CLOSING TAG */ ?>