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
            background-image: url('fondo.png');
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
            top: 20px;
            background-color: transparent;
            z-index: 10;
        }

        .navbar a,
        .navbar button {
            color: white;
            text-decoration: none;
            background: none;
            border: none;
            font-size: 1em;
            cursor: pointer;
        }

        /* Styles for the field rental section with image */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }


        .navbar a:hover {
            font-weight: bold;
            text-decoration: underline;
            transition: background-color 0.3s ease;
        }


        .g1 {
            width: 100%;
            height: 270px;
            background: rgba(12, 45, 75, 1);
            opacity: 1;
            position: relative;
            top: 0px;
            left: 0px;
            overflow: hidden;
        }

        .g2 {
            width: 468px;
            color: rgba(255, 255, 255, 1);
            position: absolute;
            top: 178px;
            left: 762px;
            font-family: Poppins;
            font-weight: Medium;
            font-size: 17px;
            opacity: 1;
            text-align: right;
        }

        .g3 {
            width: 505px;
            color: rgba(255, 255, 255, 1);
            position: absolute;
            top: 47px;
            left: 10px;
            font-family: Poppins;
            font-weight: Bold;
            font-size: 24px;
            opacity: 1;
            text-align: center;
        }

        .g4 {
            width: 308px;
            color: rgba(255, 255, 255, 1);
            position: absolute;
            top: 103px;
            left: 59px;
            font-family: Poppins;
            font-weight: Regular;
            font-size: 20px;
            opacity: 1;
            text-align: left;
        }

        .g5 {
            width: 234px;
            height: 77px;
            background: url("../images/v344_3297.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
            top: 64px;
            left: 996px;
            overflow: hidden;
        }

        .g6 {
            width: 234px;
            color: rgba(255, 255, 255, 1);
            position: relative;
            top: -5px;
            left: 0px;
            right:40px;
            font-family: Poppins;
            font-weight: SemiBold;
            font-size: 17px;
            opacity: 1;
            text-align: center;
        }

        .name {
            color: #fff;
        }
        * {
            box-sizing: border-box;
        }
        .foot {
            font-size: 20px;
        }
        .footer {
            width: 100%;

            position: relative;
            padding: 20px 0;
            text-align: center;
        }



        .contenido {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 columns, each taking up 1 fraction of available space */
            gap: 20px; /* Gap between grid items */
            margin: 7%;
        }

        .popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 9999;
  }
  .eventim{
            width: 300px;
            height: 200px;
            border-radius: 20px;
        }
  .table1{
            display: flex;
            width:100px;
            left: 50px;
            color: white;
            text-align:justify;
        }
        .persona{
            text-align: right;
        }
        
        .imj{
            text-align:center;
        }
	#agrega{
		display: none;
	}

    </style>

</head>

<body>
<?php
	$nombre = $_POST['nombre'] ?? '';
	$contrasena = $_POST['contrasena'] ?? '';
	
	
	require 'database.php'; 
	
	$pdo = Database::connect();
	
	$sql = "SELECT * FROM reto_admins WHERE nombre = '$nombre' AND contraseña = '$contrasena'";
	$stmt = $pdo->query($sql);
	if ($stmt->rowCount() === 1) {
		$isAdmin = true;
	} else {
		
		$isAdmin = false;
	}
	
?> 

<div class="navbar">
        <a href="main.html">INICIO</a>
            <a href="liga.php">EQUIPOS Y TORNEOS</a>
            <a href="galeria.php">EVENTOS Y FOTOS</a>
            <a href="inicio.php">INICIAR SESIÓN</a>
        <button onclick="toggleFontSize()">AGRANDAR TEXTO</button>
    </div>
    <button onclick="mostrarPopup()", id="agrega">Crear Evento</button>
    <div class="contenido">
    <?php
        $sql = 'SELECT * FROM reto_eventos';
        foreach ($pdo->query($sql) as $row) {        
        echo '<table class = "table1">';
        echo '<tr>';
        echo     '<td colspan="2" class="imj">';
        echo         '<img src="uploads/'.$row['imagen'].'" alt="'.$row['header'].'" class="eventim">';
        echo    ' </td>';
        echo  '</tr>';
        echo   '<tr>';
        echo     '<td colspan="2">'.$row['header'].'</td>';
        echo  '</tr>';
        echo   '<tr>';
        echo     '<td colspan="2"><p>'.$row['descrip'].'</p></td>';
        echo  '</tr>';
        echo   '<tr>';
        echo     '<td>'.$row['fecha_hora'].'</td>';
        echo     '<td class = "persona">'.$row['name_responsable'].'</td>';
        echo '</tr>';
        echo '</table>';
        }
    Database::disconnect();
    ?>
    <div id="miPopup" class="popup">
    <form action="procesar_formulario.php" method="post" enctype="multipart/form-data">
        <label for="fecha">Fecha del Evento:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <label for="hora">Hora del Evento:</label>
        <input type="time" id="hora" name="hora" required><br><br>

        <label for="titulo">Título del Evento:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea><br><br>

        <label for="responsable">Nombre del Responsable:</label>
        <input type="text" id="responsable" name="responsable" required><br><br>
        
        <label for="imagen">Imagen del Evento:</label>
        <input type="file" id="imagen" name="imagen" required><br><br>

        <input type="submit" value="Agregar Evento">
    </form>

</div>

    </div>
<script>
		var isAdmin = "<?php echo $isAdmin; ?>";
		if (isAdmin){
			const boton = document.querySelector("#agrega");
			boton.style.display = "block";
		}
		function mostrarPopup() {
        var popup = document.getElementById("miPopup");
        popup.style.display = "block";
    }
</script>    
    <footer class="foot">
        <div class="g1">
            <a href="https://toposfc.org/wp-content/uploads/2023/09/aviso-de-privacidad-integral.pdf">
                <span class="g2">Topos F.C. 2024 | Consulta nuestro aviso de privacidad</span>
            </a>
            <span class="g3">¿Quieres más información? Contáctanos</span>
            <span class="g4">
                Correo: <a href="mailto:contacto@toposfc.org">contacto@toposfc.org</a><br>
                Whatsapp: <a href="https://wa.me/522222796186">2222796186</a>
            </span>
            <div class="g5">
                <span class="g6">Síguenos en redes sociales</span>
                <br>
                <a href="https://www.facebook.com/ToposFCPuebla/?locale=es_LA">
                    <img class="name" src="fb.png" alt="Facebook">
                </a>
                <a href="https://www.instagram.com/toposfcpuebla/">
                    <img class="name" src="insta.png" alt="Instagram">
                </a>
                <a href="https://x.com/ToposFCPuebla?mx=2">
                    <img class="name" src="tw.png" alt="Twitter">
                </a>
            </div>
        </div>
    </footer>
</body>

    

</html>