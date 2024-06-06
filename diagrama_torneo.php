<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Topos FC - Página Oficial</title>
	<style>
		body {
			background-image: url("fondo.png");
			font-family: Arial, sans-serif;
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 0;
			padding: 20px;
			/* overflow: hidden; */
			background-color: rgba(0, 0, 0, 0.5); /* Color de fondo oscuro con transparencia */
		}

		.container {
			color: black;
			text-align: center;
			background-color: white;
			border-radius: 10px;
			width: 900px;
			margin-bottom: 20px;
			margin-top: 20px;
			padding: 20px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			position: relative;
		}

		.header {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-bottom: 20px;
			color: black;
			padding: 15px;
		}

		.bracket {
			display: flex;
			justify-content: center;
			align-items: center;
			position: relative;
		}

		.esquema {
			width: 800px;
		}

		.name-box {
			display: flex;
			justify-content: space-between;
			align-items: center;
			width: 110px;
			padding: 10px;
			border: 2px solid #ccc;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
		}

		.nameC {
			font-size: 18px;
			cursor: pointer;
		}

		.name {
			font-size: 18px;
		}

		.back-button {
			background: none;
			border: none;
			color: white;
			font-size: 20px;
			margin-right: 10px;
			cursor: pointer;
		}

		.me {
			font-size: 30px;
			color: #0D3B66;
		}

		.label {
			font-size: 5px;
		}

		.e1, .e2, .e3, .e4, .e5, .e6, .e7, .e8, .e9, .e10, .e11, .e12, .e13, .e14, .e15 {
			position: absolute;
		}

		.e1 {top:155px; left:330px; }
		.e2 { top:245px; left:330px; }
		.e3 { top:355px; left:330px; }
		.e4 { top:445px; left:330px; }
		.e5 { top:155px; left:940px; }
		.e6 { top:245px; left:940px; }
		.e7 { top:355px; left:940px; }
		.e8 { top:445px; left:940px; }
		.e9 {top:215px; left:480px; }
		.e10 { top:400px; left:480px; }
		.e11 { top:215px; left:780px; }
		.e12 { top:400px; left:780px; }
		.e13 { top:260px; left:630px;; }
		.e14 { top:350px; left:630px; }
		.e15 { top:100px; left:680px; }

		.nombres{
			position: absolute;
			left: -245px;
			top: -125px;
		}

		.ab {
			margin-top: 20px;
		}

		.agregar {
			width: 100px;
			height: 55px;
			font-size: 16px;
			background-color: #3D92B6;
			color: white;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			position: absolute;
			top: 15%;
			right: 5%;
			transform: translateY(-50%);
		}

		.agregar:hover {
			background-color: #0056b3;
		}

		#clickable:hover {
			cursor: pointer;
			background-color: #3fbd19;
		}

		.trofeo {
			position: absolute;
			top: -40px;
			left: 360px;
			width: 60px;
		}
		/* ----------------------------------------------------------------- */
		body {
 font-family: 'Poppins', sans-serif;
}

h2, p {
 margin: 0 auto;
 padding: 0px;
}


.contenedor_pop {
 display: none;
 overflow: auto;
 position: fixed;
 color: #0D3B66;
 width: 50%;
 height: auto;
 margin: 0 auto;
 background-color: #fff;
 border-radius: 5px;
 box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
 padding: 30px;
}

.contenedor_pop .top {
 display: flex;
 padding-bottom: 20px;
}

.contenedor_pop .titulo {
 padding-top: 10px;
 padding-left: 10px;
 font-size: 16px;
}

.contenedor_pop .atras-button {
 width: 50px;
 height: 50px;
 background: none;
 border: none;
 position: inherit;
 /* top: 20px;
 left: 20px; */
 cursor: pointer;
}

.contenedor_pop .atras {
 /* padding-left: 20px; */
 width: 30px;
 height: 30px;
}

.contenedor_pop .contenido {
 display: flex;
 flex-direction: column;
}

.contenedor_pop .formulario {
 width: 100%;
}

.contenedor_pop .campo {
 margin-bottom: 15px;
}

.contenedor_pop .campo label {
 display: block;
 font-weight: 600;
 margin-bottom: 5px;
}

.contenedor_pop textarea, select, input[type="text"] {
 width: calc(100% - 22px);
 padding: 10px;
 border: 1px solid #ccc;
 border-radius: 5px;
}

.contenedor_pop textarea {
 resize: vertical;
}

.contenedor_pop .boton-wrapper {
 display: flex;
 justify-content: center;
}

