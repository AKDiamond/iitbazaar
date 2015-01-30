<?php
/**
 * The 404 Error Page.
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
        <h2><?php _e('404: The Page you are looking for is not found.','gommero'); ?></h2>
        <h4><?php _e("You have landed on the Wrong Page..",'gommero'); ?></h4>
        <h4><a href="<?php echo home_url(); ?>"><?php _e("Click Here to Visit our Home Page",'gommero'); ?></a></h4>
        <h6><?php _e("Make a Search if you want to find something specific",'gommero'); ?></h6>
        <?php get_search_form(); ?>

    </div>
    <!--End Content-->			
</div>
<!--End Content Wrap-->
<?php get_sidebar(); ?>

<?php get_footer(); ?> 