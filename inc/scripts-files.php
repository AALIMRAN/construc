<?php
/**
 * Enqueue scripts and styles.
 */
function construc_scripts() {
	wp_enqueue_style( 'construc-fonts', construc_fonts_url() );
	wp_enqueue_style( 'construc-style', get_stylesheet_uri() );
	wp_enqueue_style('bootstrap', get_theme_file_uri( 'asset/css/bootstrap.min.css' ));
	wp_enqueue_style('fontawesome', get_theme_file_uri( 'asset/css/font-awesome.min.css' ));
	wp_enqueue_style('icofont', get_theme_file_uri( 'asset/css/icofont.css' ));
	wp_enqueue_style('menumaker', get_theme_file_uri( 'asset/css/menumaker.css' ));
	wp_enqueue_style('construc-reset', get_theme_file_uri( 'asset/css/reset.css' ));
	wp_enqueue_style('construc-main', get_theme_file_uri( 'asset/css/style.css' ));
	wp_enqueue_style('construc-responsive', get_theme_file_uri( 'asset/css/responsive.css' ));
    wp_enqueue_script('popper', get_theme_file_uri('asset/js/popper.min.js'), array('jquery'), null, true);
    wp_enqueue_script('gmapapi', '//maps.googleapis.com/maps/api/js?key=AIzaSyCn4uayw359fjMh4P9i2rKKZYHzXaqTRNs', null, null, true);
	wp_enqueue_script('construc-gmap', get_theme_file_uri('asset/js/gmap.js'), array('jquery'), null, true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('asset/js/bootstrap.min.js'), array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_theme_file_uri('asset/js/owl.carousel.min.js'), array('jquery'), null, true);
    wp_enqueue_script('waypoints', get_theme_file_uri('asset/js/waypoints.min.js'), array('jquery'), null, true);
    wp_enqueue_script('counterup', get_theme_file_uri('asset/js/jquery.counterup.js'), array('jquery'), null, true);
    wp_enqueue_script('nicescroll', get_theme_file_uri('asset/js/jquery.nicescroll.js'), array('jquery'), null, true);
    wp_enqueue_script('isotope', get_theme_file_uri('asset/js/isotope.pkgd.min.js'), array('jquery'), null, true);
    wp_enqueue_script('construc-slider', get_theme_file_uri('asset/js/slider.js'), array('jquery'), null, true);
    wp_enqueue_script('construc-menu', get_theme_file_uri('asset/js/menu.js'), array('jquery'), null, true);
    wp_enqueue_script('jquery-masonry');
    wp_enqueue_script('slick', get_theme_file_uri('asset/js/slick.js'), array('jquery'), null, true);
    wp_enqueue_script('construc-main', get_theme_file_uri('asset/js/active.js'), array('jquery'), null, true);
	wp_enqueue_script( 'construc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'construc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'construc_scripts' );
