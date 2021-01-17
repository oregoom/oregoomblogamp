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
            
            <!--<amp-script layout="container" src="<?php echo get_template_directory_uri().'/js/oregoom-youtube.js'; ?>">-->
                
                
                
            <amp-script layout="container" src="<?php echo get_template_directory_uri().'/js/oregoom-youtube.js'; ?>" class="sample">
                
              <button id="hello-url">Say hello!</button>
              
            </amp-script>
                
                
            <button class="ampstart-btn caps m1 mb3" on="tap:watch-video-lightbox">
                Show Video
            </button>
                <amp-lightbox id="watch-video-lightbox" layout="display" i-amphtml-layout="nodisplay">
        
      <div class="i-amphtml-fill-content"><div class="amp-youtube-container">
          <div class="video">
            <a on="tap:watch-video-lightbox.close" role="button" tabindex="0">
              Close
            </a>
            <amp-youtube width="480" height="270" layout="responsive" data-videoid="lBTCB7yLs8Y" class="i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built i-amphtml-media-component i-amphtml-video-interface i-amphtml-layout" i-amphtml-layout="responsive" style="--loader-delay-offset:0ms !important;"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 56.25%;"></i-amphtml-sizer>
            <img placeholder="" referrerpolicy="origin" src="https://i.ytimg.com/vi/lBTCB7yLs8Y/sddefault.jpg#404_is_fine" alt="Loading video" class="i-amphtml-fill-content amp-hidden" style="object-fit: cover;"><iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/lBTCB7yLs8Y?enablejsapi=1&amp;amp=1&amp;playsinline=1" class="i-amphtml-fill-content" title="YouTube video" allow="autoplay;"></iframe></amp-youtube>
          </div>
        </div></div></amp-lightbox>
                
<!--            <amp-lightbox id="watch-video-lightbox" layout="nodisplay" class="i-amphtml-element i-amphtml-layout-nodisplay i-amphtml-overlay i-amphtml-built i-amphtml-layout" i-amphtml-layout="nodisplay" style="transition: opacity 0.1s ease-in 0s; opacity: 1;">
        
                
                    <amp-youtube width="480" height="270" data-videoid="lBTCB7yLs8Y" layout="responsive">
                    <img placeholder="" referrerpolicy="origin" src="https://i.ytimg.com/vi/lBTCB7yLs8Y/sddefault.jpg#404_is_fine" alt="Loading video" class="i-amphtml-fill-content" style="object-fit: cover;">
                    </amp-youtube>
                
            </amp-lightbox>-->
                
                

            <div><?php the_content(); ?></div>
            
            
            
            
            
            
            <!--<amp-youtube data-videoid="aIo8e9PJSLs" layout="responsive" width="480" height="270"></amp-youtube>-->
        
        
    <?php }
    
    
}



get_footer();