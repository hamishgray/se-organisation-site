<?php
/**
 * Displays page titles.
 *
 * @package Primer
 * @since   1.0.0
 */

?>

<div class="page-banner <?php if( is_front_page() ){ echo 'page-banner--home'; } ?>">

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
				echo '
				<div class="page-banner__text">
					<p class="text--xl">';
						the_field('banner_text');
					echo '</p>';
				echo '</div>';
			}
		?>

	</div>


	<?php
		if ( get_field('banner_image') ) {
			echo '<div class="page-banner__image" style="background-image: url(';
				the_field('banner_image');
			echo ');">';
		}
	?>

</div><!-- .page-title-container -->
