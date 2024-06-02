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
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

        .e1, .e2, .e3, .e4, .e5, .e6, .e7, .e8, .e9, .e10, .e11, .e12,  .e15 {
            position: absolute;
        }

        .e1 { top: 175px; left: 280px; }
        .e2 { top: 245px; left: 280px; }
        .e3 { top: 335px; left: 280px; }
        .e4 { top: 405px; left: 280px; }
        .e5 { top: 175px; left: 950px; }
        .e6 { top: 255px; left: 950px; }
        .e7 { top: 345px; left: 950px; }
        .e8 { top: 415px; left: 950px; }
        .e9 { top: 215px; left: 450px; }
        .e10 { top: 370px; left: 450px; }
        .e11 { top: 225px; left: 790px; }
        .e12 { top: 380px; left: 790px; }
        .e15 { top: 300px; left: 630px; }

		.nombres{
			position: absolute;
			left: -235px;
			top: -165px;
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
        }

        .agregar:hover {
            background-color: #0056b3;
        }

        .trofeo {
            position: absolute;
			top: 50px;
			left: 430px;
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
 /* background-color: rgba(255, 255, 255, 0); */
 border-radius: 5px;
 box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
 padding: 30px;
 /* backdrop-filter: blur(5px); */
}

.top {
 display: flex;
 padding-bottom: 20px;
}

.titulo {
 padding-top: 10px;
 padding-left: 10px;
 font-size: 16px;
}

.atras-button {
 width: 50px;
 height: 50px;
 background: none;
 border: none;
 position: absolute;
 top: 20px;
 left: 20px;
 cursor: pointer;
}

.atras {
 padding-left: 20px;
 width: 30px;
 height: 30px;
}

.contenido {
 display: flex;
 flex-direction: column;
}

.formulario {
 width: 100%;
}

.campo {
 margin-bottom: 15px;
}

.campo label {
 display: block;
 font-weight: 600;
 margin-bottom: 5px;
}

textarea, select, input[type="text"] {
 width: calc(100% - 22px);
 padding: 10px;
 border: 1px solid #ccc;
 border-radius: 5px;
}

textarea {
 resize: vertical;
}

.boton-wrapper {
 display: flex;
 justify-content: center;
}

