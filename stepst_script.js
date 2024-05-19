const steps = document.querySelectorAll('.step');
const stepsCircle = document.querySelectorAll('.step-circle');
let currentStep = 0;

function updateProgressCircles() {
  stepsCircle.forEach((step, index) => {
    if (index < currentStep) {
      step.style.backgroundColor = '#2196F3';
    } else if (index == currentStep) {
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

  // Función para ocultar la sección del form y mostrar la ventana de confirmación
function toggleStep3Display() {
  // Ocultar la sección del calendario
  var formSection = document.querySelector('.form-section');
  if (formSection) {
    formSection.style.display = 'none';
  }

  // Mostrar el formulario de reserva
  var step3 = document.querySelector('.contenedor-step3');
  if (step3) {
    step3.style.display = 'block';
    step3.classList.add('visible');
  }
}

  // Función para ocultar la sección de confirmación y mostrar la ventana de okei
  function toggleStep4Display() {
    // Ocultar la sección del form
    var step3 = document.querySelector('.contenedor-step3');
    if (step3) {
      step3.style.display = 'none';
    }
  
    // Mostrar la sección de confirmación
    var step4 = document.querySelector('.contenedor-step4');
    if (step4) {
      step4.style.display = 'block';
      step4.classList.add('visible');
    }
  }

  // Asegúrate de que esta función se llame cuando se haga clic en el botón "Seleccionar"
document.getElementById('select-button').addEventListener('click', toggleFormDisplay);
  // Asegúrate de que esta función se llame cuando se haga clic en el botón "Seleccionar"
  document.getElementById('select-button').addEventListener('click', nextStep);
  // Asegúrate de que esta función se llame cuando se haga clic en el botón "Seleccionar"
  document.getElementById('next-button').addEventListener('click', toggleStep3Display);
  // Asegúrate de que esta función se llame cuando se haga clic en el botón "Seleccionar"
  document.getElementById('next-button').addEventListener('click', nextStep);
  // Asegúrate de que esta función se llame cuando se haga clic en el botón "Seleccionar"
  document.getElementById('button-step3').addEventListener('click', toggleStep4Display);
  // Asegúrate de que esta función se llame cuando se haga clic en el botón "Seleccionar"
  document.getElementById('button-step3').addEventListener('click', nextStep);
  
  updateProgress();