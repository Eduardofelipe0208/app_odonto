document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
});

function iniciarApp() {
    mostrarSeccion(); // Cambia secciones (tabs)
    tabs(); // Cambia el paso actual
    consultarAPI(); // Carga servicios desde MySQL vía PHP
    nombreCliente();
    seleccionarFecha();
    seleccionarHora();
    reservarCita(); // Envía los datos al servidor mediante Fetch API (POST)
}

async function reservarCita() {
const nombre = document.querySelector('#name').value;
    const fecha = document.querySelector('#date').value;
    const hora = document.querySelector('#time').value;
    const usuarioId = document.querySelector('#id').value;
    const servicios = [document.querySelector('#service').value]; // Ejemplo simple

    const datos = new FormData();
    datos.append('fecha', fecha);
    datos.append('hora', hora);
    datos.append('usuarioId', usuarioId);
    datos.append('servicios', servicios);

    try {
        // Petición a tu Controlador en PHP
        const url = '/api/citas';
        const respuesta = await fetch(url, {
            method: 'POST',
            body: datos
        });
        const resultado = await respuesta.json();
        
        if(resultado.resultado) {
            Swal.fire({
                icon: 'success',
                title: 'Cita Creada',
                text: 'Tu cita fue reservada correctamente',
                button: 'OK'
            }).then(() => {
                window.location.reload();
            });
        }
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Hubo un error al guardar la cita'
        });
    }

    // ...

    // Petición hacia la API de PHP
    const url = '/api/citas';
    const respuesta = await fetch(url, { method: 'POST', body: datos });
    const resultado = await respuesta.json();

    if(resultado.resultado) {
        Swal.fire({
            icon: 'success',
            title: 'Cita Creada',
            text: 'Tu cita fue reservada correctamente'
        });
    }
}