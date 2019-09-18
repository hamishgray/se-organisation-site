<?php
/**
 * Template part for displaying the post excerpt inside The Loop.
 *
 * @package Primer
 * @since   1.0.0
 */

?>

<div class="display-post">

	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <div class="title entry-meta">
  	<?php if ( is_new_day() ) : ?>
  		<span class="posted-date"><?php the_date(); ?></span>
  	<?php endif; ?>
  </div><!-- .entry-meta -->

  <div class="entry-summary">
  	<?php the_excerpt(); ?>
  </div>

</div><!-- .entry-summary -->
