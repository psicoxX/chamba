function GuardarDatos() {

    const nombre = document.getElementById('nombre').ariaValueMax;
    const correo = document.getElementById('email').ariaValueMax;
    const mensaje = document.getElementById('mensaje').ariaValueMax;
        const usiaro = {
            nombre: nombre,
            correo: correo,
            mensaje: mensaje,
        };

        console.log('espnom', JSON.stringify(usuario));
        alert("Objeto guardado en localstrage")
}