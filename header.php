<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <script async src="https://cdn.ampproject.org/v0.js"></script>
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
        
        
        
        <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
        
        <script async custom-element="amp-script" src="https://cdn.ampproject.org/v0/amp-script-0.1.js"></script>
        
        
        <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>


        
	<?php wp_head(); ?>
        <style amp-custom>
            
            .container-nav{
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .nav{
                text-align: center;                
            }
            
            
            .site{
                max-width: 1060px;
                margin-left: auto;
                margin-right: auto;
                padding-left: 15px;
                padding-right: 15px;
                
                overflow: hidden;
            }
            .content-area{
                margin-top: 30px;
            }
            .site-main{
                max-width: 730px;
                float: left;
            }
            .aside{
                width: 300px;
                float: right;
            }
            
            h1{
                font-family: Raleway, sans-serif; 
                font-size: 35px; 
                line-height: 1.3em; 
                font-weight: 800;
                margin-top: 0;
            }
            h2{
                font-family: Raleway, sans-serif; 
                font-size: 28px; 
                line-height: 1.2em; 
                font-weight: 700;
            }
            h3{
                font-family: Raleway, sans-serif; 
                font-size: 22px; 
                line-height: 1.2em; 
                font-weight: 600;
            }
            
            p, li{
                font-family: "Roboto",sans-serif;
                font-weight: 300!important;
                font-size: 18px!important;
                line-height: 1.6;
            }
            
            
            
            
            
            
            
            
            
            .contenedor{
  display: block; 
  margin: 20px auto; 
  width: 100%; 
  max-width: 600px; 
  
}
.reproductor { 
  display: block; 
  width: 100%; 
  height: 100%; 
  padding-bottom: 56.25%; 
  overflow: hidden; 
  position: relative; 
  cursor: hand; 
  cursor: pointer; 
}
img.imagen-previa { 
   display: block; 
   left: 0; 
   bottom: 0;
   margin: auto; 
   max-width: 100%; 
   width: 100%; 
   position: absolute; 
   right: 0; 
   top: 0; 
   height: auto 
}
div.youtube-play { 
   height: 64px; 
   width: 64px; 
   left: 50%; 
   top: 50%; 
   margin-left: -36px; 
   margin-top: -36px;
   opacity:0.7;
   position: absolute; 
   background:   url("https://cdn2.iconfinder.com/data/icons/social-icons-color/512/youtube-64.png") no-repeat; 
}
div.youtube-play:hover{
   opacity:1; 
}
#youtube-iframe { 
   width: 100%; 
   height: 100%; 
   position: absolute; 
   top: 0; 
   left: 0; 
}
            
        </style>
</head>






<body <?php body_class(); ?>>
    
<div id="page" class="site">

	<?php get_template_part( 'template/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">