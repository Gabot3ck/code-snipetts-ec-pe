<?php
  add_action('wp_footer', 'custom_checkout_validation_script');
  function custom_checkout_validation_script() {
      if (is_checkout()) {
          ?>
          <script type="text/javascript">
          jQuery(document).ready(function($) {
              // Deshabilitar botón de pago inicialmente
              $('button#place_order').prop('disabled', true);
              
              // Agregar contenedor de error a cada campo requerido
              $('.woocommerce-billing-fields__field-wrapper .form-row.validate-required').each(function() {
                  $(this).append('<div class="custom-field-error" style="color: red; font-size: 12px; margin-top: 5px; display: none;"></div>');
              });
  
              // Validación al salir de cada campo obligatorio
              $('.woocommerce-billing-fields__field-wrapper .validate-required input, .woocommerce-billing-fields__field-wrapper .validate-required select').on('blur change', function() {
                  var field = $(this);
                  var parent = field.closest('.form-row');
                  var errorContainer = parent.find('.custom-field-error');
  
                  if (field.val().trim() === '' || (field.is('select') && field.val() === null)) {
                      errorContainer.text('Este campo es obligatorio').show();
                      parent.addClass('woocommerce-invalid');
                  } else {
                      errorContainer.hide();
                      parent.removeClass('woocommerce-invalid');
                  }
  
                  // Habilitar o deshabilitar botón de pago
                  validate_all_fields();
              });
  
              // Función para verificar si todos los campos obligatorios están llenos
              function validate_all_fields() {
                  var all_valid = true;
                  $('.woocommerce-billing-fields__field-wrapper .validate-required').each(function() {
                      var field = $(this).find('input, select');
                      if (field.val().trim() === '' || (field.is('select') && field.val() === null)) {
                          all_valid = false;
                      }
                  });
                  $('button#place_order').prop('disabled', !all_valid);
              }
  
              // Validar al intentar enviar el formulario
              $('form.checkout').on('submit', function(e) {
                  validate_all_fields();
  
                  if ($('.woocommerce-invalid').length > 0) {
                      e.preventDefault();
                      $('html, body').animate({
                          scrollTop: $('.woocommerce-invalid').first().offset().top - 100
                      }, 500);
                  }
              });
          });
          </script>
          <?php
      }
  }
  