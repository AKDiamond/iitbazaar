<div class="clear"></div>
<!--Start Content Wrap-->
<div class="grid_16 content_wrap alpha">
    <!--Start Content-->
    <div class="content">		
        <?php
        $limit = get_option('posts_per_page');
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        // The Query                      
        $the_query = new WP_Query();
        $the_query->query('showposts=' . $limit . '&paged=' . $paged);
        ?>  
        <!-- Start the Loop. -->
        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <!--Start Post-->
                <div class="post">
                    <h1 class="post_title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    <ul class="post_meta">
                        <li class="post_meta_content date"> <?php the_time('M. j, Y') ?></li>
                        <li class="post_meta_content author"><?php the_author_posts_link(); ?></li>
                        <li class="post_meta_content comment"> <?php comments_popup_link('No Comments.', '1 Comment.', '% Comments.'); ?></li>
                        <li class="post_meta_content category"><?php the_category(', '); ?></li>
                    </ul>
                    <!--Start Post Content-->
                    <div class="post_content">
                        <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                            <?php the_post_thumbnail('thumbnail', array('class' => 'postimg')); ?>
                        <?php } else { ?>
                            <?php gommero_get_image(153, 114); ?> 
                            <?php
                        }
                        ?>
                        <?php the_excerpt(); ?>
                        <div class="clear"></div>
                        <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'gommero') . '</span>', 'after' => '</div>')); ?>
                    </div>
                    <a class="read_more" href="<?php the_permalink(); ?>"><?php _e('read more', 'gommero'); ?></a>
                    <!--End Post Content-->


                    <div class="clear"></div>
                    <div class="double_line"></div>
                </div>
                <!--End Post--> 			
            <?php endwhile;
        else:
            ?>		
            <div class="post">
                <p>
    <?php _e('Sorry, no posts matched your criteria.', 'gommero'); ?>
                </p>
            </div>
<?php endif; ?> 
        <div class="clear"></div>
        <nav id="nav-single"> <span class="nav-previous">
                <?php next_posts_link(__('&larr; Older posts', 'gommero')); ?>
            </span> <span class="nav-next">
<?php previous_posts_link(__('Newer posts &rarr;', 'gommero')); ?>
            </span> </nav>
        <div class="clear"></div>
        <?php wp_reset_postdata(); ?>
    </div>
    <!--End Content-->			
</div>
<!--End Content Wrap-->
<?php get_sidebar(); ?>	 