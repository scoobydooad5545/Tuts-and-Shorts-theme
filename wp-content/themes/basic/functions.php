<?php

// <- don't add the opening php tag in
function themprefix_faq_script() {
 if(is_single('158')) {//add in your Post/Page ID
 wp_enqueue_script( 'faq-js', get_stylesheet_directory_uri() . '/js/faq.js', array('jquery'), '1', true );
 wp_enqueue_style ( 'faq-css' , get_stylesheet_directory_uri() . '/css/faq.css', '', '1', 'all' );
 wp_enqueue_style ( 'fontawesome' , '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', '' , '4.3.0', 'all' );
 }
}
add_action( 'wp_enqueue_scripts', 'themprefix_faq_script' );
