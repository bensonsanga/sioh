<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Salt_in_Our_hair
 */

get_header();
?>

	<main id="maincontent" class="maincontent">

			

		<div class="page-content__content">
		<header class="mythology-header">
				<figure class="mythology-header__hero" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
					<img 
					alt="<?php  echo get_query_var( 'category_name' )?>" 
					title="<?php  echo get_query_var( 'category_name' )?>" 
					class="home-header__image" 
					sizes="(min-width: 960px) 50vw, 100vw" 
					src="<?php bloginfo('template_directory');?>/images/cover/2x/<?php  echo get_query_var( 'category_name' )?>.png"
					onerror="this.onerror=null;this.src='<?php bloginfo('template_directory');?>/images/cover/2x/finance.png';" >
				</figure>
				<div class="mythology-header__text">
					<?php
					// the_archive_title( '<h1 class="mythology-header__title">', '</h1>' );
					the_archive_description( '<h1 class="mythology-header__title">', '</h1>' );
					// the_archive_description( '<div class="mythology-header__description">', '</div>' );
					?>
				</div>
			</header>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
