// Fetch reservations from the server and store them
let bookedHours = [];
let bookedTimestamps = [];

function getBookedHours() {
  bookedHours.length = 0; // Clear the array
  bookedTimestamps.forEach(book => {
    const reservationDate = new Date(book);
    const reservationHour = reservationDate.getHours().toString().padStart(2, '0');
    const reservationMinutes = reservationDate.getMinutes().toString().padStart(2, '0');
    const reservationTime = reservationHour + ':' + reservationMinutes;
    bookedHours.push(reservationTime);
  });
}
function sendHours(id_reserva) {
  const id = {id: id_reserva};
  fetch('fetchHours.php', { // Change the URL to your new PHP script
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded', // Change the content type
    },
    body: `id=${id_reserva}`, // Send the ID as form data
  })
  .then(response => response.json()) // Parse the JSON response
  .then(booked => {
    bookedTimestamps = booked.hoursdate;
    console.log(booked)
    getBookedHours();
    // Now that you have your data, find the DOM element you want to update
    const bookedHoursP = document.getElementById('savedHours');
    // Update the DOM element with the new data
    if (booked) {
      bookedHoursP.innerHTML = `${bookedHours.join(', ')}`;
    } else {
      bookedHoursP.innerHTML = '<p>No data found.</p>';
    }
  })
  .catch(error => console.error('Error fetching data:', error));
}
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

// Initially fetch the reservations
// fetchBookedHours();
// Asegúrate de que esta función se llame cuando se haga clic en el botón "Seleccionar"
document.getElementById('ver-button').addEventListener('click', toggleAdminDisplay);
// Asegúrate de que esta función se llame cuando se haga clic en el botón "atras"
document.getElementById('atras-button').addEventListener('click', prevAdminCalendar);
// sendHours(currentSlotId);