<?php

/*
Plugin Name: Remove StoreFront Footer
Plugin URI: https://github.com/nwcybersolutions/Remove-Storefront-Footer
Description: Removes Storefront Footer from Front End.
Author: Northwest Cyber Solutions
Author URI: https://nwcybersolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: Removes Storefront Footer
Domain Path: /languages
*/
add_action( 'init', 'nwcs_remove_footer_credit', 10 );
function nwcs_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'nwcs_storefront_credit', 20 );
} 
 
function nwcs_storefront_credit() {
    ?>
    <div class="site-info">
        &copy; <?php echo get_bloginfo( 'name' ) . ' ' . get_the_date( 'Y' ); ?>
    </div><!-- .site-info -->
    <?php
}
