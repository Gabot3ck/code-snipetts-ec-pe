<?php
  add_action('wp_footer', 'custom_checkout_validation_script');
  function custom_checkout_validation_script() {
      if (is_checkout()) {
          ?>
          <script type="text/javascript">
          jQuery(document).ready(function($) {
              // Expresión regular para validar formato de correo electrónico
              function isValidEmail(email) {
                  var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                  return emailRegex.test(email);
              }
  
              // Restricción en tiempo real para DNI/RUC (solo números y sin empezar con 0)
              $('#billing_dniruc').on('keydown', function(e) {
                  var key = e.key;
                  var value = $(this).val();
  
                  // Permitir teclas de control como backspace, tab, delete, flechas
                  if ($.inArray(e.keyCode, [8, 9, 37, 39, 46]) !== -1) {
                      return;
                  }
  
                  // Bloquear letras y caracteres especiales
                  if (!/^[0-9]$/.test(key)) {
                      e.preventDefault();
                  }
  
                  // Bloquear si el primer número es 0
                  if (value.length === 0 && key === '0') {
                      e.preventDefault();
                  }
              });
        
        
        // Validación en blur para mostrar mensaje de error si no cumple las reglas
              $('#billing_dniruc').on('blur', function() {
                  var value = $(this).val().trim();
                  var errorContainer = $(this).closest('.form-row').find('.custom-field-error');
  
                  if (value === '') {
                      errorContainer.text('Este campo es obligatorio').show();
                      $(this).closest('.form-row').addClass('woocommerce-invalid');
                  } else if (!/^[1-9][0-9]*$/.test(value)) { // Validar que no comience con 0 y solo tenga números
                      errorContainer.text('Ingrese solo números y no puede comenzar con 0').show();
                      $(this).closest('.form-row').addClass('woocommerce-invalid');
                  } else {
                      errorContainer.hide();
                      $(this).closest('.form-row').removeClass('woocommerce-invalid');
                  }
              });
        
        
                    // Restricción en tiempo real para Nombre y Apellido (solo letras y espacios)
              $('#billing_first_name, #billing_last_name').on('keydown', function(e) {
                  var key = e.key;
                  var value = $(this).val();
  
                  // Permitir teclas de control como backspace, delete, tab, espacio, y flechas
                  if ($.inArray(e.keyCode, [8, 9, 32, 37, 39, 46]) !== -1) {
                      return;
                  }
  
                  // Bloquear números y caracteres especiales
                  if (!/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]$/.test(key)) {
                      e.preventDefault();
                  }
              });
  
              // Validación en blur para mostrar mensaje de error en Nombre y Apellido
              $('#billing_first_name, #billing_last_name').on('blur', function() {
                  var value = $(this).val().trim();
                  var errorContainer = $(this).closest('.form-row').find('.custom-field-error');
  
                  if (value === '') {
                      errorContainer.text('Este campo es obligatorio').show();
                      $(this).closest('.form-row').addClass('woocommerce-invalid');
                  } else if (!/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/.test(value)) { 
                      errorContainer.text('Solo se permiten letras y espacios').show();
                      $(this).closest('.form-row').addClass('woocommerce-invalid');
                  } else {
                      errorContainer.hide();
                      $(this).closest('.form-row').removeClass('woocommerce-invalid');
                  }
              });
        
        
  
              // Agregar mensajes de error a los campos obligatorios
              $('.woocommerce-billing-fields__field-wrapper .form-row.validate-required').each(function() {
                  $(this).append('<div class="custom-field-error" style="color: red; font-size: 12px; margin-top: 5px; display: none;"></div>');
              });
        
        
        
  
              // Validación en tiempo real
              $('.woocommerce-billing-fields__field-wrapper .validate-required input, .woocommerce-billing-fields__field-wrapper .validate-required select')
                  .on('blur change', function() {
                      var field = $(this);
                      var parent = field.closest('.form-row');
                      var errorContainer = parent.find('.custom-field-error');
  
                      if (field.val().trim() === '' || (field.is('select') && (field.val() === null || field.val() === ''))) {
                          errorContainer.text('Este campo es obligatorio').show();
                          parent.addClass('woocommerce-invalid');
                      } else {
                          errorContainer.hide();
                          parent.removeClass('woocommerce-invalid');
  
                          // Validar email si es el campo de email
                          if (field.attr('type') === 'email' || field.attr('id') === 'billing_email') {
                              if (!isValidEmail(field.val().trim())) {
                                  errorContainer.text('Ingrese un correo electrónico válido').show();
                                  parent.addClass('woocommerce-invalid');
                              } else {
                                  errorContainer.hide();
                                  parent.removeClass('woocommerce-invalid');
                              }
                          }
                      }
                  });
  
              // Validar al intentar enviar el formulario
              $('form.checkout').on('submit', function(e) {
                  $('.woocommerce-billing-fields__field-wrapper .validate-required input, .woocommerce-billing-fields__field-wrapper .validate-required select').trigger('blur');
  
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