<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<header>
    <div class="container-nav">
        <div class="nav">
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
            ?>
            <amp-img alt="A view of the sea" src="<?php echo esc_url( $custom_logo_url ); ?>" width="250" height="54">
            </amp-img>
        </div>
    </div>
</header>