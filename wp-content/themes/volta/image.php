<?php
/**
 * The template for displaying image attachments.
 *
 * @package volta
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<div class="entry-meta">
						<?php
							$metadata = wp_get_attachment_metadata();
							printf( __( 'Published <span class="entry-date"><time class="entry-date" datetime="%1$s">%2$s</time></span> at <a href="%3$s" title="Link to full-size image">%4$s &times; %5$s</a> in <a href="%6$s" title="Return to %7$s" rel="gallery">%8$s</a>', 'volta' ),
								esc_attr( get_the_date( 'c' ) ),
								esc_html( get_the_date() ),
								esc_url( wp_get_attachment_url() ),
								$metadata['width'],
								$metadata['height'],
								esc_url( get_permalink( $post->post_parent ) ),
								esc_attr( strip_tags( get_the_title( $post->post_parent ) ) ),
								get_the_title( $post->post_parent )
							);

						?>
					</div><!-- .entry-meta -->
                    
            </header><!-- .entry-header -->

            <div class="entry-content">
            
				<div class="entry-attachment">
					<div class="attachment">
						<?php volta_the_attached_image(); ?>
					</div><!-- .attachment -->

					<?php if ( has_excerpt() ) : ?>
					<div class="entry-caption">
						<?php the_excerpt(); ?>
					</div><!-- .entry-caption -->
					<?php endif; ?>
                    
					<nav role="navigation" id="image-navigation" class="image-navigation">
						<div class="nav-previous"><?php previous_image_link( false, __( 'Previous', 'volta' ) ); ?></div>
						<div class="nav-next"><?php next_image_link( false, __( 'Next', 'volta' ) ); ?></div>
					</nav><!-- #image-navigation -->
                                        
				</div><!-- .entry-attachment -->            
                <?php the_content(); ?>
                <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'volta' ),
                        'after'  => '</div>',
                    ) );
                ?>
            </div><!-- .entry-content -->
        
            <footer class="entry-footer">
                    <?php edit_post_link( __( 'Edit', 'volta' ), '<span class="edit-link">', '</span>' ); ?>
            </footer><!-- .entry-footer -->
        </article><!-- #post-## -->

            

			<?php
				if( get_theme_mod('volta_show_comments_post') == 'yes' ) :
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>