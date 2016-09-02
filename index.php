<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package materialwp
 */

get_header(); ?>
<header class="entry-header">
	<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5000,1000), false, ''); ?>
	<div class="entry-img" style="background: url(<?php echo $src[0]; ?>);">
	<div class="dark-image-overlay">
		
	</div>
		<!-- tytułstrony -->
		<div class="container">
			<div class="entry-title">
				<?php the_title('<h1 class="entry-title-header">', '</h1>'); ?>
			</div>
		</div>
	</div>
</header>

<div class="container">
	<div class="row">

		<div id="primary" class="col-md-8 col-lg-8">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php materialwp_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
