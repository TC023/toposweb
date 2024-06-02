// Función para ocultar la sección del calendario y mostrar el formulario de reserva
function toggleAdminDisplay() {
      // Ocultar la sección del calendario
      var calendarSection = document.querySelector('.calendarcontainer');
      if (calendarSection) {
        calendarSection.style.display = 'none';
      }
  
      // Mostrar el panel de admin
      var adminContainer = document.querySelector('.adminContainer');
      if (adminContainer) {
        adminContainer.style.display = 'block';
        adminContainer.classList.add('visible');
      }
    }

    function prevAdminCalendar() {
      // Ocultar el formulario de reserva
      var adminContainer = document.querySelector('.adminContainer');
      if (adminContainer) {
        adminContainer.style.display = 'none';
        adminContainer.classList.remove('visible');
      }
    
       // Mostrar la sección del calendario
       var calendarSection = document.querySelector('.calendarcontainer');
      if (calendarSection) {
        calendarSection.style.display = 'flex';
        calendarSection.classList.add('visible');
      }
    }

// Asegúrate de que esta función se llame cuando se haga clic en el botón "Seleccionar"
document.getElementById('ver-button').addEventListener('click', toggleAdminDisplay);
// Asegúrate de que esta función se llame cuando se haga clic en el botón "atras"
document.getElementById('atras-button').addEventListener('click', prevAdminCalendar);