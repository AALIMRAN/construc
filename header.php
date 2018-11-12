<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="header" class="header-area header-one">
        <div class="topbar-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-8 text-left">
                        <?php 
                        echo wp_kses_post( get_theme_mod( 'topbar_left_content', '<div class="topbar-list">
                                        <div class="single-topbar">
                                            <p> <span class="fa fa-map-marker"></span> 3486 Oakway Lane Pomona, CA 91766</p>
                                        </div>
                                        <div class="single-topbar">
                                            <p> <span class="fa fa-envelope"></span> tfthemecafe@gmail.com</p>
                                        </div>
                                    </div>' ) );
                         ?>
                    </div>
                    <div class="col-md-4 text-right">
                        <div class="topbar-social">
                            <a href="<?php echo esc_url(get_theme_mod('facebook'));?>" class="fa fa-facebook"></a>
                            <a href="<?php echo esc_url(get_theme_mod('twitter')); ?>" class="fa fa-twitter"></a>
                            <a href="<?php echo esc_url(get_theme_mod('googleplus'));?>" class="fa fa-google-plus"></a>
                            <a href="<?php echo esc_url(get_theme_mod('pinterest')); ?>" class="fa fa-pinterest"></a>
                            <a href="<?php echo esc_url(get_theme_mod('youtube')); ?>" class="fa fa-youtube"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="site-logo">
                           <?php
                           if (has_custom_logo()):
                            the_custom_logo();
                            else: 
                            if ( is_front_page() && is_home() ) :
                                ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php
                            else :
                                ?>
                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                <?php
                            endif;
                            $construc_description = get_bloginfo( 'description', 'display' );
                            if ( $construc_description || is_customize_preview() ) :
                                ?>
                                <p class="site-description"><?php echo $construc_description; /* WPCS: xss ok. */ ?></p>
                            <?php
                                endif;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-md-8 text-right">
                        <div class="cssmenu" id="cssmenu">
                            <?php 
                            wp_nav_menu( array(
                            	'theme_location'  => 'menu-1',
                            	'container'       => 'ul',
                            ) );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

	<div id="content" class="site-content">

	<?php
    if (!is_page_template( 'blank-template.php' )) {
        get_template_part('template-parts/page', 'banner');    
    }
    ?>