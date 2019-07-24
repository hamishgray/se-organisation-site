<?php
/* Template Name: Media Centre Template */
?>

<?php
get_header();
?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content-mc', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->

</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_sidebar( 'tertiary' ); ?>

<?php get_footer(); ?>
