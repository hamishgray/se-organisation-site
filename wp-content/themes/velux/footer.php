<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#footer-php
 *
 * @package Primer
 * @since   1.0.0
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer">

			<div class="site-footer__inner container">

				<div class="row">
					<div class="col col--4">
						<?php
							the_custom_logo();
						?>
						<br>
						<p class="text--sm">
							Copyright © <?php echo date('Y'); ?> Secret Escapes Ltd.<br />
							All rights reserved <br />
							<a href="https://d1x3cbuht6sy0f.cloudfront.net/legal/slaveryStatement.pdf">Modern slavery statement</a>
						</p>
					</div>
					<div class="col col--8 text--500 text--lg">
						<?php wp_nav_menu(array(
							'menu' => 'primary',
							'orderby' => 'menu_order'
						)); ?>
					</div>
				</div>

			</div><!-- .site-footer-inner -->

		</footer><!-- #colophon -->

	</div><!-- #page -->

</body>

</html>