.contenedor_pop button {
 background-color: #3D92B6;
 color: white;
 font-size: 16px;
 border: none;
 border-radius: 5px;
 cursor: pointer;
}

.contenedor_pop .guarda {
 background-color: #3D92B6;
 color: white;
 font-size: 16px;
 margin-top: 15px;
 border: none;
 border-radius: 5px;
 cursor: pointer;
 padding: 15px;
}

.masTorneo {
 background-color: #3D92B6;
 color: white;
 font-size: 16px;
 margin-top: 15px;
 border: none;
 border-radius: 5px;
 cursor: pointer;
 padding: 15px;
}

.xdlol {
 	display: none;
	background-color: #fff;
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0px;
	background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente */
	backdrop-filter: blur(5px); /* Aplica desenfoque al fondo detrás del popup */
}

h2, p {
  margin: 0 auto;
  padding: 0px;
 }
 
 .contenedorTorneo {
  display: none;
  color: #0D3B66;
  width: 50%;
  height: auto;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  padding: 30px;
  position: absolute ;
  justify-content: center;
}
 
 .contenedorTorneo .top {
  display: flex;
  padding-bottom: 20px;
 }
 
 .contenedorTorneo .titulo {
  padding-top: 10px;
  padding-left: 10px;
  font-size: 16px;
 }
 
 .contenedorTorneo .atras-button {
  width: 50px;
  height: 50px;
  background: none;
  /* border: none; */
  position: inherit;
  /* top: 20px; */
  cursor: pointer;
 }
 
 .contenedorTorneo .atras {
  /* padding-left: 20px; */
  width: 30px;
  height: 30px;
 }

 .contenedorTorneo .contenido {
  display: flex;
  flex-direction: column;
 }
 
 .contenedorTorneo .formulario {
  width: 100%;
 }
 
 .contenedorTorneo .campo {
  margin-bottom: 15px;
 }
 
 .contenedorTorneo .campo label {
  display: block;
  font-weight: 600;
  margin-bottom: 5px;
 }
 
 .contenedorTorneo textarea, select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
 }
 
 .contenedorTorneo textarea {
  resize: vertical;
 }
 
 .contenedorTorneo .checkbox {
  display: flex;
  align-items: center;
  margin-bottom: 5px;
 }
 
 .contenedorTorneo .checkbox input {
  margin-right: 10px;
 }
 
 .contenedorTorneo .boton-wrapper {
  display: flex;
  justify-content: center;
 }
 
 .contenedorTorneo button {
  background-color: #3D92B6;
  color: white;
  width: 90px;
  height: 40px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
 }

 .contenedorTorneo button {
  background-color: #3D92B6;
  color: white;
  width: 90px;
  height: 40px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
 }

	.containerSelect {
		text-align: center;
		margin: 0 auto;
		}

	.options {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
	}
	.option {
		margin: 10px;
	}
	.option input[type="checkbox"] {
		display: none;
	}
	.option label {
		display: block;
		background: #007bff;
		color: white;
		padding: 10px 20px;
		border-radius: 5px;
		cursor: pointer;
	}
	.option input[type="checkbox"]:checked + label {
		background: #28a745;
	}
	.option input[type="checkbox"]:disabled + label {
		background: #6c757d;
		cursor: not-allowed;
	}
	.counter {
		margin-top: 20px;
		margin-bottom: 20px;
		font-size: 1.2em;
	}

</style>
</head>

<body>
	<button class="masTorneo">Añade un torneo :D</button>
	<?php
	require 'database.php'; 

	$pdo = Database::connect();
	$sqltorn = "SELECT * FROM reto_torneo;";
