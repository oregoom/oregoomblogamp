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































//FUNCTION BLOQUE Gutenberg 'Módulo para el Curso'
//
//FALTA TERMINAR
//
//include_once 'inc/oregoom-gutenberg/oregoom-gutenberg-curso-modulos.php';


  

    add_filter( 'the_content', 'oregoom_add_style_the_content', 10, 1 );
    function oregoom_add_style_the_content( $content = null ){

        if( null === $content )
            return $content;

        $search = array('<h3>', '<ol>', '<li>', '<a ');
        $replace = array('<h3 class="h5 pt-4">', 
            '<ol class="list-group list-group-flush">',
            '<li class="list-group-item">',
            '<a class="text-decoration-none text-dark" '
            );
        
        if(is_page_template('templates/template-curso.php')){
              return str_replace( $search, $replace, $content );  
        } else {
            return $content;
        }       
    }
    
    
/*
 * Divi: Esconder el post type proyectos.
 */
add_filter('et_project_posttype_args', 'oregoom_esconder_proyectos_divi', 10, 1);
function oregoom_esconder_proyectos_divi($args)
{
    return array_merge($args, array(
        'public' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => false,
        'show_in_nav_menus' => false,
        'show_ui' => false
    ));
}