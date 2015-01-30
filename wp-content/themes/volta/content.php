<?php
/**
 * @package volta
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php volta_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php if( get_theme_mod('volta_show_excerpt_categories') == 'yes' ): ?>
        <?php the_excerpt(); ?>
        <?php else: ?>
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'volta' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'volta' ),
				'after'  => '</div>',
			) );
		?>
        <?php endif; ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<?php if( get_theme_mod('volta_show_excerpt_categories') != 'yes' ): ?>
	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( ' ' );
				if ( $categories_list && volta_categorized_blog() ) :
			?>
			<p class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'volta' ), $categories_list ); ?>
			</p>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', '' );
				if ( $tags_list ) :
			?>
			<p class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'volta' ), $tags_list ); ?>
			</p>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php edit_post_link( __( 'Edit', 'volta' ), '<p><span class="edit-link">', '</span></p>' ); ?>
	</footer><!-- .entry-footer -->
    <?php else: ?>
    <footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'volta' ), '<p><span class="edit-link">', '</span></p>' ); ?>
	</footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-## -->
