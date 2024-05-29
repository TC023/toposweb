  // Initialize an array to store selected hours
  let selectedHours = [];
      document.addEventListener('DOMContentLoaded', function() {
        const timeSlots = document.querySelectorAll('#time-slots li');
        var messageElement = document.getElementById('ver-button'); // Get the message element
        var messageDiv = document.querySelector('.verrev');
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
                    if (selectedSlot.style.backgroundColor === 'rgb(191, 101, 62)') { // If the already selected slot is orange (pending)
                        selectedSlot.style.backgroundColor = 'rgb(255, 151, 105)'; // Set back to the default orange color
                    }
                    else if (selectedSlot.style.backgroundColor === 'rgb(142, 48, 48)') {
                        selectedSlot.style.backgroundColor = 'rgb(253, 96, 96)'; // Set back to the default red color
                    }
                }
              messageDiv.style.display = 'block';
              // Remove 'visible' class and add it back to restart the animation
              messageDiv.classList.remove('ovisible');
            messageDiv.classList.remove('visible');
            // Force reflow/repaint for the animation to restart
            void messageDiv.offsetWidth;
            messageDiv.classList.add('visible');
            
            // Toggle the 'look' class and change the background color accordingly
            slot.classList.add('look');
            slot.style.backgroundColor = 'rgb(191, 101, 62)'; // Set to darker orange when selected
            selectedSlot = slot; // Update the currently selected slot

            } else if (isOrangeSelected) { // Based on color, it deletes the "look" class if a selected orange is clicked
                if (slot.classList.contains('look')) {
                    messageDiv.classList.add('ovisible');
                    slot.classList.remove('look');
                    slot.style.backgroundColor = 'rgb(255, 151, 105)'; // Set back to the default orange color
                    selectedSlot = null; // No slot is currently selected
                  }
            } else if (isRed) {
              // Avoid having multiple slots selected
              if (selectedSlot) {
                selectedSlot.classList.remove('look');
                if (selectedSlot.style.backgroundColor === 'rgb(191, 101, 62)') { // If the already selected slot is orange (pending)
                    selectedSlot.style.backgroundColor = 'rgb(255, 151, 105)'; // Set back to the default orange color
                }
                else if (selectedSlot.style.backgroundColor === 'rgb(142, 48, 48)') {
                    slot.style.backgroundColor = 'rgb(253, 96, 96)'; // Set back to the default red color
                }
            }
                messageDiv.style.display = 'block';
                // Remove 'visible' class and add it back to restart the animation
                messageDiv.classList.remove('ovisible');
                messageDiv.classList.remove('visible');
                // Force reflow/repaint for the animation to restart
                void messageDiv.offsetWidth;
                messageDiv.classList.add('visible');
        
                // Toggle the 'look' class and change the background color accordingly
                slot.classList.add('look');
                slot.style.backgroundColor = 'rgb(142, 48, 48)'; // Set to darker red when selected
                selectedSlot = slot; // Update the currently selected slot
    
            } else if (isRedSelected) { // Based on color, it deletes the "look" class if a selected red is clicked
                if (slot.classList.contains('look')) {
                    messageDiv.classList.add('ovisible');
                    slot.classList.remove('look');
                    slot.style.backgroundColor = 'rgb(253, 96, 96)'; // Set back to the default red color
                    selectedSlot = null; // No slot is currently selected
                  }
            } else {
              // Toggle the 'selected' class and change the background color accordingly
              if (slot.classList.contains('selected')) {
                messageDiv.classList.add('ovisible');
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