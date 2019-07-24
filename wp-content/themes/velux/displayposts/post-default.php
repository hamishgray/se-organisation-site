<?php
/**
 * Template part for displaying the post excerpt inside The Loop.
 *
 * @package Primer
 * @since   1.0.0
 */

?>

<div class="entry-summary">

	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <div class="entry-meta">

  	<?php if ( is_new_day() ) : ?>

  		<span class="posted-date"><?php the_date(); ?></span>

  	<?php endif; ?>

  	<span class="posted-author"><?php the_author_posts_link(); ?></span>

  	<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>

  		<span class="comments-number">

  			<?php comments_popup_link( esc_html__( 'Leave a comment', 'primer' ), esc_html__( '1 Comment', 'primer' ), /* translators: number of comments */ esc_html__( '% Comments', 'primer' ), 'comments-link' ); ?>

  		</span>

  	<?php endif; ?>

  </div><!-- .entry-meta -->

	<?php the_excerpt(); ?>

	<p><a class="button" href="<?php the_permalink(); ?>" aria-label="<?php printf( /* translators: post title */ esc_attr__( 'Continue reading %s', 'primer' ), get_the_title() ); ?>"><?php printf( /* translators: right arrow (LTR) / left arrow (RTL) */ esc_html__( 'Continue Reading %s', 'primer' ), is_rtl() ? '&larr;' : '&rarr;' ); ?></a></p>

</div><!-- .entry-summary -->
