function validateEmail() {
    const email = document.getElementById('email').value;
    const errorContainer = document.getElementById('errorContainer');
    errorContainer.innerHTML = '';

    // Inicializar el mensaje de error
    let errors = [];

    // Verificar si el correo está vacío
    if (!email) {
        errors.push("El campo de correo electrónico no puede estar vacío.");
    }

    // Verificar si el correo contiene un arroba y un punto
    const atIndex = email.indexOf('@');
    const dotIndex = email.lastIndexOf('.');
    
    if (atIndex === -1 || dotIndex === -1 || atIndex > dotIndex) {
        errors.push("El formato del correo electrónico no es válido.");
    }

    // Verificar el contenido antes del arroba, después del arroba y después del punto
    if (atIndex > 0 && atIndex < email.length - 1 && dotIndex > atIndex + 1 && dotIndex < email.length - 1) {
        // Recorrer el correo para verificar carácter por carácter
        for (let i = 0; i < email.length; i++) {
            if (i < atIndex && email[i] === '@') {
                errors.push("Debe haber texto antes del '@'.");
                break;
            } else if (i > atIndex && i < dotIndex && email[i] === '.') {
                errors.push("Debe haber texto después del '@' y antes del '.'.");
                break;
            } else if (i > dotIndex && email[i] === '.') {
                errors.push("Debe haber texto después del '.'.");
                break;
            }
        }
    } else {
        errors.push("El formato del correo electrónico no es válido.");
    }

    // Mostrar errores si existen
    if (errors.length > 0) {
        for (let i = 0; i < errors.length; i++) {
            const errorElement = document.createElement('p');
            errorElement.textContent = errors[i];
            errorElement.style.color = 'red';
            errorContainer.appendChild(errorElement);
        }
    } else {
        const successElement = document.createElement('p');
        successElement.textContent = 'El correo electrónico es válido.';
        successElement.style.color = 'green';
        errorContainer.appendChild(successElement);
    }
}