button {
 background-color: #3D92B6;
 color: white;
 width: 90px;
 height: 40px;
 font-size: 16px;
 margin-top: 15px;
 border: none;
 border-radius: 5px;
 cursor: pointer;
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

    </style>
</head>

<body>
    <?php
    require 'database.php'; 

    $pdo = Database::connect();
    
    $sql = "SELECT 
        t.id_torneo,
        t.nombre AS nombre_torneo,
        e1.nombre AS equipo1,
        e2.nombre AS equipo2,
        e3.nombre AS equipo3,
        e4.nombre AS equipo4,
        e5.nombre AS equipo5,
        e6.nombre AS equipo6,
        e7.nombre AS equipo7,
        e8.nombre AS equipo8
    FROM 
        reto_torneo t
    JOIN 
        reto_equipos e1 ON t.e1 = e1.id_equipo
    JOIN 
        reto_equipos e2 ON t.e2 = e2.id_equipo
    JOIN 
        reto_equipos e3 ON t.e3 = e3.id_equipo
    JOIN 
        reto_equipos e4 ON t.e4 = e4.id_equipo
    JOIN 
        reto_equipos e5 ON t.e5 = e5.id_equipo
    JOIN 
        reto_equipos e6 ON t.e6 = e6.id_equipo
    JOIN 
        reto_equipos e7 ON t.e7 = e7.id_equipo
    JOIN 
        reto_equipos e8 ON t.e8 = e8.id_equipo;
    ";
    foreach ($pdo->query($sql) as $row) {
		$fases = array();

		for ($i = 1; $i < 8; $i++) {
			$quefases = "SELECT 
			lol.nombre AS win
		FROM 
			reto_partido_torneo pt
		JOIN 
			reto_equipos lol 
		ON 
			(pt.goles_e1 > pt.goles_e2 AND pt.equipo1 = lol.id_equipo) OR 
			(pt.goles_e1 <= pt.goles_e2 AND pt.equipo2 = lol.id_equipo)
		WHERE 
			pt.id_torneo =". $row['id_torneo'] ."
			AND pt.fase = ".$i.";";
			$stmt = $pdo->query($quefases);
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
		
			if ($result) {
				$fases[] = $result["win"];
			} else {
				// Handle the case where there is no result, if necessary
				$fases[] = 'TBD'; // or some default value
			}
		}
        echo '
        <div class="container">
            <div class="header">
                <button class="back-button"><img class="bbutton" src="atras.png"></button>
                <h1 class="me">'.$row['nombre_torneo'].'</h1>
            </div>
            <div class="bracket">
                <img class="esquema" src="esquema.png">
				<img src="trofeo.png" class="trofeo">
                <div class="nombres">
                    <div class="e1"><div class="name-box"><label class="name">'.$row["equipo1"].'</label></div></div>
                    <div class="e2"><div class="name-box"><label class="name">'.$row["equipo2"].'</label></div></div>
                    <div class="e3"><div class="name-box"><label class="name">'.$row["equipo3"].'</label></div></div>
                    <div class="e4"><div class="name-box"><label class="name">'.$row["equipo4"].'</label></div></div>
                    <div class="e5"><div class="name-box"><label class="name">'.$row["equipo5"].'</label></div></div>
                    <div class="e6"><div class="name-box"><label class="name">'.$row["equipo6"].'</label></div></div>
                    <div class="e7"><div class="name-box"><label class="name">'.$row["equipo7"].'</label></div></div>
                    <div class="e8"><div class="name-box"><label class="name">'.$row["equipo8"].'</label></div></div>
                    <div class="e9"><div class="name-box"><label class="name">'.$fases[0].'</label></div></div>
                    <div class="e10"><div class="name-box"><label class="name">'.$fases[1].'</label></div></div>
                    <div class="e11"><div class="name-box"><label class="name">'.$fases[2].'</label></div></div>
                    <div class="e12"><div class="name-box"><label class="name">'.$fases[3].'</label></div></div>
                    <div class="e13"><div class="name-box"><label class="name">'.$fases[4].'</label></div></div>
                    <div class="e14"><div class="name-box"><label class="name">'.$fases[5].'</label></div></div>
                    <div class="e15"><div class="name-box"><label class="name">'.$fases[6].'</label></div></div>
                </div>
            </div>
            <div class="ab">
                <button class="agregar" onclick="mostrar('.$row['id_torneo'].')">Agregar Partido</button>
            </div>
        </div>';
    }
    ?>
 <div class="xdlol">
	 </div>
	 
	 <div class="contenedor_pop">
		 <div class="top">
			 <div class="atras">
				 <button class="atras-button">
					 <img class="atras" src="https://static.vecteezy.com/system/resources/previews/000/589/654/non_2x/vector-back-icon.jpg" alt="Atrás">
					</button>
				</div>
				<div class="titulo">
					<h2>Añadir partido a un torneo</h2>
				</div>
   </div>
   <div class="contenido">
     <div class="formulario">
		 <div class="campo">
			 <label for="fase-torneo">Selecciona la fase:</label>
			 <select id="fase-torneo" name="fase-torneo">
				 <option value="opcion1">Cuartos de final</option>
				 <option value="opcion2">Octavos de Final</option>
				 <option value="opcion4">Semifinal</option>
				 <option value="opcion5">Final</option>
				</select>
			</div>
			<div class="campo">
				<label for="fase-torneo">Selecciona el enfrentamiento:</label>
				<select id="fase-torneo" name="fase-torneo">
					<option value="opcion1">Algo vs Algo</option>
					<option value="opcion2">Algo vs Algo</option>
					<option value="opcion3">Algo vs Algo</option>
					<option value="opcion4">Algo vs Algo</option>
					<option value="opcion5">Algo vs Algo</option>
				</select>
       </div>
       <div class="campo">
         <label for="goles-equipo1">Cantidad de goles del equipo 1:</label>
         <textarea id="goles-equipo1" name="goles-equipo1" onkeyup="validarNumeros(this)"></textarea>
		</div>
		<div class="campo">
			<label for="goles-equipo2">Cantidad de goles del equipo 2:</label>
			<textarea id="goles-equipo2" name="goles-equipo2" onkeyup="validarNumeros(this)"></textarea>
		</div>
		<div class="campo">
			<label for="fecha">Selecciona la fecha:</label>
			<input type="text" id="datepicker">
		</div>
		<div class="campo">
			<label for="hora">Selecciona la hora:</label>
			<select id="hora" name="hora">
				<option value="08:00">8:00 am</option>
				<option value="09:00">9:00 am</option>
				<option value="10:00">10:00 am</option>
				<option value="11:00">11:00 am</option>
				<option value="08:00">12:00 am</option>
				<option value="09:00">1:00 pm</option>
				<option value="10:00">2:00 pm</option>
				<option value="11:00">3:00 pm</option>
				<option value="08:00">4:00 pm</option>
				<option value="09:00">5:00 pm</option>
				<option value="10:00">6:00 pm</option>
				<option value="11:00">7:00 pm</option>
				<option value="08:00">8:00 pm</option>
				<option value="09:00">9:00 pm</option>
			</select>
		</div>
		<div class="boton-wrapper">
			<button>Guardar</button>
		</div>
	</div>
</div>
</div>
</body>

<script>
function mostrar(id) {
    document.querySelector('.contenedor_pop').style.display = 'block';
	document.querySelector('.xdlol').style.display = 'block';
	var divElement = document.querySelector('.titulo');
	var h2Element = divElement.querySelector('h2');
	h2Element.textContent = 'Añadir un partido al torneo: '+id;
	<?php 
	
	?>
}

document.querySelector('.atras').addEventListener('click', function() {
    document.querySelector('.contenedor_pop').style.display = 'none';
	document.querySelector('.xdlol').style.display = 'none';
	
});
</script>

</html>
