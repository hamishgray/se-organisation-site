<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Primer
 * @since   1.0.0
 */

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content' ); ?>

		<?php if(function_exists('mpdf_pdfbutton')) mpdf_pdfbutton(
			true,
			'<img src="http://localhost/se-organisation-site/wp-content/plugins/wp-mpdf/pdf.png" alt="This page as PDF" border="0"> Download article PDF',
			'Login to download this PDF'
		); ?>

		<?php primer_post_nav(); ?>

	<?php endwhile; ?>

	</main><!-- #main -->

</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_sidebar( 'tertiary' ); ?>

<?php get_footer(); ?>
