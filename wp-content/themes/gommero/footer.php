<div class="clear"></div>
<!--Start Footer wrapper-->
<div class="footer_wrapper">
    <?php
    /* A sidebar in the footer? Yep. You can can customize
     * your footer with four columns of widgets.
     */
    get_sidebar('footer');
    ?>
</div>
<!--End Footer wrapper-->
</div>
<!--End Content Wrapper-->
<div class="clear"></div>

</div>
<!--End Container-->
</div>
<!--End Content bg-->
<div class="clear"></div>
<!--Start Container-->
<div class="container_24">
    <!--Start Footer last container-->
    <div class="grid_24 footer_last_content">
        <div class="footer_bottom">
            <?php if (gommero_get_option('gommero_ftext') != '') { ?>
                <p><?php echo stripslashes(gommero_get_option('gommero_ftext')); ?></p>
            <?php } else { ?>
                <p>
                    <?php echo get_bloginfo('title'); ?> - <?php echo get_bloginfo('description'); ?> <br/>
                    <?php _e('<a href="http://www.inkthemes.com">Gommero Theme</a> powered by <a href="http://www.wordpress.org">WordPress</a>.','gommero'); ?>
                </p>
            <?php } ?>
            <ul class="social_logos">
                <?php if (gommero_get_option('gommero_facebook') != '') { ?>
                    <li><a class="facebook" title="Facebook" href="<?php echo gommero_get_option('gommero_facebook'); ?>"><span></span></a></li>
                <?php
                } else {
                    
                }
                ?> 
                <?php if (gommero_get_option('gommero_twitter') != '') { ?>
                    <li><a class="twitter" title="Twitter" href="<?php echo gommero_get_option('gommero_twitter'); ?>"><span></span></a></li>
                <?php
                } else {
                    
                }
                ?>
                <?php if (gommero_get_option('gommero_rss') != '') { ?>
                    <li><a class="rss" title="Rss" href="<?php echo gommero_get_option('gommero_rss'); ?>"><span></span></a></li>
                <?php
                } else {
                    
                }
                ?>            
            </ul>
        </div>
    </div>
    <!--End Footer last container-->
</div>
<!--End Container-->
<?php wp_footer(); ?>

</body>
</html>
