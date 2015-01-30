<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package volta
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
    		
            <?php if(get_theme_mod('volta_show_social_section') == 'yes'):?>
			<aside id="social-links" class="widget social-links">
				
                <?php if(get_theme_mod('volta_social_facebook')):?>
                <div class="sidebar_facebook">
                	<p><a href="<?php echo esc_url(get_theme_mod('volta_social_facebook')); ?>"><?php _e('Like On Facebook', 'volta'); ?></a></p>
                </div>
                <?php endif; ?>
                
                <?php if(get_theme_mod('volta_social_twitter')):?>
                <div class="sidebar_twitter">
                	<p><a href="<?php echo esc_url(get_theme_mod('volta_social_twitter')); ?>"><?php _e('Follow On Twitter', 'volta'); ?></a></p>
                </div>   
                <?php endif; ?>
                
                <div class="sidebar_social_others">
                	<?php if(get_theme_mod('volta_social_behance')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_behance')); ?>">&#xf1b4;</a></span>
                    <?php endif; ?>
					<?php if(get_theme_mod('volta_social_bitbucket')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_bitbucket')); ?>">&#xf171;</a></span>
                    <?php endif; ?>
					<?php if(get_theme_mod('volta_social_github')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_github')); ?>">&#xf113;</a></span>
                	<?php endif; ?>
					<?php if(get_theme_mod('volta_social_instagram')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_instagram')); ?>">&#xf16d;</a></span> 
                    <?php endif; ?>
					<?php if(get_theme_mod('volta_social_youtube')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_youtube')); ?>">&#xf167;</a></span>
                    <?php endif; ?>
					<?php if(get_theme_mod('volta_social_dribble')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_dribble')); ?>">&#xf17d;</a></span>
                	<?php endif; ?>
					<?php if(get_theme_mod('volta_social_googleplus')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_googleplus')); ?>">&#xf0d5;</a></span>
                    <?php endif; ?>
					<?php if(get_theme_mod('volta_social_tumblr')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_tumblr')); ?>">&#xf173;</a></span>
                    <?php endif; ?>
					<?php if(get_theme_mod('volta_social_vine')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_vine')); ?>">&#xf1ca;</a></span>  
                    <?php endif; ?>
					<?php if(get_theme_mod('volta_social_wp')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_wp')); ?>">&#xf19a;</a></span>
                	<?php endif; ?>
					<?php if(get_theme_mod('volta_social_spotify')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_spotify')); ?>">&#xf1bc;</a></span>
                    <?php endif; ?>
					<?php if(get_theme_mod('volta_social_soundcloud')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_soundcloud')); ?>">&#xf1be;</a></span>
                    <?php endif; ?>
					<?php if(get_theme_mod('volta_social_reddit')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_reddit')); ?>">&#xf1a1;</a></span> 
                    <?php endif; ?>
					<?php if(get_theme_mod('volta_social_pinterest')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_pinterest')); ?>">&#xf0d2;</a></span>
                    <?php endif; ?>
					<?php if(get_theme_mod('volta_social_linkedin')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_linkedin')); ?>">&#xf0e1;</a></span>
                	<?php endif; ?>
					<?php if(get_theme_mod('volta_social_flickr')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_flickr')); ?>">&#xf16e;</a></span>  
                    <?php endif; ?>
					<?php if(get_theme_mod('volta_social_stackexchange')):?>
                    <span><a href="<?php echo esc_url(get_theme_mod('volta_social_stackexchange')); ?>">&#xf16c;</a></span>
                    <?php endif; ?>                                                                            
                </div>                             
                
			</aside>    
    		<?php endif; ?>
            
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'volta' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'volta' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

			<?php endif; // end sidebar widget area ?>
            
	</div><!-- #secondary -->
