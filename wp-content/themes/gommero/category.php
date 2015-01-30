<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
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
        <h1><?php printf(__('Category Archives: %s', 'gommero'), '' . single_cat_title('', false) . ''); ?></h1>
        <?php
        $category_description = category_description();
        if (!empty($category_description))
            echo '' . $category_description . '';
        /* Run the loop for the category page to output the posts.
         * If you want to overload this in a child theme then include a file
         * called loop-category.php and that will be used instead.
         */
        ?>
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