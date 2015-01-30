<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title>
            <?php wp_title('&#124;', true, 'right'); ?>
        </title> 
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <?php
        wp_head();
        ?>  
    </head>
    <body <?php body_class(); ?> >
        <!--Start Container-->
        <div class="container_24">
            <!--Start Header Wrapper-->
            <div class="grid_24 header_wrapper">
                <!--Start Header-->
                <div class="header">
                    <div class="logo"> 
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <?php if (gommero_get_option('gommero_logo') != '') { ?>
                                <img class="aligncenter" src="<?php echo gommero_get_option('gommero_logo'); ?>" alt="<?php bloginfo('name'); ?>" />
                            <?php } else { ?>
                                <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                                <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                            <?php } ?>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--End Header-->
            </div>
            <!--End Header Wrapper-->
        </div>
        <!--End Container-->
        <!--Start Content bg-->
        <div class="content_bg">
            <!--Start Container-->
            <div class="container_24">
                <!--Start Content wrapper-->
                <div class="grid_24 content_wrapper">            
                    <!--Start Main Content-->
                    <div class="main_content">
                        <!--Start Menu wrapper-->
                        <div class="menu_wrapper">
                            <?php gommero_nav(); ?>
                        </div>
                        <!--End Menu wrapper-->
                        <div class="clear"></div>
                        <div class="double_line"></div>