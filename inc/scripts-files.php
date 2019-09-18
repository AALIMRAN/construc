<?php
/**
 * Enqueue scripts and styles.
 *
 * @package Construc
 */
function construc_scripts() {
	wp_enqueue_style( 'construc-fonts', construc_fonts_url() );
	wp_enqueue_style( 'construc-style', get_theme_file_uri( 'style.css' ), array(), filemtime( get_theme_file_path( 'style.css' ) ) );
	wp_enqueue_style( 'animate', get_theme_file_uri( 'asset/css/animate.css' ), array(), '3.7.0' );
	wp_enqueue_style( 'bootstrap', get_theme_file_uri( 'asset/css/bootstrap.css' ), array(), '4.1.3' );
	wp_enqueue_style( 'icofont', get_theme_file_uri( 'asset/css/icofont.css' ), array(), '1.0.1' );
	wp_enqueue_style( 'fontawesome', get_theme_file_uri( 'asset/css/font-awesome.css' ), array(), '4.7.0' );
	wp_enqueue_style( 'owl-carousel', get_theme_file_uri( 'asset/css/owl.carousel.css' ), array(), '2.3.4' );
	wp_enqueue_style( 'construc-main', get_theme_file_uri( 'asset/css/style.css' ), array(), filemtime( get_theme_file_path( 'asset/css/style.css' ) ) );
	$primary_color = get_theme_mod( 'primary_color', '#ffa100');
$data = <<<EOD
#cssmenu>ul>li.current-menu-item a, #cssmenu>ul>li>a:hover , .single-topbar p span, .topbar-social a,.experience-content h1 span, .our-mission-list ul li::before, .classic_layout .services-block .icon, .single-why-choose .content h4, .single-why-choose .icon, .project-nav ul li.active, .project-nav ul li:hover, .single-project:hover a h4, h3.kc_title.testimonial-title span, .copyright-section a, .footer-area .widget_nav_menu ul li a:hover, .footer-social a, .team-social a,.single-blog.list-blog-item .news-meta a span, aside.widget-area .widget ul li a:hover, .recent-content p span, .single-contact-address .icon, .single-input label, .single-services:hover .icon {
	color: $primary_color;
}

.scrooltotop a, a.btn.btn-default.button-primary, .classic_layout .services-block:hover .icon, .single-blog a.read-more, .newsletter button, .blog-title h3:before, .get-in-touch-btn a, .single-blog a.read-more, .widget-area .widget form button, .submit-button button, .submitbtn input[type="submit"], .team-social-icon a:hover, .services-hover a, .single-services:hover .icon:before, #cssmenu ul ul li a:hover, .our-mission-list h4:before, .single-why-choose:hover .icon, #cssmenu>ul>li.current-menu-item.has-sub>a:before, #cssmenu>ul>li.current-menu-item.has-sub>a:after, #cssmenu>ul>li.has-sub>a:hover:before, #cssmenu>ul>li.has-sub>a:hover:after, .woocommerce ul.products li.product .button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span, .woocommerce .star-rating,.woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{
	background: $primary_color;
}
.newsletter button, .get-in-touch-btn a, .blog-content blockquote, .single-services:hover,a.btn.btn-default.button-primary, .single-why-choose .icon, .single-why-choose:hover .icon, .newsletter form input{
	border-color: $primary_color;
}
EOD;

wp_add_inline_style( 'construc-main', $data );


	// wp_add_inline_style( 'construc-main', $data );
	wp_enqueue_style( 'construc-responsive', get_theme_file_uri( 'asset/css/responsive.css' ), array(), filemtime( get_theme_file_path( 'asset/css/responsive.css' ) ) );
	wp_enqueue_script( 'bootstrap', get_theme_file_uri( 'asset/js/bootstrap.js' ), array( 'jquery' ), '4.1.3', true );
	wp_enqueue_script( 'owl-carousel', get_theme_file_uri( 'asset/js/owl.carousel.js' ), array( 'jquery' ), '2.3.4', true );
	wp_enqueue_script( 'construc-menu', get_theme_file_uri( 'asset/js/menu.js' ), array( 'jquery' ), filemtime( get_theme_file_path( 'asset/js/menu.js' ) ), true );

	wp_enqueue_script( 'isotope', get_theme_file_uri( 'asset/js/isotope.pkgd.min.js' ), array( 'jquery' ), filemtime( get_theme_file_path( 'asset/js/isotope.pkgd.min.js' ) ), true );

	wp_enqueue_script( 'construc-main', get_theme_file_uri( 'asset/js/active.js' ), array( 'jquery' ), filemtime( get_theme_file_path( 'asset/js/active.js' ) ), true );

	wp_enqueue_script( 'construc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'construc_scripts' );
