<?php
/*
  /**
 * The main front page file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * 
 */
if ('posts' == get_option('show_on_front') && gommero_get_option('re_nm') !== 'on') {
    get_template_part('home');
} elseif ('page' == get_option('show_on_front') && gommero_get_option('re_nm') !== 'on') {
    $template = get_post_meta(get_option('page_on_front'), '_wp_page_template', true);
    $template = ( $template == 'default' ) ? 'index.php' : $template;
    locate_template($template, true);
} else {
    get_header();
    ?>
    <div class="slider_wrapper">
        <div id="slides">
            <div class="slides_container">
                <?php
                //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
                $mystring1 = gommero_get_option('gommero_slideimage1');
                $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                $check_img_ofset = 0;
                foreach ($value_img as $get_value) {
                    if (preg_match("/$get_value/", $mystring1)) {
                        $check_img_ofset = 1;
                    }
                }
                // Note our use of ===.  Simply == would not work as expected
                // because the position of 'a' was the 0th (first) character.
                ?>
                <?php if (gommero_get_option('gommero_slideimage1') != '') { ?>
                    <?php if ($check_img_ofset == 0) { ?>
                        <div><?php echo gommero_get_option('gommero_slideimage1'); ?></div>
                    <?php } else { ?>
                        <div>
                            <a href="<?php echo gommero_get_option('gommero_slidelink1'); ?>"><img src="<?php echo gommero_get_option('gommero_slideimage1'); ?>" alt="Slide Image" /></a>
                        </div>
                    <?php }
                } else {
                    ?>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/slideimg.jpg" alt="" /></div>
    <?php } ?>
            </div>
        </div>                       
    </div>
    <div class="clear"></div>
    <div class="double_line"></div>
    <!--Start Testimonial-->
    <div class="testimonial">
        <?php if (gommero_get_option('gommero_mainheading') != '') { ?>
            <h1><?php echo stripslashes(gommero_get_option('gommero_mainheading')); ?></h1>
            <?php } else { ?>
            <h1><?php _e('All of our WordPress themes come with a theme  options admin panel so you can 
            easily customize your Site with ease.', 'gommero'); ?></h1>
    <?php } ?>    
    </div>
    <!--End Testimonial-->
    </div>
    <!--End Main content-->
    <div class="clear"></div>
    <!--Start Feature Content-->
    <div class="feature_header"></div>
    <div class="clear"></div>
    <div class="feature_content">
        <div class="one_third">
            <div class="feature">
                <?php if (gommero_get_option('gommero_headline1') != '') { ?>
                    <h3 class="feature_title"><?php echo stripslashes(gommero_get_option('gommero_headline1')); ?></h3>
                <?php } else { ?>
                    <h3 class="feature_title"><?php _e('Beautiful Theme Design', 'gommero'); ?></h3>
                    <?php } ?>						
                <div class="inner">
                    <?php if (gommero_get_option('gommero_fimg1') != '') { ?> 
                        <a href="<?php echo gommero_get_option('gommero_link1'); ?>"><img src="<?php echo gommero_get_option('gommero_fimg1'); ?>"/></a>
                    <?php } else { ?>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featureimg.jpg"/></a>
                    <?php } ?>
                    <?php if (gommero_get_option('gommero_feature1') != '') { ?> 
                        <p><?php echo stripslashes(gommero_get_option('gommero_feature1')); ?> </p>
                        <?php } else { ?>
                        <p><?php _e('ll of our WordPress themes come 
                        with a theme options admin panel 
                        so you can easily customize. ', 'gommero'); ?></p>
                    <?php } ?>
                    <?php if (gommero_get_option('gommero_link1') != '') { ?> 
                        <a href="<?php echo gommero_get_option('gommero_link1'); ?>"><?php _e('read more', 'gommero'); ?> </a>
                    <?php } else { ?>
                        <a href="#"><?php _e('read more', 'gommero'); ?> </a>
    <?php } ?>
                </div>
            </div>
        </div>
        <div class="one_third">
            <div class="feature">
                <?php if (gommero_get_option('gommero_headline2') != '') { ?>
                    <h3 class="feature_title"><?php echo stripslashes(gommero_get_option('gommero_headline2')); ?></h3>
                <?php } else { ?>
                    <h3 class="feature_title"><?php _e('Single Click Installation', 'gommero'); ?></h3>
                    <?php } ?>						
                <div class="inner">
                    <?php if (gommero_get_option('gommero_fimg2') != '') { ?> 
                        <a href="<?php echo gommero_get_option('gommero_link2'); ?>"><img src="<?php echo gommero_get_option('gommero_fimg2'); ?>"/></a>
                    <?php } else { ?>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featureimg2.jpg"/></a>
                    <?php } ?>
                    <?php if (gommero_get_option('gommero_feature2') != '') { ?> 
                        <p><?php echo stripslashes(gommero_get_option('gommero_feature2')); ?> </p>
                        <?php } else { ?>
                        <p><?php _e('ll of our WordPress themes come 
                        with a theme options admin panel 
                        so you can easily customize.', 'gommero'); ?> </p>
                    <?php } ?>
                    <?php if (gommero_get_option('gommero_link2') != '') { ?> 
                        <a href="<?php echo gommero_get_option('gommero_link2'); ?>"><?php _e('read more', 'gommero'); ?> </a>
                    <?php } else { ?>
                        <a href="#"><?php _e('read more', 'gommero'); ?> </a>
    <?php } ?>
                </div>
            </div>                        
        </div>
        <div class="one_third last">
            <div class="feature">
                <?php if (gommero_get_option('gommero_headline3') != '') { ?>
                    <h3 class="feature_title"><?php echo stripslashes(gommero_get_option('gommero_headline3')); ?></h3>
                <?php } else { ?>
                    <h3 class="feature_title"><?php _e('Simplistic &amp; Easy', 'gommero'); ?></h3>
                    <?php } ?>						
                <div class="inner">
                    <?php if (gommero_get_option('gommero_fimg3') != '') { ?> 
                        <a href="<?php echo gommero_get_option('gommero_link3'); ?>"><img src="<?php echo gommero_get_option('gommero_fimg3'); ?>"/></a>
                    <?php } else { ?>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featureimg3.jpg"/></a>
                    <?php } ?>
                    <?php if (gommero_get_option('gommero_feature3') != '') { ?> 
                        <p><?php echo stripslashes(gommero_get_option('gommero_feature3')); ?> </p>
                        <?php } else { ?>
                        <p><?php _e('ll of our WordPress themes come 
                        with a theme options admin panel 
                        so you can easily customize.', 'gommero'); ?></p>
                    <?php } ?>
                    <?php if (gommero_get_option('gommero_link3') != '') { ?> 
                        <a href="<?php echo gommero_get_option('gommero_link3'); ?>"><?php _e('read more', 'gommero'); ?> </a>
                    <?php } else { ?>
                        <a href="#"><?php _e('read more', 'gommero'); ?> </a>
    <?php } ?>
                </div>
            </div>
        </div> 
    </div>
    <div class="feature_footer"></div>
    <!--End Feature Content-->  
    <?php
    if (gommero_get_option('gommero_post_front') !== 'false') {
        get_template_part('content');
    }
    get_footer();
}
?> 