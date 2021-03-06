<?php
/**
 * The template for displaying Search Results pages.
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
        <h1><?php printf(__('Author Archives: %s', 'gommero'), "<a class='url fn n' href='" . get_author_posts_url(get_the_author_meta('ID')) . "' title='" . esc_attr(get_the_author()) . "' rel='me'>" . get_the_author() . "</a>"); ?></h1>
        <?php if (have_posts()) : the_post(); ?>
            <?php
            // If a user has filled out their description, show a bio on their entries.
            if (get_the_author_meta('description')) :
                ?>
        <?php echo get_avatar(get_the_author_meta('user_email'), apply_filters('twentyten_author_bio_avatar_size', 60)); ?>
                <h2><?php printf(__('About %s', 'gommero'), get_the_author()); ?></h2>
                <p><?php the_author_meta('description'); ?></p>
            <?php endif; ?>
        <?php endif; ?>
        <?php
        /* Since we called the_post() above, we need to
         * rewind the loop back to the beginning that way
         * we can run the loop properly, in full.
         */
        rewind_posts();
        /* Run the loop for the author archive page to output the authors posts
         * If you want to overload this in a child theme then include a file
         * called loop-author.php and that will be used instead.
         */
        get_template_part('loop', 'author');
        ?>
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