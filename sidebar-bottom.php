<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construc
 */

if ( ! is_active_sidebar( 'footer-1' ) && !is_active_sidebar('footer-2') && !is_active_sidebar('footer-3') && !is_active_sidebar('footer-4')) {
	return;
}
?>
    <!-- start footer section -->
    <section class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <?php
                    if (is_active_sidebar('footer-1')) {
                    	dynamic_sidebar('footer-1');
                    }
                    ?>
                </div>
                <div class="col-md-6 col-lg-2">
                    <?php
                    if (is_active_sidebar('footer-2')) {
                    	dynamic_sidebar('footer-2');
                    }
                    ?>
                </div>
                <div class="col-lg-3 col-md-6">
                    <?php
                    if (is_active_sidebar('footer-3')) {
                    	dynamic_sidebar('footer-3');
                    }
                    ?>
                </div>
                <div class="col-lg-3 col-md-6">
                   <?php
                   if (is_active_sidebar('footer-4')) {
                    	dynamic_sidebar('footer-4');
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>