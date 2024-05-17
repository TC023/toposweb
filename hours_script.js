document.addEventListener('DOMContentLoaded', function() {
    const timeSlots = document.querySelectorAll('#time-slots li');
    const messageElement = document.getElementById('slot_message'); // Get the message element
  
    timeSlots.forEach(slot => {
      slot.addEventListener('click', function() {
        // Check if the slot is already colored (has a reservation state)
        const isOrange = slot.style.backgroundColor === 'rgb(255, 151, 105)'; // Orange color in RGB
        const isRed = slot.style.backgroundColor === 'rgb(253, 96, 96)'; // Red color in RGB
  
        // Display the message based on the slot's state
        if (isOrange) {
          messageElement.textContent = 'Hora pendiente de revisión, tal vez se libere en otro momento';
        } else if (isRed) {
          messageElement.textContent = 'Hora ocupada';
        } else {
          messageElement.textContent = ''; // Clear the message for selectable hours
          // Toggle the 'selected' class and change the background color accordingly
          if (slot.classList.contains('selected')) {
            slot.classList.remove('selected');
            slot.style.backgroundColor = ''; // Set back to the default color
          } else {
            slot.classList.add('selected');
            slot.style.backgroundColor = '#5fc175'; // Set to green when selected
          }
        }
      });
    });
  });