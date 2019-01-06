<?php 
/**
 * @Packge     : CarRentals
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

/**
 * Footer Area
 *
 * @Footer
 * @Back To Top Button
 *
 * @Hook carrentals_footer
 *
 * @Hooked  carrentals_footer_area 10
 * @Hooked  carrentals_back_to_top 20 
 *
 */

do_action( 'carrentals_footer' );

wp_footer(); 
?>
</body>
</html>