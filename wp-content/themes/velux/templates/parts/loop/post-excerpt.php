<?php
/**
 * Template part for displaying the post excerpt inside The Loop.
 *
 * @package Primer
 * @since   1.0.0
 */

?>

<div class="entry-summary">

	<?php the_excerpt(); ?>

	<p class="arrow-link">
		<a href="<?php the_permalink(); ?>" aria-label="<?php printf( /* translators: post title */ esc_attr__( 'Continue reading %s', 'primer' ), get_the_title() ); ?>">
			<?php printf( 'Continue Reading' ); ?>
		</a>
	</p>

</div><!-- .entry-summary -->
