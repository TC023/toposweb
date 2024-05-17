// Variables para controlar los pasos
let currentStep = 1;
const totalSteps = 4;

// Función para cambiar al siguiente paso
function nextStep() {
  // Ocultar el paso actual
  const currentStepDiv = document.getElementById('step-' + currentStep);
  currentStepDiv.style.display = 'none';

  // Incrementar el paso actual
  currentStep++;

  // Mostrar el siguiente paso
  const nextStepDiv = document.getElementById('step-' + currentStep);
  nextStepDiv.style.display = 'block';

  // Actualizar la barra de pasos
  updateStepsBar(currentStep);
}

// Función para actualizar la barra de pasos
function updateStepsBar(step) {
  for (let i = 1; i <= totalSteps; i++) {
    const stepCircle = document.getElementById('step-circle-' + i);
    if (i < step) {
      stepCircle.classList.add('completed');
    } else if (i === step) {
      stepCircle.classList.add('current');
    } else {
      stepCircle.classList.remove('completed', 'current');
    }
  }
}

// Evento para el botón 'Seleccionar'
document.getElementById('select-button').addEventListener('click', nextStep);

// Inicializar la barra de pasos
updateStepsBar(currentStep);
