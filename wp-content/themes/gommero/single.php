<?php
/**
 * The single template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php get_header(); ?>
</div>
<!--End Content wrapper-->
<div class="clear"></div>
<!--Start Content Wrap-->
<div class="grid_16 content_wrap alpha">
    <!--Start Content-->
    <div class="content">
        <?php if (function_exists('gommero_breadcrumbs')) gommero_breadcrumbs(); ?>
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <!--Start Post-->
                <div <?php post_class(); ?>>
                    <h1 class="post_title"><?php the_title(); ?></h1>
                    <ul class="post_meta">
                        <li class="post_meta_content date"> <?php the_time('jS F Y') ?></li>
                        <li class="post_meta_content author"><?php the_author_posts_link(); ?></li>
                        <li class="post_meta_content comment"> <?php comments_popup_link('No Comments.', '1 Comment.', '% Comments.'); ?></li>
                        <li class="post_meta_content category"><?php the_category(', '); ?></li>
                    </ul>
                    <!--Start Post Content-->
                    <div class="post_content"><?php the_content(); ?>
                        <div class="clear"></div>
                        <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'gommero') . '</span>', 'after' => '</div>')); ?>
                        <p>
                            <?php the_tags(); ?>
                        </p>
                    </div>                      
                    <!--End Post Content-->
                    <div class="clear"></div>
                    <div class="double_line"></div>
                    <div class="clear"></div>
                    <nav id="nav-single"> <span class="nav-previous">
                            <?php previous_post_link('%link', '<span class="meta-nav">&larr;</span> Previous Post '); ?>
                        </span> <span class="nav-next">
                            <?php next_post_link('%link', 'Next Post <span class="meta-nav">&rarr;</span>'); ?>
                        </span> </nav>
                    <div class="clear"></div>
                </div>
                <!--End Post-->   
                <!--Start Comment box-->
                <?php comments_template(); ?>
                <!--End Comment box-->	
            <?php endwhile; ?>						
    </div>
    <!--End Content-->

</div>
<!--End Content Wrap-->
<!--Start Sidebar Wrapper-->
<?php get_sidebar(); ?>
<!--End Sidebar Wrapper-->
<?php get_footer(); ?> 