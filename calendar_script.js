// script.js
const calendar = document.querySelector('.calendar2');
const prevBtn = document.createElement('button');
prevBtn.textContent = 'Prev';
const nextBtn = document.createElement('button');
nextBtn.textContent = 'Next';
let selectedDate = null;


let currentYear;
let currentMonth;

function sendInfo(dia, mes, diaSemana){

  let diaToStr = {
    0: 'Domingo',
    1: 'Lunes',
    2: 'Martes',
    3: 'Miércoles',
    4: 'Jueves',
    5: 'Viernes',
    6: 'Sábado',
  };

  let mesToStr = {
    0: 'Enero',
    1: 'Febrero',
    2: 'Marzo',
    3: 'Abril',
    4: 'Mayo',
    5: 'Junio',
    6: 'Julio',
    7: 'Agosto',
    8: 'Septiembre',
    9: 'Octubre',
    10: 'Noviembre',
    11: 'Diciembre'
};

  const horas = document.querySelector('.time-slots-section');
  const title = document.getElementById('diaselect');
  // Create a date string for comparison
  const dateString = `${dia}-${mes}-${currentYear}`;
  // Check if the selected date is the same as the previously selected date
  // Check if the selected date is the same as the previously selected date
  if (selectedDate === dateString) {
    // If the same date is clicked, toggle the visibility class and clear the selected date
    horas.classList.toggle('ovisible');
    title.innerHTML = horas.classList.contains('visible') ? "Horarios para el:<br>" + diaToStr[diaSemana] + " " + dia + " de " + mesToStr[mes] : "Horarios para el:";
    selectedDate = horas.classList.contains('visible') ? dateString : null;
  } else {
    // If a different date is clicked, show the hours and update the selected date
    horas.classList.remove('ovisible');
    horas.classList.add('visible');
    title.innerHTML = "Horarios para el:<br>" + diaToStr[diaSemana] + " " + dia + " de " + mesToStr[mes];
    selectedDate = dateString;
  }
}


const ayuda = document.createElement('div');
ayuda.classList.add('calendar');
const dayHeaders = ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'];
dayHeaders.forEach(day => {
  const dayHeader = document.createElement('div');
  dayHeader.classList.add('day-header');
  dayHeader.textContent = day;
  ayuda.appendChild(dayHeader);
});

function createCalendar(year, month) {
  currentYear = year;
  currentMonth = month;
  const firstDay = new Date(year, month, 1);
  const lastDay = new Date(year, month + 1, 0);
  const daysInMonth = lastDay.getDate();

  // Clear previous calendar
  calendar.innerHTML = '';

  const controles = document.createElement('table');
  const renglonChido = document.createElement('tr');
  const elem1 = document.createElement('td');
  const elem2 = document.createElement('td');
  const elem3 = document.createElement('td');
  
  const header = document.createElement('h2');
  header.textContent = `${firstDay.toLocaleString('es', { month: 'long' })} ${year}`;
  
  
  elem1.appendChild(prevBtn)
  elem2.appendChild(header);
  elem3.appendChild(nextBtn);
  renglonChido.appendChild(elem1);
  renglonChido.appendChild(elem2);
  renglonChido.appendChild(elem3);
  controles.appendChild(renglonChido);
  calendar.appendChild(controles);

  
  calendar.appendChild(ayuda);


  // Create table
  const table = document.createElement('table');
  const tbody = document.createElement('tbody');
  calendar.appendChild(table);
  table.appendChild(tbody);

  // Create days
  let date = 1;
  for (let i = 0; i < 6; i++) {
    const row = document.createElement('tr');
    for (let j = 0; j < 7; j++) {
      const cell = document.createElement('td');
      if (i === 0 && j < firstDay.getDay()) {
        // Empty cells before first day
        const emptyCell = document.createElement('div');
        cell.appendChild(emptyCell);
    } else if (date > daysInMonth) {
        // No more days in the month
        break;
    } else {
      cell.className = "day";
      cell.textContent = date;
      // Use an IIFE to correctly bind the current date value
      (function(currentDate, currentMonth, currentDayOfWeek) {
        cell.addEventListener('click', function() {
          sendInfo(currentDate, currentMonth, currentDayOfWeek);
        });
      })(date, currentMonth, j);
      date++;
      }
      row.appendChild(cell);
    }
    tbody.appendChild(row);
  }
}

const today = new Date();
createCalendar(today.getFullYear(), today.getMonth());

// Event listeners for navigation buttons
prevBtn.addEventListener('click', () => {
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  createCalendar(currentYear, currentMonth);
});

nextBtn.addEventListener('click', () => {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  createCalendar(currentYear, currentMonth);
});
