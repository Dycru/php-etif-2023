document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');
    var submitButton = form.querySelector('input[type="submit"]');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        submitButton.disabled = true;
        submitButton.value = 'Enviando...';

        // Simulación de envío (puedes implementar la lógica de envío real aquí)
        setTimeout(function() {
            var successMessage = document.createElement('p');
            successMessage.classList.add('success-message');
            successMessage.textContent = '¡Gracias por contactarnos! Tu mensaje ha sido enviado a la Montaña Solitaria.';
            form.appendChild(successMessage);

            form.reset();
            submitButton.disabled = false;
            submitButton.value = 'Enviar';
        }, 2000);
    });
});
