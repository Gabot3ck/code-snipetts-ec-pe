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
		<div class="footer__top">
			<div class="footer__top__brand" >
				<img src="https://www.tiendascanavini.pe/wp-content/uploads/2024/11/logo_footer.webp" alt="Logo Scanavini">
				<h6>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h6>
			</div>

			<div class="footer__top__contact" >
				<h6>Contáctanos</h6>
				<div class="d-flex gap-2" >
					<i class="bi bi-geo-alt-fill"></i>
					<p>Av. Emilio Cavenecia 337. San Isidro, Lima, Perú. </p>
				</div>

				<div  class="d-flex gap-2" >
					<i class="bi bi-telephone-fill"></i>
					<p>(+51) 1 204 5444 </p>
				</div>

				<div class="d-flex gap-2" >
					<i class="bi bi-envelope-at-fill"></i>
					<p>info@scanavini.com.pe</p>
				</div>
			</div>

			<div class="footer__top__marketing" >
				<h6>Síguenos</h6>

				<div class="d-flex gap-2 justify-content-around justify-content-xs-center" >
					<a href="https://www.tiktok.com/@scanavini.peru" target="_blank">
						<i class="bi bi-tiktok"></i>
					</a> 
					<a href="https://www.instagram.com/scanavini_peru" target="_blank">
						<i class="bi bi-instagram"></i>
					</a>
					<a href="https://www.facebook.com/ScanaviniPeru" target="_blank">
						<i class="bi bi-facebook"></i>
					</a>
					<a href="https://www.linkedin.com/company/scanavini-comercial-sac" target="_blank">
						<i class="bi bi-linkedin"></i>
					</a>
				</div>
			</div>
			
		</div>
		<div class="footer__bottom">
			<div class="footer__bottom__policies">
				<a href="https://www.tiendascanavini.pe/reembolso_devoluciones/">Política de Reembolso</a>
				<a href="https://www.tiendascanavini.pe/politica-de-privacidad/">Política de Privacidad</a>
				<a href="https://www.tiendascanavini.pe/terminos-y-condiciones/">Términos y Condiciones</a>
				<a href="https://www.tiendascanavini.pe/nuestros-datos/">Nuestros datos</a>
			</div>
			<p>&copy; <?php echo date('Y'); ?> Scanavini Comercial  S.A.C.</p>
		</div>
  </footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
