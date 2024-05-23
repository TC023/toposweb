const steps = document.querySelectorAll('.step');
const stepsCircle = document.querySelectorAll('.step-circle');
let currentStep = 0;

function updateProgressCircles() {
  stepsCircle.forEach((step, index) => {
    if (index < currentStep) {
      step.style.backgroundColor = '#2196F3';
    } else {
      step.style.backgroundColor = '#ddd';
    }
  });
}
function updateProgress() {
  steps.forEach((step, index) => {
    if (index < currentStep) {
      step.style.backgroundColor = '#2196F3';
    } else {
      step.style.backgroundColor = '#ddd';
    }
  });
}
function nextStep() {
  if (currentStep < steps.length) {
    currentStep++;
    updateProgress();
    updateProgressCircles();
  }
}

// Función para ocultar la sección del calendario y mostrar el formulario de reserva
function toggleFormDisplay() {
  if (selectedHours[0] != null) {
    nextStep();
    // Ocultar la sección del calendario
    var calendarSection = document.querySelector('.calendarcontainer');
    if (calendarSection) {
      calendarSection.style.display = 'none';
    }

    // Mostrar el formulario de reserva
    var formContainer = document.querySelector('.form-section');
    if (formContainer) {
      formContainer.style.display = 'flex';
      formContainer.classList.add('visible');
    }
  }
  else if (selectedHours.length === 0){
    var messageElement = document.getElementById('slot_message'); // Get the message element
    const messageDiv = document.querySelector('.slot-div');
    // Remove 'visible' class and add it back to restart the animation
    messageDiv.classList.remove('ovisible');
    messageDiv.classList.remove('visible');
    // Force reflow/repaint for the animation to restart
    void messageDiv.offsetWidth;
    messageDiv.classList.add('visible');
    messageElement.textContent = 'No hay horas seleccionadas.';
  }
  }

  // Función para ocultar la sección del form y mostrar la ventana de confirmación
function toggleStep3Display() {
  // Ocultar la sección del form
  var formSection = document.querySelector('.form-section');
  if (formSection) {
    formSection.style.display = 'none';
  }

  // Mostrar la ventana de confirmación
  var step3 = document.querySelector('.contenedor-step3');
  if (step3) {
    step3.style.display = 'block';
    step3.classList.add('visible');
  }
}

  // Función para ocultar la sección de confirmación y mostrar la ventana de okei
  function toggleStep4Display() {
    // Ocultar la sección de confirmación
    var step3 = document.querySelector('.contenedor-step3');
    if (step3) {
      step3.style.display = 'none';
    }
  
    // Mostrar la sección de okei (la neta no sé cómo llamarle xd)
    var step4 = document.querySelector('.contenedor-step4');
    if (step4) {
      step4.style.display = 'block';
      step4.classList.add('visible');
    }
  }

  // Function to reload the page or navigate to the base page
function reloadPage() {
  // You can choose either of the following options:
  
  // Option 1: Reload the entire page
  window.location.reload();
  
  // Option 2: Navigate to the base page (replace 'base.html' with your actual base page URL)
  // window.location.href = 'main.html';
}

  // Función para ocultar la sección de confirmación y mostrar la ventana del forms
  function backtoggleStep3Display() {
    // Ocultar la ventana de confirmación
    var step3 = document.querySelector('.contenedor-step3');
    if (step3) {
      step3.style.display = 'none';
    }
  
    // Mostrar la sección del form
    var formSection = document.querySelector('.form-section');
    if (formSection) {
      formSection.style.display = 'block';
      formSection.classList.add('visible');
    }
  }
// Función para ocultar la sección del form y mostrar el calendario
function backtoggleFormDisplay() {
  // Ocultar el formulario de reserva
  var formContainer = document.querySelector('.form-section');
  if (formContainer) {
    formContainer.style.display = 'none';
    formContainer.classList.remove('visible');
  }

   // Mostrar la sección del calendario
   var calendarSection = document.querySelector('.calendarcontainer');
  if (calendarSection) {
    calendarSection.style.display = 'flex';
    calendarSection.classList.add('visible');
  }
}
  function prevStep() {
    if (currentStep < steps.length) {
      if (currentStep == 1) {
        currentStep--;
      updateProgress();
      updateProgressCircles();
        backtoggleFormDisplay();
      } else if (currentStep == 2) {
        currentStep--;
      updateProgress();
      updateProgressCircles();
        backtoggleStep3Display();
      }

    }
  }

  // Asegúrate de que esta función se llame cuando se haga clic en el botón "Seleccionar"
document.getElementById('select-button').addEventListener('click', toggleFormDisplay);
  // Asegúrate de que esta función se llame cuando se haga clic en el botón "Siguiente"
  document.getElementById('next-button').addEventListener('click', toggleStep3Display);
  // Asegúrate de que esta función se llame cuando se haga clic en el botón "Siguiente"
  document.getElementById('next-button').addEventListener('click', nextStep);
  // Asegúrate de que esta función se llame cuando se haga clic en el botón "Confirmar"
  document.getElementById('button-step3').addEventListener('click', toggleStep4Display);
  // Asegúrate de que esta función se llame cuando se haga clic en el botón "Confirmar"
  document.getElementById('button-step3').addEventListener('click', nextStep);
  // Asegúrate de que esta función se llame cuando se haga clic en el botón "Listo" (button-step4)
document.getElementById('boton-step4').addEventListener('click', reloadPage);

  updateProgress();

// Asegúrate de que esta función se llame cuando se haga clic en el botón "Seleccionar"
document.getElementById('back-button').addEventListener('click', prevStep);
document.getElementById('back2-button').addEventListener('click', prevStep);