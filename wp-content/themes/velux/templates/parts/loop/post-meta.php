<?php
/**
 * Template part for displaying the post meta inside The Loop.
 *
 * @package Primer
 * @since   1.0.0
 */

?>

<div class="entry-meta">

	<?php if ( is_new_day() ) : ?>

		<span class="posted-date"><?php the_date(); ?></span>

	<?php endif; ?>

</div><!-- .entry-meta -->
