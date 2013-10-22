<?php

/* Extends functions.php from parent theme */

function replace_fonts() {
    wp_dequeue_style( 'open-sans' );
}

add_action( 'wp_enqueue_scripts', 'replace_fonts', 11 );

function replace_jQuery() {
    wp_deregister_script('jquery'); // initiate the function
    wp_register_script('jquery', get_template_directory_uri().'/javascripts/jquery.min.js', __FILE__, false, '1.7.2', true); // register the local file
    wp_enqueue_script('jquery'); // enqueue the local file
}

add_action('wp_enqueue_scripts', 'replace_jQuery', 9 );


function peoples_bones_mobile_nav() {
        // display the wp3 menu if available
    wp_nav_menu(
        array(
                'menu' => 'mobile_nav', /* menu name */
                'menu_class' => 'side-nav tabs vertical',
                'theme_location' => 'main_nav', /* where in the theme it's assigned */
                'container_class' => 'mobile-nav-container', /* container tag */
                'fallback_cb' => 'bones_main_nav_fallback', /* menu fallback */
                'depth' => '2'
        )
    );
}

?>