foreach ($pdo->query($sqltorn) as $row) {
	$fases = [];
	for ($i = 1; $i < 8; $i++) {
		$sql = "SELECT 
		r1.nombre AS equipo1,
		r2.nombre AS equipo2,
		t1.numPartido
		FROM 
		reto_fasesequipos t1
		JOIN 
		reto_fasesequipos t2
		ON
		t1.numPartido = t2.numPartido
		AND t1.id_torneo = t2.id_torneo
		AND t1.id_equipo < t2.id_equipo
		JOIN 
		reto_equipos r1
		ON 
		t1.id_equipo = r1.id_equipo
		JOIN 
		reto_equipos r2
		ON 
		t2.id_equipo = r2.id_equipo
		WHERE t1.numPartido = ".$i."
		AND t1.id_torneo = ".$row["id_torneo"].";
		";
			$stmt = $pdo->query($sql);
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
		
			if ($result) {
				$fases[] = [$result["equipo1"], $result["equipo2"]];
			} else {
				// Handle the case where there is no result, if necessary
				$fases[] = 'NULL'; // or some default value
			}
		}
	
		echo '
		<div class="container">
			<button class = "agregar" onclick = "reset('.$row["id_torneo"].')">Reset torneo</button>
			<div class="header">
				<h1 class="me">'.$row['nombre'].'</h1>
			</div>
			<div class="bracket">

				<img class="esquema" src="esquema.png">
				<img src="trofeo.png" class="trofeo">
				<div class="nombres">';
				for ($i = 1; $i < 16; $i++) {
					$sqlAyuda = "SELECT e.nombre 
					FROM reto_equipopos p
					JOIN reto_equipos e ON p.id_equipo = e.id_equipo
					WHERE p.id_torneo = ".$row["id_torneo"]."
					AND p.posicion = ".$i.";
					";
					$stmt = $pdo->query($sqlAyuda);
					$result = $stmt->fetch(PDO::FETCH_ASSOC);
				
					if ($result) {
						echo '<div class="e'.$i.'"><div class="name-box"><label class="name">'.$result["nombre"].'</label></div></div>';
					} else {
						if ($fases[$i-9] !== "NULL") {
							echo '<div class="e'.$i.'" onclick = "mostrar('.($i-8).', '.$row["id_torneo"].')"><div class="name-box" id = "clickable"><label class="nameC">'."Partido jugable".'</label></div></div>';
						}
						else {
							echo '<div class="e'.$i.'"><div class="name-box"><label class="name">'."TBD".'</label></div></div>';
						}
					}
				}
				echo '</div>
			</div>
		</div>';
	}
	?>
	<div class="xdlol"></div> 
	<div class="contenedor_pop"></div>
	<div class="contenedorTorneo">
   <div class="top">
       <button class="atras-button" onclick="atras()">
         <img class="atras" src="https://static.vecteezy.com/system/resources/previews/000/589/654/non_2x/vector-back-icon.jpg" alt="Atrás">
       </button>
     <div class="titulo">
       <h2>Crear torneo</h2>
     </div>
   </div>
   <div class="contenido">
  <form>
    <div class="formulario">
      <div class="campo">
        <label for="nombre-torneo">Nombre de torneo:</label>
        <textarea id="nombre-torneo" name="nombre-torneo" required></textarea>
      </div>
      <div class="campo">
        <label for="liga-torneo">Selecciona la liga correspondiente al torneo:</label>
        <select id="liga-torneo" name="liga-torneo" onchange="handleLigaChange(this)">
		<option value="" disabled selected>Por favor selecciona una liga</option>
		<?php 
			$sql = "SELECT * from reto_liga";
			foreach ($pdo->query($sql) as $row) {
				echo '<option value="'.$row["id"].'">'.$row["nombre"].'</option>';
			}
		?>
          <!-- <option value="opcion1">Topos Femenil</option>
          <option value="opcion2">Topos Varonil</option>
          <option value="opcion3">Topitos F.C.</option> -->
        </select>
      </div>
      <div class="campoEspe">
        <h1>Selecciona los equipos (min 2)</h1>
        <div class="containerSelect">
         	 <div class="options">
        	</div>
        <div class="boton-wrapper">
          <button type="submit" class="guarda">Guardar</button>
        </div>
      </div>
    </div>
  </form>
</div>

</body>

