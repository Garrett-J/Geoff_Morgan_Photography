<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gmp
 */

?>

<html>
	<div class="footer">
		<div class="footer-links">
				<a class="footer-links__icon" href="https://www.instagram.com/gmorgan_photography/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>../../../img/instagram.png" alt="Instagram"></a>

				<a class="footer-links__icon" href="mailto:gwmorganphotography@gmail.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>../../../img/email.png" alt="Email"></a>
		</div>
		<div class="footer-info">
			<p class="footer-info__text"> © Geoff Morgan Photography, 2022  - Made by Garrett Johnson</p>
		</div>
	</div>

<?php wp_footer(); ?>


</html>
