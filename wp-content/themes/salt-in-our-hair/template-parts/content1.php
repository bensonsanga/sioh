<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Salt_in_Our_hair
 */

?>	
		<article id="post-<?php the_ID(); ?>" class="blog-article">
			<h1 class="post-cover__title">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="post-cover__title1">', '</h1>' );
				else :
					the_title( '<h2 class="post-cover__title1"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div class="blog-info">
						<?php
						salt_in_our_hair_posted_on();
						salt_in_our_hair_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</h1><!-- .entry-header -->



			<?php salt_in_our_hair_post_thumbnail(); ?>

			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'salt-in-our-hair' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'salt-in-our-hair' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
			

			<footer class="entry-footer">
				<?php salt_in_our_hair_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-<?php the_ID(); ?> -->

