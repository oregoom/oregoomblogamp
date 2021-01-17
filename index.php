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
            
            
            
            <?php
            
            $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                
            if ( $image_attributes ){ ?>
                <amp-img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" layout="responsive"></amp-img>
            <?php } ?>
            
                
            
            

            <div><?php the_content(); ?></div>
            
            <amp-youtube data-videoid="aIo8e9PJSLs" layout="responsive" width="480" height="270"></amp-youtube>
        
        
    <?php }
    
    
}



get_footer();