<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Topos FC - Página Oficial</title>
<style>
  /* Styles for the navigation and logo section */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('https://th.bing.com/th/id/OIP.qPbqurQoCAZH5xdx_R4OtQHaE7?rs=1&pid=ImgDetMain');
    background-size: cover;
    background-attachment: fixed;
    background-color: rgba(0, 0, 0, 0.7);
    background-blend-mode: overlay;
  }
  .navbar {
    display: flex;
    justify-content: space-around;
    padding: 1em;
    position: fixed;
    width: 100%;
    top: 0;
    background-color: transparent;
    z-index: 10;
  }
  .navbar a, .navbar button {
    color: white;
    text-decoration: none;
    background: none;
    border: none;
    font-size: 1em;
    cursor: pointer;
  }
  .logo {
    text-align: center;
    color: white;
    padding-top: 50px;
  }
  .background {
    background-size: cover;
    background-blend-mode: darken;
    position: relative;
    height: 100vh;
  }
  /* Styles for the field rental section with image */
  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }
  .title {
    font-size: 2em;
    color: white;
    width: 80%;
    text-align: left;
    margin-bottom: 20px;
  }
  .content {
    display: flex;
    width: 80%;
    background-color: rgba(0,0,0,0.0);
    padding: 20px;
    border-radius: 10px;
  }
  .left-column {
    flex: 1;
    padding-right: 20px;
  }
  .left-column img {
    width: 100%;
    height: auto;
    border-radius: 10px;
  }
  .right-column {
    flex: 1;
    color: white;
    padding-left: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .data-text {
    background-color: white;
    border-radius: 15px;
    padding: 20px;
    margin-top: 20px;
    width: fit-content;
    margin-left: auto;
    margin-right: auto;
  }
  .data-text ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .data-text li {
    font-size: 1em;
    line-height: 1.5;
    color: #333;
  }
  .calendarcontainer {
    justify-content: center;
    width: 70%;
    background-color: white;
    border-radius: 35px;
    display: flex;
    flex-direction: row; /* Align items horizontally */
    padding: 40px;
    align-items: flex-start; /* Align items to the top */
    margin-left: auto;
    margin-right: auto;
  }
  .contentcalendar {
    display: flex;
  }
  .calendarheader {
    flex: 1;
    margin-right: 20px; /* Add space between the title and the calendar */
  }
  .calendar-section {
    flex: 1;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }
  @keyframes slideIn {
    from {
      transform: translateX(-100%);
      opacity: 0;
    }
    to {
      transform: translateX(0);
      opacity: 1;
    }
  }
  @keyframes slideOut {
    from {
      transform: translateX(0);
      opacity: 1;
    }
    to {
      transform: translateX(-100%);
      opacity: 0;
    }
  }
  
  .time-slots-section {
    flex: 1;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-left: 20px;
    visibility: hidden;
    z-index: 0;
  }

  .visible {
    visibility: visible;
  animation: slideIn 0.5s forwards; /* Apply the animation */
}
.ovisible {
  visibility: visible;
animation: slideOut 0.5s forwards; /* Apply the animation */
}
  .calendar {
  padding: 0.4px;
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  grid-gap: 1px;
}

.day {
  padding: 20px;
  border-radius: 360px;
  background-color: gray; /* Light gray background for days */
  cursor: pointer;
  transition: background-color 0.3s;
}

.day:hover {
  background-color: #e9ecef; /* Slightly darker gray on hover */
}

.day-header {
  text-align: center;
  border-radius: 4px;
  background-color: #f8f9fa; /* Light gray background for day headers */
  color: black;
  font-weight: 400;
  font-size: 15px;
  padding-bottom: 5px;
}

.empty-day {
  background-color: transparent;
}

ul#time-slots {
  list-style-type: none;
  padding: 0;
}

ul#time-slots li {
  background-color: #f8f9fa; /* Light gray background for time slots */
  padding: 10px;
  margin-bottom: 10px;
  cursor: pointer;
  transition: background-color 0.3s;
}

ul#time-slots li:hover {
  background-color: #e9ecef; /* Slightly darker gray on hover */
}
  footer {
    text-align: center;
    padding: 20px;
    background-color: #28a745; /* Adjust the color to match your design */
  }
  #select-button {
    background-color: #218838; /* Darker green for the select button */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  #select-button:hover {
    background-color: #1e7e34; /* Slightly darker green on hover */
  }
  .calendar2 {
    width: auto;
  }


</style>
</head>
<body>
<div class="navbar">
  <a href="#">INICIO</a>
  <a href="#">TORNEOS</a>
  <a href="#">ESTADÍSTICAS</a>
  <a href="#">CONTACTO</a>
  <a href="#">INICIAR SESIÓN</a>
  <button onclick="toggleFontSize()">AGRANDAR TEXTO</button>
</div>
<div class="background privacy">
  <div class="logo">
    <img src="https://toposfc.org/wp-content/uploads/2023/06/logo-topos-fc-2023-1-copia-copia-1.png" alt="Logo de Topos FC">
    <h1>PÁGINA OFICIAL</h1>
  </div>
</div>
<!-- Field rental section with image -->
<div class="container">
  <h1 class="title">¿Sabías que puedes rentar la cancha de Topos F.C. para tus eventos?</h1>
  <div class="content">
    <div class="left-column">
      <img src="https://th.bing.com/th/id/OIP.DAAH2N6fs-C_Ub1vb6GzVgHaEL?rs=1&pid=ImgDetMain" alt="Soccer Field">
    </div>
    <div class="right-column">
      <p>La cancha de Topos F.C. tiene dimensiones de 20m por 7m, perfecta para eventos como fiestas corporativas, eventos deportivos, talleres al aire libre, ¡y mucho más!</p>
      <div class="data-text">
        <ul>
          <li>Dimensiones: 20m x 7m</li>
          <li>Capacidad: 50 personas</li>
          <li>Características: Cancha techada, espacio de asadores</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Calendar booking section -->
<div class="calendarcontainer">
  <div class="contentcalendar"> 
  <div class="calendarheader">
  <h1>Calendario de disponibilidad</h1>
  <h4>CANCHA DE TOPOS F.C.</h4>
</div>
  <div class="calendar-section">
    <h2>Seleccione la fecha de su evento</h2>
    <div class="calendar2"></div>
  </div>
  <div class="time-slots-section">
  </div>
  
</div>

</div>
<footer>
  <button id="select-button">Seleccionar</button>
</footer>
<script src="calendar_script.js"></script>
<script src="biggertext_script.js"></script>
</body>
</html>
