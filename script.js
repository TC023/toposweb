// script.js
const calendar = document.querySelector('.calendar2');
const prevBtn = document.createElement('button');
prevBtn.textContent = 'Prev';
const nextBtn = document.createElement('button');
nextBtn.textContent = 'Next';



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
  horas.style.display = "block";
  const title = document.getElementById('diaselect');
  title.innerHTML = "HORARIOS PARA EL:<br>" + diaToStr[diaSemana] + " " + dia + " de " + mesToStr[mes];
    // Horarios disponibles VIERNES 1 de ABRIL

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
        cell.className = "day"
        cell.textContent = date;
        cell.setAttribute('id', 'feo'+date)
        cell.setAttribute('onclick', "sendInfo(" + date + ", " + currentMonth + ", " + j + ")");
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
