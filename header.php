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
            
        </style>
</head>






<body <?php body_class(); ?>>
    
<div id="page" class="site">

	<?php get_template_part( 'template/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">