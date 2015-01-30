<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 */
get_header();
?>
</div>
<!--End Content wrapper-->
<div class="clear"></div>
<!--Start Content Wrap-->
<div class="grid_16 content_wrap alpha">
    <!--Start Content-->
    <div class="content">			  
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <div class="clear"></div>
                <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'gommero') . '</span>', 'after' => '</div>')); ?>
                <!--Start Comment box-->
                <?php comments_template(); ?>
                <!--End Comment box-->	
            <?php endwhile; ?>
    </div>
    <!--End Content-->			
</div>
<!--End Content Wrap-->
<?php get_sidebar(); ?>

<?php get_footer(); ?> 