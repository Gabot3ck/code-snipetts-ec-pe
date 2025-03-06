<?php
  function enqueue_custom_checkout_script() {
    if (is_checkout()) {
        $script_url = get_template_directory_uri() . '/js/custom-checkout.js';
        error_log("Intentando cargar el script: " . $script_url); // Depuración
        wp_enqueue_script(
            'custom-checkout-script',
            $script_url,
            array('wp-hooks', 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components'),
            '1.0',
            true
        );
    }
  }
add_action('wp_enqueue_scripts', 'enqueue_custom_checkout_script');