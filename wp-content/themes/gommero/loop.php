<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--Start Post-->
        <div class="post">
            <h1 class="post_title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
            <ul class="post_meta">
                <li class="post_meta_content date"> <?php the_time('jS F Y') ?></li>
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
            <a class="read_more" href="<?php the_permalink(); ?>"><?php _e('read more','gommero'); ?></a>
            <!--End Post Content-->


            <div class="clear"></div>
            <div class="double_line"></div>
        </div>
        <!--End Post--> 
    <?php endwhile;
else: ?>
    <div class="post">
        <p>
    <?php _e('Sorry, no posts matched your criteria.', 'gommero'); ?>
        </p>
    </div>
<?php endif; ?> 