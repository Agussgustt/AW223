document.addEventListener('DOMContentLoaded', () => {
//boton de bienvenida
const mensaje = document.getElementById('mensaje-bienvenida');
const boton = document.getElementById('cambiar-bienvenida');

if (boton && mensaje) {
    boton.addEventListener('click', () => {
        mensaje.textContent = 'Saludos y Bienvenido';
    });
} 

//botones de habilidades
const btnColor = document.getElementById('color');
const btnFuente = document.getElementById('fuente');
const habilidadesItems = document.querySelectorAll('.lista-habilidades li');

if (btnColor) {
    btnColor.addEventListener('click', () => {
        habilidadesItems.forEach(item => {
            item.classList.toggle('c-color');
        });
    });
}

if (btnFuente) {
    btnFuente.addEventListener('click', () => {
        habilidadesItems.forEach(item => {
            item.classList.toggle('m-fuente');
        });
    });
}

const formulario = document.getElementById('contacto-formulario');
const inputNombre = document.getElementById('nombre');
const inputEmail = document.getElementById('email');

const errorNombre = document.getElementById('error-nombre');
const errorEmail = document.getElementById('error-email');
const mensajeExito = document.getElementById('mensaje-exito');

if (formulario) {
formulario.addEventListener('submit', (event) =>{
    event.preventDefault();

    errorNombre.textContent = '';
    errorEmail.textContent = '';
    mensajeExito.style.display = 'none';
    mensajeExito.textContent = '';
    inputNombre.classList.remove('input-error');
    inputEmail.classList.remove('input-error');

    let esValido = true

    if (inputNombre.value.trim() === '') {
        errorNombre.textContent = 'Por favor, escribe tu nombre';
        inputNombre.classList.add('input-error');
        esValido = false;
    }

    if (inputEmail.value.trim() === '') {
        errorEmail.textContent = 'El correo es obligatorio';
        inputEmail.classList.add('input-error');
        esValido = false;
    }

    if (esValido) {
        mensajeExito.textContent = 'Formulario enviado correctamente';
        mensajeExito.style.display = 'block';
        formulario.reset();
    }    

 });

}

});