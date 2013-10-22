<?php

/* Extends functions.php from parent theme */


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