<script>
	function mostrar(id, torneo) {

		var xhr = new XMLHttpRequest();
        xhr.open("POST", "diagrama_process.php", true); // Specify the request type and URL
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // Set the request header for form data
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Parse the JSON response
            var response = JSON.parse(xhr.responseText);
            console.log(response);
			var popop = `
		<div class="top">
				<button class="atras-button" onclick="atras()">
					<img class="atras" src="https://static.vecteezy.com/system/resources/previews/000/589/654/non_2x/vector-back-icon.jpg" alt="Atrás">
				</button>
			<div class="titulo">
				<h2>Añadir partido a ${response.nombre_torneo}</h2>
			</div>
		</div>
		<div class="contenido">
    <div class="formulario">
        <form id="formulario-partido" action="mandarTorneo.php" method="POST">
		<input type="hidden" name="torneo" value = ${torneo}>
		<input type="hidden" name="partido" value = ${id}>
		<input type="hidden" name="equipo1" value = ${response.id_e1}>
		<input type="hidden" name="equipo2" value = ${response.id_e2}>
		<div class="campo">
                <label for="goles-equipo1">Cantidad de goles de ${response.equipo1}:</label>
                <textarea id="goles-equipo1" name="goles-equipo1" onkeyup="validarNumeros(this)" required></textarea>
            </div>
            <div class="campo">
                <label for="goles-equipo2">Cantidad de goles de ${response.equipo2}:</label>
                <textarea id="goles-equipo2" name="goles-equipo2" onkeyup="validarNumeros(this)" required></textarea>
            </div>
            <div class="campo">
                <label for="fecha">Fecha del Partido:</label>
                <input type="date" id="fecha" name="fecha" required><br><br>
            </div>
            <div class="campo">
                <label for="hora">Hora del Partido:</label>
                <input type="time" id="hora" name="hora" required><br><br>
            </div>
            <div class="boton-wrapper">
                <button type="submit" class = "guarda">Guardar</button>
            </div>
        </form>
    </div>
</div>

			</div>
		</div>`; 
		var aca = document.querySelector(".contenedor_pop");
		aca.innerHTML = (popop)
		aca.style.display = "block";
          }
        };
        xhr.send("id=" + encodeURIComponent(id) + "&torneo=" + encodeURIComponent(torneo)); // Send the data to the server
		document.querySelector(".xdlol").style.display = "block";

	}
	function atras() {
		document.querySelector(".contenedor_pop").style.display = "none";
		document.querySelector(".contenedorTorneo").style.display = "none";
		
		document.querySelector(".xdlol").style.display = "none";

		document.querySelector(".options").innerHTML = '';
		document.querySelector(".counter").innerHTML = '';

	}
	function validarNumeros(input) {
        // Reemplaza todo lo que no sea un número con una cadena vacía
        input.value = input.value.replace(/[^\d]/g, '');
    }

	function reset(torneo) {
		var xhr = new XMLHttpRequest();
        xhr.open("POST", "reset_process.php", true); // Specify the request type and URL
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // Set the request header for form data
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          }
        };
        xhr.send("torneo=" + encodeURIComponent(torneo)); // Send the data to the server
		location.reload();

	}

	document.querySelector(".masTorneo").addEventListener('click', function(){
		document.querySelector(".xdlol").style.display = "flex";
		document.querySelector(".contenedorTorneo").style.display = "block";
	});
	
	function handleLigaChange(liga) {
		if (document.querySelector(".counter")) {
			
			document.querySelector(".options").innerHTML = '';
			document.querySelector(".counter").remove();
		}

    // Your onchange logic here
    console.log('Liga seleccionada:', liga.value);
	var xhr = new XMLHttpRequest();
        xhr.open("POST", "liga_process.php", true); // Specify the request type and URL
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // Set the request header for form data
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Parse the JSON response
			console.log(xhr.responseText);
            var response = JSON.parse(xhr.responseText);
			console.log(response);
			var optionsContainer = document.querySelector(".options");
			response.forEach(function(option, index) {

				var optionDiv = document.createElement("div");
				optionDiv.className = "option";

				var checkbox = document.createElement("input");
				checkbox.type = "checkbox";
				checkbox.id = "option" + (option.id_equipo);
				checkbox.name = "options";
				checkbox.value = option.nombre; // Assuming the option object has a value property

				var label = document.createElement("label");
				label.htmlFor = "option" + option.id_equipo;
				label.appendChild(document.createTextNode(option.nombre)); // Assuming the option object has a label property

				optionDiv.appendChild(checkbox);
				optionDiv.appendChild(label);

				optionsContainer.appendChild(optionDiv);
			});
			
			var counterDiv = document.createElement("div");
			counterDiv.className = "counter";
			counterDiv.innerHTML = "Seleccionados: <span id='selectedCount'>0</span>/8";
			document.querySelector('.contenedorTorneo').appendChild(counterDiv);


			const checkboxes = document.querySelectorAll('input[type="checkbox"]');
			const selectedCountElement = document.getElementById('selectedCount');
			let selectedCount = 0;

			checkboxes.forEach(checkbox => {
				checkbox.addEventListener('change', () => {
					if (checkbox.checked) {
						selectedCount++;
					} else {
						selectedCount--;
					}
					selectedCountElement.textContent = selectedCount;

					if (selectedCount >= 8) {
						checkboxes.forEach(box => {
							if (!box.checked) {
								box.disabled = true;
							}
						});
					} else {
						checkboxes.forEach(box => {
							box.disabled = false;
						});
					}
				});
			});
          }
        };
	xhr.send("liga=" + encodeURIComponent(liga.value)); // Send the data to the server
	
  }

  		
</script>

</html>

