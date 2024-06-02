let currentSlotId;
function sendId(id_reserva) {
  const id = {id: id_reserva};
  fetch('fetch_data.php', { // Change the URL to your new PHP script
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded', // Change the content type
    },
    body: `id=${id_reserva}`, // Send the ID as form data
  })
  .then(response => response.json()) // Parse the JSON response
  .then(data => {
    console.log(data)
    // Now that you have your data, find the DOM element you want to update
    const adminLeft = document.querySelector('.adminizquierda');

    // Update the DOM element with the new data
    if (data) {
      adminLeft.innerHTML = `<p><b>Nombre:</b> ${data.nombre}<br><b>Teléfono:</b> ${data.num}<br><b>Correo:</b> ${data.correo}</p>`;
    } else {
      adminLeft.innerHTML = '<p>No data found.</p>';
    }
    const adminButtons = document.querySelector('.adminContainer-botones')
    adminButtons.innerHTML = `<div class="confirmar"></div><div class="eliminar"></div> `
    const adminDelete = document.querySelector('.eliminar')
    adminDelete.innerHTML = `<a id="danger"href="deleteBooking.php?id=${id_reserva}">Eliminar</a> `
    const adminConfirm = document.querySelector('.confirmar')
    adminConfirm.innerHTML = `<a id="payconfirm"href="confirmBooking.php?id=${id_reserva}">Confirmar</a> `
  })
  .catch(error => console.error('Error fetching data:', error));
}
function sendredId(id_reserva) {
  const id = {id: id_reserva};
  fetch('fetch_data.php', { // Change the URL to your new PHP script
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded', // Change the content type
    },
    body: `id=${id_reserva}`, // Send the ID as form data
  })
  .then(response => response.json()) // Parse the JSON response
  .then(data => {
    console.log(data)
    // Now that you have your data, find the DOM element you want to update
    const adminLeft = document.querySelector('.adminizquierda');

    // Update the DOM element with the new data
    if (data) {
      adminLeft.innerHTML = `<p><b>Nombre:</b> ${data.nombre}<br><b>Teléfono:</b> ${data.num}<br><b>Correo:</b> ${data.correo}</p>`;
    } else {
      adminLeft.innerHTML = '<p>No data found.</p>';
    }
    const adminButtons = document.querySelector('.adminContainer-botones')
    adminButtons.innerHTML = `<div class="eliminar"> <a id="danger"href="deleteBooking.php?id=${id_reserva}">Eliminar</a> </div> `
  })
  .catch(error => console.error('Error fetching data:', error));
}

  // Initialize an array to store selected hours
  let selectedHours = [];
        const timeSlots = document.querySelectorAll('#time-slots li');
        var messageElement = document.getElementById('slot_message'); // Get the message element
        var messageDiv = document.querySelector('.slot-div');
        var verDiv = document.querySelector('.verrev');
        var selectedSlot = null;
        timeSlots.forEach(slot => {
          slot.addEventListener('click', function() {
            // Check if the slot is already colored (has a reservation state)
            const isOrange = slot.style.backgroundColor === 'rgb(255, 151, 105)'; // Orange color in RGB
            const isOrangeSelected = slot.style.backgroundColor === 'rgb(191, 101, 62)'; // Darker orange color in RGB
            const isRed = slot.style.backgroundColor === 'rgb(253, 96, 96)'; // Red color in RGB
            const isRedSelected = slot.style.backgroundColor === 'rgb(142, 48, 48)'; // Darker red color in RGB
      
            // Display the message based on the slot's state
            if (isOrange) {
                // Avoid having multiple slots selected
                if (selectedSlot) {
                    selectedSlot.classList.remove('look');
                    messageDiv.classList.add('ovisible');
                    if (selectedSlot.style.backgroundColor === 'rgb(191, 101, 62)') { // If the already selected slot is orange (pending)
                        selectedSlot.style.backgroundColor = 'rgb(255, 151, 105)'; // Set back to the default orange color
                    }
                    else if (selectedSlot.style.backgroundColor === 'rgb(142, 48, 48)') {
                        selectedSlot.style.backgroundColor = 'rgb(253, 96, 96)'; // Set back to the default red color
                    }
                }
                messageDiv.classList.add('ovisible');
                verDiv.style.display = 'block';
              // Remove 'visible' class and add it back to restart the animation
              verDiv.classList.remove('ovisible');
              verDiv.classList.remove('visible');
            // Force reflow/repaint for the animation to restart
            void verDiv.offsetWidth;
            verDiv.classList.add('visible');
            
            // Toggle the 'look' class and change the background color accordingly
            slot.classList.add('look');
            slot.style.backgroundColor = 'rgb(191, 101, 62)'; // Set to darker orange when selected
            selectedSlot = slot; // Update the currently selected slot
            currentSlotId = parseInt(slot.id)
            sendId(parseInt(slot.id))
            } else if (isOrangeSelected) { // Based on color, it deletes the "look" class if a selected orange is clicked
                if (slot.classList.contains('look')) {
                    messageDiv.classList.add('ovisible');
                    verDiv.classList.add('ovisible');
                    slot.classList.remove('look');
                    slot.style.backgroundColor = 'rgb(255, 151, 105)'; // Set back to the default orange color
                    selectedSlot = null; // No slot is currently selected
                  }
            } else if (isRed) {
              // Avoid having multiple slots selected
              if (selectedSlot) {
                messageDiv.classList.add('ovisible');
                selectedSlot.classList.remove('look');
                if (selectedSlot.style.backgroundColor === 'rgb(191, 101, 62)') { // If the already selected slot is orange (pending)
                    selectedSlot.style.backgroundColor = 'rgb(255, 151, 105)'; // Set back to the default orange color
                }
                else if (selectedSlot.style.backgroundColor === 'rgb(142, 48, 48)') {
                    slot.style.backgroundColor = 'rgb(253, 96, 96)'; // Set back to the default red color
                }
            }
            messageDiv.classList.add('ovisible');
            verDiv.style.display = 'block';
                // Remove 'visible' class and add it back to restart the animation
                verDiv.classList.remove('ovisible');
                verDiv.classList.remove('visible');
                // Force reflow/repaint for the animation to restart
                void verDiv.offsetWidth;
                verDiv.classList.add('visible');
        
                // Toggle the 'look' class and change the background color accordingly
                slot.classList.add('look');
                slot.style.backgroundColor = 'rgb(142, 48, 48)'; // Set to darker red when selected
                selectedSlot = slot; // Update the currently selected slot
                currentSlotId = parseInt(slot.id)
                sendredId(parseInt(slot.id))
            } else if (isRedSelected) { // Based on color, it deletes the "look" class if a selected red is clicked
                if (slot.classList.contains('look')) {
                    messageDiv.classList.add('ovisible');
                    verDiv.classList.add('ovisible');
                    slot.classList.remove('look');
                    slot.style.backgroundColor = 'rgb(253, 96, 96)'; // Set back to the default red color
                    selectedSlot = null; // No slot is currently selected
                  }
            } else {
              // Toggle the 'selected' class and change the background color accordingly
              if (slot.classList.contains('selected')) {
                messageDiv.classList.add('ovisible');
                verDiv.classList.add('ovisible');
                slot.classList.remove('selected');
                slot.style.backgroundColor = ''; // Set back to the default color
                if (selectedSlot) {
                    selectedSlot.classList.remove('look');
                    if (selectedSlot.style.backgroundColor === 'rgb(191, 101, 62)') { // If the already selected slot is orange (pending)
                        selectedSlot.style.backgroundColor = 'rgb(255, 151, 105)'; // Set back to the default orange color
                    }
                    else if (selectedSlot.style.backgroundColor === 'rgb(142, 48, 48)') {
                        selectedSlot.style.backgroundColor = 'rgb(253, 96, 96)'; // Set back to the default red color
                    }
                }
              } else {
                messageDiv.classList.add('ovisible');
                verDiv.classList.add('ovisible');
                slot.classList.add('selected');
                slot.style.backgroundColor = '#5fc175'; // Set to green when selected
                if (selectedSlot) {
                    selectedSlot.classList.remove('look');
                    if (selectedSlot.style.backgroundColor === 'rgb(191, 101, 62)') { // If the already selected slot is orange (pending)
                        selectedSlot.style.backgroundColor = 'rgb(255, 151, 105)'; // Set back to the default orange color
                    }
                    else if (selectedSlot.style.backgroundColor === 'rgb(142, 48, 48)') {
                        selectedSlot.style.backgroundColor = 'rgb(253, 96, 96)'; // Set back to the default red color
                    }
                }
              }
            }
            collectSelectedHours();});
        });
	
// Update the hours section
const hoursSection = document.getElementById('hoursSelected');
    
// Function to collect selected hours
function collectSelectedHours() {
  const selectedSlots = document.querySelectorAll('#time-slots li.selected');
  selectedHours.length = 0; // Clear the array
  selectedSlots.forEach(slot => {
    selectedHours.push(slot.textContent);
  });
  hoursSection.innerHTML = `${selectedHours.join(', ')}`;
}
// Asegúrate de que esta función se llame cuando se haga clic en el botón "Siguiente" (button-step3)
document.getElementById('next-button').addEventListener('click', collectSelectedHours);