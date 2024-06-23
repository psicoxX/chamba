


    function boton() {
        


    const text= document.getElementById("text").value;
    const numero= document.getElementById("numero").value;
    const miBoton = document.getElementById('btnCerrarModal');
    const botones = document.querySelectorAll('input[required]');


    if (usuario !== "" && contrasena !== "") {
        fetch('./conexionbd/Registro.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({usuario, contrasena})
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert(data.message);
                cerrarModal();
                setTimeout(function() {
                    window.location.href = '../index.php'; // Redirige al inicio
                }, 1000); // Espera 1 segundo antes de redirigir
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    } else {
        alert("Por favor, completa todos los campos.");
    }
    }

    // Función para cerrar el modal
    function cerrarModal() {
    const modal = document.getElementById('modal');
    if (modal) {
        modal.close();
    }
    }

    // Función para cerrar el modal sin actualizar la página
    function btnCerrarModal() {
    cerrarModal();
    }

    // Muestra el modal al cargar la página, si es necesario
    window.onload = function() {
    const params = new URLSearchParams(window.location.search);
    if (!params.has('registered') || params.get('registered') !== 'true') {
        document.getElementById('modal').showModal();
    }
    };