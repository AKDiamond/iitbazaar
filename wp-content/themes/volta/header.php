<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package volta
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper_one">
<div class="wrapper_two">
<div class="wrapper_three">

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'volta' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-nav' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
    <?php 
	
	if(is_home() && !is_page()){
		get_template_part( 'custom', 'header' );
	}
	if( ( is_archive() ) && ( get_theme_mod('volta_show_slider_categories') == 'yes' ) ){
		get_template_part( 'custom', 'header' );
	}
	if( ( is_page() || is_404() ) && ( get_theme_mod('volta_show_slider_page') == 'yes' ) ){
		get_template_part( 'custom', 'header' );
	}
	if( is_single() && get_theme_mod('volta_show_slider_post') == 'yes' ){
		get_template_part( 'custom', 'header' );
	}
	
	?>
    
	<div id="content" class="site-content">

		 
