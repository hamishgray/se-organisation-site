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
				if( get_field('title') ){
					echo '<h1>';
				  the_field('title');
					echo '</h1>';
				}else{
					primer_the_page_title();
				}
			?>
		</div>

	</div>

</div><!-- .page-title-container -->
