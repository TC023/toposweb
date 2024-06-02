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
    function deleteBooking() {
      const id = {id: currentSlotId};
  fetch('deleteBooking.php', { // Change the URL to your new PHP script
    method: 'POST',
    headers: {
      'Content-Type': 'application/json', // Set the content type to application/json
    },
    body: JSON.stringify(id), // Send the ID as JSON data
  })
  .then(response => response.json()) // Parse the JSON response
  .catch(error => console.error('Error fetching data:', error));
    }

// Asegúrate de que esta función se llame cuando se haga clic en el botón "Seleccionar"
document.getElementById('ver-button').addEventListener('click', toggleAdminDisplay);
// Asegúrate de que esta función se llame cuando se haga clic en el botón "atras"
document.getElementById('atras-button').addEventListener('click', prevAdminCalendar);
// Asegúrate de que esta función se llame cuando se haga clic en el botón "danger"
document.getElementById('danger').addEventListener('click', deleteBooking);