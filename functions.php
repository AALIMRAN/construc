<?php
/**
 * construc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package construc
 */

if ( ! function_exists( 'construc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function construc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on construc, use a find and replace
		 * to change 'construc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'construc', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'construc-recent-thumn', 65, 65, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'construc' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'construc_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_editor_style( 'asset/css/custom-editor-style.css' );
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'construc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function construc_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'construc_content_width', 640 );
}
add_action( 'after_setup_theme', 'construc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require get_template_directory() . '/inc/register-sidebar.php';

/**
 * All css and js files
 */
require get_template_directory() . '/inc/scripts-files.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Comment Form Templtae
 */
require get_template_directory() . '/inc/comment-form.php';

/**
 * Latest Post Widget
 */
require get_template_directory() . '/inc/widget/latest-post.php';

/**
 * Latest Post Widget
 */
require get_template_directory() . '/inc/widget/services.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


if ( ! function_exists( 'construc_fonts_url' ) ) :
	function construc_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin';
		if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'construc' ) ) {
			$fonts[] = 'Open+Sans:300,400,600,700';
		}
		if ( 'off' !== _x( 'on', 'Oxygen font: on or off', 'construc' ) ) {
			$fonts[] = 'Oxygen:300,400,700';
		}
		if ( 'off' !== _x( 'on', 'Ubuntu font: on or off', 'construc' ) ) {
			$fonts[] = 'Ubuntu:400,500,700';
		}
		if ( $fonts ) {
			$fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $fonts ) ),
				'subset' => urlencode( $subsets ),
			), 'https://fonts.googleapis.com/css' );
		}
		$fonts_url = str_replace('Open%2BSans', 'Open+Sans', $fonts_url);
		return $fonts_url;
	}
endif;

get_template_part( 'template-parts/archive', 'post' );
get_template_part( 'template-parts/category', 'post' );
