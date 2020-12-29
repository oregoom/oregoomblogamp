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
                max-width: 800px;
                margin-left: auto;
                margin-right: auto;
                padding-left: 15px;
                padding-right: 15px;
            }
            
        </style>
</head>






<body <?php body_class(); ?>>
    
<div id="page" class="site">

	<?php get_template_part( 'template/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">