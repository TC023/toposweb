function getTimestamps() {
    return selectedHours.map(hour => `${fullDateString} ${hour}:00`);
  }
  
// Function to collect user inputs and update the confirmation section
function collectUserData() {
    // Get the user input values from the form fields
    var userName = document.getElementById('name').value;
    var userPhone = document.getElementById('phone').value;
    var userEmail = document.getElementById('email').value;
  
    // Update the confirmation section with the user input values
    var confirmationSection = document.querySelector('.contenedor-step3 .izquierda-step3');
    confirmationSection.innerHTML = `
      <p><b>Nombre:</b> ${userName}<br>
      <b>Teléfono:</b> ${userPhone}<br>
      <b>Correo:</b> ${userEmail}
      </p>
    `;
  }

document.getElementById('button-step3').addEventListener('click', function() {
    // Collect the form data
    var formData = new FormData(document.getElementById('reservation-form'));

    // Get the timestamps for the selected hours
  var timestamps = getTimestamps();

  // Append each timestamp to the form data
  timestamps.forEach((timestamp, index) => {
    formData.append(`timestamp[${index}]`, timestamp);
  });
  
    // Send the form data to the PHP script using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'booking.php', true);
    xhr.onload = function () {
      if (xhr.status === 200) {
        // Handle success - maybe redirect to a new page or display a success message
        console.log('Data submitted successfully');
      } else {
        // Handle error
        console.error('An error occurred while submitting the form');
      }
    };
    xhr.send(formData);
  });
  
  // Add an event listener to the button that triggers the data collection
document.getElementById('next-button').addEventListener('click', collectUserData);