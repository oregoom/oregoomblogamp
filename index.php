<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();


if(have_posts()){
    
    while (have_posts()){
        
        the_post();        
        
        the_title();
        
        the_content();
        
        
    }
    
    
}



get_footer();