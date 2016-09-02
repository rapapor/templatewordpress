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

<!-- sekcja Top slider -->
<div class="top-slider">
		<?php
		$posts = get_posts(array(
		'include' => 32,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
		));

		echo apply_filters('the_content', $posts[0]->post_content);
		?>
</div>

<!-- sekcja Trzy kluczowe cechy -->
<div class="three-features">
	<div class="container section-padding">
		<?php
		$posts = get_posts(array(
		'include' => 16,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
		));

		echo apply_filters('the_content', $posts[0]->post_content);
		?>
	</div>
</div>


<!-- sekcja Zalety produktu -->
<div class="product-advantages darker-bg">
	<div class="container">
		<?php
		$posts = get_posts(array(
		'include' => 20,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
		));
	
		echo apply_filters('the_content', $posts[0]->post_content);
		?>
	</div>
</div>

<!-- sekcja Zobacz wiecej-->
<div class="product-more">
	<div class="container section-padding">
		<?php
		$posts = get_posts(array(
		'include' => 24,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
		));

		echo apply_filters('the_content', $posts[0]->post_content);
		?>
	</div>
</div>

<!-- sekcja Call to action-->
<div class="call-to-action accent-bg">
	<div class="container section-padding">
		<?php
		$posts = get_posts(array(
		'include' => 29,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
		));

		echo apply_filters('the_content', $posts[0]->post_content);
		?>
	</div>
</div>
<?php get_footer(); ?>
