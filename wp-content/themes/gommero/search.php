<?php
/**
 * The Search Page.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
        <?php if (function_exists('gommero_breadcrumbs')) gommero_breadcrumbs(); ?>
        <h1><?php printf(__('Search Results for: %s', 'gommero'), '' . get_search_query() . ''); ?></h1>
        <?php get_template_part('loop', 'index'); ?>                  
        <div class="clear"></div>
        <nav id="nav-single"> <span class="nav-previous">
                <?php next_posts_link(__('&larr; Older posts', 'gommero')); ?>
            </span> <span class="nav-next">
                <?php previous_posts_link(__('Newer posts &rarr;', 'gommero')); ?>
            </span> </nav>
        <div class="clear"></div>
    </div>
    <!--End Content-->			
</div>
<!--End Content Wrap-->
<?php get_sidebar(); ?>

<?php get_footer(); ?> 