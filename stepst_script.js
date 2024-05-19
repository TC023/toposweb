// Función para ocultar la sección del calendario y mostrar el formulario de reserva
function toggleFormDisplay() {
    // Ocultar la sección del calendario
    var calendarSection = document.querySelector('.calendarcontainer');
    if (calendarSection) {
      calendarSection.style.display = 'none';
    }

    // Mostrar el formulario de reserva
    var formContainer = document.querySelector('.form-container');
    if (formContainer) {
      formContainer.style.display = 'flex';
      formContainer.classList.add('visible');
    }
  }
  // Asegúrate de que esta función se llame cuando se haga clic en el botón "Seleccionar"
document.getElementById('select-button').addEventListener('click', toggleFormDisplay);