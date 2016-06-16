<?php

////////////////////
//VISUAL FORM BUILDER
//visual-form-builder.php
//lines: 854
////////////////////

/* Something isnt working**/

//REMOVE JQUERY UI
add_filter( 'vfb-date-picker-css', 'vfb_jqueryui' );
function vfb_jqueryui( $url ){    
    return false;
}

//REMOVE CSS
add_filter('visual-form-builder-css', 'vfb_css' );
function vfb_css( $url ){    
    return false;
}

//REMOVE CSS AND JS FROM WP_HEAD 
wp_deregister_style('farbtastic');


