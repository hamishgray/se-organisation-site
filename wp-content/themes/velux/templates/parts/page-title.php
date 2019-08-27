<?php
/**
 * Displays page titles.
 *
 * @package Primer
 * @since   1.0.0
 */

?>

<div class="page-banner">

	<div class="page-banner__inner">

		<div class="page-banner__title">
			<?php
				if( get_field('banner_title') ){
					echo '<h1>';
				  the_field('banner_title');
					echo '</h1>';
				}else{
					primer_the_page_title();
				}
			?>
		</div>

		<?php
			if( get_field('banner_text') ){
				echo '<div class="page-banner__text"><p class="text--xl">';
				the_field('banner_text');
				echo '</p></div>';
			}
		?>

	</div>

</div><!-- .page-title-container -->
