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
		<div class="footer__top__brand">
			<img src="https://www.tiendascanavini.pe/wp-content/uploads/2024/11/logo_footer.webp" alt="Logo Scanavini">
			<h6>¡Scanavini, un mundo de soluciones en seguridad!</h6>
			<div class="wrapper-opening-hours">
			<div class="wrapper-icon-opening-hours" >
				<i class="bi bi-clock"></i>
			</div>
			<div class="wrapper-body-opening-hours" >
				<p class="title-opening-hours m-0" >Horario de atención</p>
				<p>Lunes a jueves de 08:00 a 18:30 hrs. <br> Viernes de 08:00 a 16:45 hrs.</p>
			</div>
			</div>
		</div>

		<div class="footer__top__contact">
			<h6 class="title" >Canales de atención</h6>

			<div class="wrapper-contact-for-customer">
			<div class="wrapper-icon-contact-for-customer" >
				<i class="bi bi-telephone-fill"></i>
			</div>
			<div class="wrapper-body-contact-for-customer" >
				<p class="title-contact-for-customer" >Llámanos</p>
				<p>Atención al cliente <br> <a href="tel:+5112045444">(+51) 1 204 5444</a></p>
			</div>
			</div>

			<div class="wrapper-contact-for-customer">
			<div class="wrapper-icon-contact-for-customer" >
				<i class="bi bi-envelope-at-fill"></i>
			</div>
			<div class="wrapper-body-contact-for-customer" >
				<p class="title-contact-for-customer" >Escríbenos</p>
				<p>Estamos para ayudarte  <a href="mailto:info@scanavini.pe">info@scanavini.pe</a></p>
			</div>
			</div>

			<div class="wrapper-contact-for-customer">
			<div class="wrapper-icon-contact-for-customer" >
				<img class="icon-showrrom" src="https://www.tiendascanavini.pe/wp-content/uploads/2025/03/store.png" alt="icon showroom scanavini">
			</div>
			<div class="wrapper-body-contact-for-customer" >
				<p class="title-contact-for-customer" >Visítanos</p>
				<p>
				En nuestro Showroom ubicado en: 
					<a href="https://maps.app.goo.gl/KRkHaV3qWCZZnSTP7" target="_blank">
					<br>Av. Emilio Cavenecia 337. <br> San Isidro, Lima.
					</a>
				</p>
			</div>
			</div>    

		</div>


		<div class="footer__top__marketing">
			<div>
				<h6 class="title" >Síguenos en:</h6>

				<div class="d-flex gap-2 justify-content-around justify-content-xs-center">
					<a href="https://www.tiktok.com/@scanavini.peru" target="_blank" rel="noopener">
						<i class="bi bi-tiktok"></i>
						<span class="visually-hidden">TikTok</span>
					</a>
					<a href="https://www.instagram.com/scanavini_peru" target="_blank" rel="noopener">
						<i class="bi bi-instagram"></i>
					</a>
					<a href="https://www.facebook.com/ScanaviniPeru" target="_blank" rel="noopener">
						<i class="bi bi-facebook"></i>
					</a>
					<a href="https://www.linkedin.com/company/scanavini-comercial-sac" target="_blank" rel="noopener">
						<i class="bi bi-linkedin"></i>
					</a>
				</div>
			</div>

			<div class="claims-book-container" >
				<a href="https://reclamaciones.tiendascanavini.pe" target="_blank">
					<img src="https://www.tiendascanavini.pe/wp-content/uploads/2025/04/libro-de-reclamaciones-virtual.png" alt="libro de reclamaciones scanavini" class="img-fluid">
				</a>
			</div>
		</div>

		</div>
		<div class="footer__bottom">
			<div class="footer__bottom__policies">
				<a href="https://www.tiendascanavini.pe/informacion-legal/">Información Legal</a>
				<a href="https://www.tiendascanavini.pe/terminos-y-condiciones/">Términos y Condiciones</a>
				<a href="https://www.tiendascanavini.pe/politica-de-privacidad/">Política de Privacidad</a>
				<a href="https://www.tiendascanavini.pe/politica-de-cookies/">Política de Cookies</a>
			</div>
			<p>&copy; <?php echo date('Y'); ?> Scanavini Comercial  S.A.C.</p>
		</div>
	</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
