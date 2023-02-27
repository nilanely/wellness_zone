document.addEventListener("DOMContentLoaded", () => {
    const formularioContacto = document.getElementById('formulario-contacto');
    if (formularioContacto) {
        formularioContacto.addEventListener('submit', (e) => {
            e.preventDefault();
            const contactoNombre = document.getElementById('contacto-nombre');
            const contactoEmail = document.getElementById('contacto-email');
            const contactoMensaje = document.getElementById('contacto-mensaje');
            contactoNombre.value = ''
            contactoEmail.value = ''
            contactoMensaje.value = ''
            alert('!Gracias¡ el formulario ha sido enviado');
        })

    }

    const formularioInscripcion = document.getElementById('form-inscripcion');
    if (formularioInscripcion) {
        formularioInscripcion.addEventListener('submit', (e) => {
            e.preventDefault();
            const inscripcionNombre = document.getElementById('inscripcion-nombre');
            const inscripcionApellido = document.getElementById('inscripcion-apellido');
            const inscripcionTelefono = document.getElementById('inscripcion-telefono');
            const inscripcionEmail = document.getElementById('inscripcion-email');
            const inscripcionActividad = document.getElementById('inscripcion-actividad');
            inscripcionNombre.value = ''
            inscripcionApellido.value = ''
            inscripcionTelefono.value = ''
            inscripcionEmail.value = ''
            inscripcionActividad.options[0].selected = 'selected'
            alert('Su inscripcion ha sido completada');
        })

    }

})