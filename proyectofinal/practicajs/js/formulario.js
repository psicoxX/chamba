
  document.getElementById('contactForm').addEventListener('submit', function(event) {
    let nombre = document.getElementById('nombre').value.trim();
    let correo = document.getElementById('correo').value.trim();
    let asunto = document.getElementById('asunto').value.trim();
    let nombreError = document.getElementById('nombreError');
    let correoError = document.getElementById('correoError');
    let asuntoError = document.getElementById('asuntoError');
    let valid = true;

    // Validación del campo nombre
    if (nombre === '') {
      nombreError.textContent = 'Por favor, ingresa tu nombre';
      valid = false;
    } else {
      nombreError.textContent = '';
    }

    // Validación del campo correo
    if (correo === '') {
      correoError.textContent = 'Por favor, ingresa tu correo';
      valid = false;
    } else if (!isValidEmail(correo)) {
      correoError.textContent = 'Por favor, ingresa un correo válido';
      valid = false;
    } else {
      correoError.textContent = '';
    }

    // Validación del campo asunto
    if (asunto === '') {
      asuntoError.textContent = 'Por favor, ingresa el asunto';
      valid = false;
    } else {
      asuntoError.textContent = '';
    }

    if (!valid) {
      event.preventDefault(); // Evita que el formulario se envíe si hay errores
    }
  });

  // Función para validar el formato de correo electrónico
  function isValidEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
  }