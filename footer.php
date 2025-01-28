<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

blocksy_after_current_template();
do_action('blocksy:content:bottom');

?>
	</main>

	<footer class="footer">
		<div></div>
		<div class="footer__bottom">
			<div class="footer__bottom__policies">
				<a href="#">Política de Reembolso</a>
				<a href="#">Política de Privacidad</a>
				<a href="#">Nuestros datos</a>
				<a href="#">Términos y Condiciones</a>
			</div>
			<p>&copy; <?php echo date('Y'); ?> Comercial Scanavini Ltda.</p>
		</div>
	</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
