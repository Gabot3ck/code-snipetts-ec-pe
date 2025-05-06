<?php

/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order $order
 */

defined('ABSPATH') || exit;
?>

<div class="woocommerce-order">

	<?php
	if ($order) :

		do_action('woocommerce_before_thankyou', $order->get_id());
	?>

		<?php if ($order->has_status('failed')) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e('Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce'); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url($order->get_checkout_payment_url()); ?>" class="button pay"><?php esc_html_e('Pay', 'woocommerce'); ?></a>
				<?php if (is_user_logged_in()) : ?>
					<a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" class="button pay"><?php esc_html_e('My account', 'woocommerce'); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<!-- Cabecera personalizada-->
			<div class="store-thankyou-header">
				<div class="store-header-container">
					<div class="store-logo">
						<!-- Reemplaza la URL con la ubicación de tu logo -->
						<img src="https://www.tiendascanavini.pe/wp-content/uploads/2024/12/logo-e1733228668839.png" alt="Logo de la tienda" class="logo-image">
					</div>
					<div class="order-success-message">
						<div class="success-icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
								<circle cx="12" cy="12" r="10" fill="#e6f7e9" stroke="#28a745" stroke-width="2" />
								<path d="M9 12l2 2 4-4" fill="none" stroke="#28a745" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
						<h2 class="order-heading">¡Pedido Completado con Éxito!</h2>
						<p class="order-message">Gracias por comprar en nuestra tienda. Hemos enviado un correo electrónico con los detalles de tu pedido.</p>
					</div>
				</div>
				<div class="order-summary-preview">
					<div class="summary-item">
						<span class="summary-icon">📆</span>
						<div class="summary-text">
							<span class="summary-label">Fecha del pedido</span>
							<span class="summary-value"><?php echo date_i18n(get_option('date_format'), strtotime($order->get_date_created())); ?></span>
						</div>
					</div>
					<div class="summary-item">
						<span class="summary-icon">🔢</span>
						<div class="summary-text">
							<span class="summary-label">Número de pedido</span>
							<span class="summary-value">#<?php echo $order->get_order_number(); ?></span>
						</div>
					</div>
					<div class="summary-item">
						<span class="summary-icon">💳</span>
						<div class="summary-text">
							<span class="summary-label">Método de pago</span>
							<span class="summary-value"><?php echo $order->get_payment_method_title(); ?></span>
						</div>
					</div>
					<div class="summary-item">
						<span class="summary-icon">💲</span>
						<div class="summary-text">
							<span class="summary-label">Total</span>
							<span class="summary-value"><?php echo $order->get_formatted_order_total(); ?></span>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin Cabecera personalizada-->

		<?php endif; ?>

		<?php do_action('woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id()); ?>
		<?php do_action('woocommerce_thankyou', $order->get_id()); ?>

	<?php else : ?>

		<?php wc_get_template('checkout/order-received.php', array('order' => false)); ?> 

	<?php endif; ?>

</div>