<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();


if(have_posts()){
    
    while (have_posts()){
        
        the_post(); ?>       
        
            <h1><?php the_title(); ?></h1>

            <amp-img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" width="730" height="411" layout="responsive"></amp-img>

            <div><?php the_content(); ?></div>
        
        
    <?php }
    
    
}



get_footer();