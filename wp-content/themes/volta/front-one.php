

		<?php if ( have_posts() ) : ?>
			<div class="volta_front_one">
			<?php /* Start the Loop */ ?>
			<?php $volta_front_one = 0; while ( have_posts() ) : the_post(); $volta_front_one++ ?>
			<div <?php ( ($volta_front_one % 2) == 0 ) ? $volta_front_one_class = 'volta_front_one_item_last' : $volta_front_one_class = 'volta_front_one_item'; ?> class="<?php echo $volta_front_one_class; ?>">
            
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                    <div class="featured-image">
                    	<?php 
						if( has_post_thumbnail() ){	
							the_post_thumbnail( 'front-one-thumbnail' );
						}else{
							echo '<img src="'.get_stylesheet_directory_uri().'/images/default-thumbnail'.rand(1, 5).'.png">';
						}
						?>                
                	</div>
                    
                    <header class="entry-header">
                        <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
                    </header><!-- .entry-header -->                
                
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-summary -->                
                
                    <footer class="entry-footer">
                    
                    	<a href="<?php esc_url(the_permalink()); ?>"><?php _e('Read More', 'volta' ); ?></a>
                    
                    </footer><!-- .entry-footer -->
                
                </article><!-- #post-## -->
			
            </div><!-- .volta_front_one_item -->
			<?php endwhile; ?>
			</div><!-- .volta_front_one --> 
			<?php volta_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		
       