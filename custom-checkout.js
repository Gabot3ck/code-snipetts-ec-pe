document.addEventListener('DOMContentLoaded', function () {
    // Verificar si estamos en el bloque de checkout
    if (document.querySelector('.wc-block-checkout')) {
        // Hacer el campo de código postal opcional
        const postcodeField = document.querySelector('#billing-postcode');
        if (postcodeField) {
            postcodeField.required = false;
            postcodeField.placeholder = 'Opcional';
        }
    }
});