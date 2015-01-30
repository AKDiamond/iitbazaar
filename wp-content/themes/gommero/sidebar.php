<!--Start Sidebar Wrapper-->
<div class="grid_8 sidebar_wrapper omega">
    <!--Start Sidebar-->
    <div class="sidebar">
        <?php if (!dynamic_sidebar('primary-widget-area')) : ?>

            <div class="wrap">
                <h4 class="sidebar_title"><?php _e('Archives', 'gommero'); ?></h4>
                <ul>
                    <?php wp_get_archives('type=monthly'); ?>
                </ul>
            </div>

            <div class="wrap">
                <h4 class="sidebar_title"> <?php _e('Categories', 'gommero'); ?></h4>
                <ul>
                    <?php wp_list_categories('title_li'); ?>
                </ul>
            </div>
        <?php endif; // end primary widget area  ?>
        <?php
        // A second sidebar for widgets, just because.
        if (is_active_sidebar('secondary-widget-area')) :
            ?>
            <?php dynamic_sidebar('secondary-widget-area'); ?>
        <?php endif; ?>

    </div>
    <!--End Sidebar-->
</div>
<!--End Sidebar Wrapper-->   