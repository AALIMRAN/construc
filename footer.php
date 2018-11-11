<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construc
 */

?>

	</div><!-- #content -->

<?php get_sidebar( 'bottom' ); ?>
    <!-- end of footer section -->
    <!-- start copyright section -->
    <div class="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- Please if you are using free version don't remove it please. but if you are using premium version then you can use. tank you -->
                    <?php echo wp_kses_post(get_theme_mod('copyright_content', '<p>Construction Business WordPress Theme. Developed by <a href="'.home_url('/').'">Theimran.com</a>. All rights reserved.</p>')); ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
