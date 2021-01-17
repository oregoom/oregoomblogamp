<?php
/*
* Function del Theme Oregoom Blog AMP -> Proyecto humilde de Nivarado Ch
*/


//ACTUALIZAR TEMA DESDE GITHUB
  // set_site_transient('update_themes', null);
  function geko_check_update( $transient ) {
      if ( empty( $transient->checked ) ) {
          return $transient;
      }
      $theme_data = wp_get_theme(wp_get_theme()->template);
      $theme_slug = $theme_data->get_template();
      //Delete '-master' from the end of slug
      $theme_uri_slug = preg_replace('/-master$/', '', $theme_slug);
     
     $remote_version = '0.0.0';
     $style_css = wp_remote_get("https://raw.githubusercontent.com/oregoom/".$theme_uri_slug."/master/style.css")['body'];
    if ( preg_match( '/^[ \t\/*#@]*' . preg_quote( 'Version', '/' ) . ':(.*)$/mi', $style_css, $match ) && $match[1] )
         $remote_version = _cleanup_header_comment( $match[1] );
    
     if (version_compare($theme_data->version, $remote_version, '<')) {
         $transient->response[$theme_slug] = array(
             'theme'       => $theme_slug,
             'new_version' => $remote_version,
             'url'         => 'https://github.com/oregoom/'.$theme_uri_slug,
             'package'     => 'https://github.com/oregoom/'.$theme_uri_slug.'/archive/master.zip',
         );
     }
     return $transient;
 }
 add_filter( 'pre_set_site_transient_update_themes', 'geko_check_update' );


//PARA QUE EL TEMA SOPORTE IMG DESTACADA
add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-logo', array(
	'height'      => 54,
	'width'       => 250,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );



//add_filter( 'the_content', 'oregoom_add_style_the_content', 10, 1 );
    function oregoom_add_style_the_content( $content = null ){

        if( null === $content )
            return $content;

        $search = array('<img loading="lazy"');
        $replace = array('<amp-img width="730" height="411" layout="responsive" '
            );
        
        return str_replace( $search, $replace, $content );  
    }
    
    
    
    
    //Registramos el tamaño
function bp_body_size(){
    add_image_size('body-size', 700);}
add_action( 'after_setup_theme', 'bp_body_size' );

//Agregamos el tamaño a las opciones de las imágenes
function bp_body_size_choose( $sizes ) {
    return array_merge( $sizes, array(
    'body-size' => 'Nuevo tamaño para el body'));}
add_filter( 'image_size_names_choose', 'bp_body_size_choose' );