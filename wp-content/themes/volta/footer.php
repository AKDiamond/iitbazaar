<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package volta
 */
?>
    
	</div><!-- #content -->
    
	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="site-info-container">
            <div class="site-info">
            	<div class="bottom-site-name">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </div>
                <p><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'volta' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'volta' ), 'WordPress' ); ?></a></p>
            </div><!-- .site-info -->
        </div><!-- .site-info-container -->    
        <div class="bottom-footer-widget-left">
        	<?php dynamic_sidebar( 'bottom-footer-left' ); ?> 
        </div><!-- .footer-widget-left -->
        <div class="bottom-footer-widget-center">
        	<?php dynamic_sidebar( 'bottom-footer-center' ); ?> 
        </div><!-- .footer-widget-center -->
        <div class="bottom-footer-widget-right">
        	<?php dynamic_sidebar( 'bottom-footer-right' ); ?> 
        </div><!-- .footer-widget-right -->                
	</footer><!-- #colophon -->
    
</div><!-- #page -->

</div><!-- .wrapper_one -->
</div><!-- .wrapper_two -->
</div><!-- .wrapper_three -->

<?php wp_footer(); ?>

</body>
</html>
