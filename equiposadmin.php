<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topos FC - Página Oficial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(fondo2.jpeg);
            background-size: cover;
            background-attachment: fixed;
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

        .navbar a:hover {
            font-weight: bold;
            text-decoration: underline;
            transition: background-color 0.3s ease;
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

        .contenido {
            margin-top: 100px;
            padding-top: 10px;
            height: calc(100vh - 100px);
            overflow-y: auto;
        }


        .l4 {
            position: relative;
            color: white;
            font-size: 15px;
            top:-30px;
            left: 550px;
            width: 700px;
            text-align: justify;
        }
        
        .t1 {
            position: relative;
            color: white;
            font-size: 15px;
            top: 50px;
            left: -220px;
            text-align: center;
        }
        .t2 {
            position: relative;
            color: white;
            font-size: 15px;
            top: 150px;
            left: -220px;
            text-align: center;
        }

        .table1{
            position:relative;
            top: 50px;
            background-color: black;
        }
        .table2{
            position: relative;
            top: 150px;
        }

        table {
            position: relative;
                width: 110%;
                border-collapse: collapse;
            left: -250px;
            color: black;

        }
        th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: center;
        }
        th {
                background-color: #f2f2f2;
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
            position: relative;
            top: 400px;
            font-size: 20px;
        }

        .s1{
        position:relative;
        top: 20px;
        width: 100px;
        height: 40px;
        font-size: 16px;
        margin-top: 20px;
        margin: 0 auto;
        background-color: #3D92B6;
        color: white;
        font-size: 16px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }
        .s2{
        position:relative;
        top: 20px;
        width: 120px;
        height: 40px;
        font-size: 16px;
        margin-top: 20px;
        margin: 0 auto;
        background-color: #19A785;
        color: white;
        font-size: 16px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }
        .s3{
        position:relative;
        top: 20px;
        width: 100px;
        height: 40px;
        font-size: 16px;
        margin-top: 20px;
        margin: 0 auto;
        background-color: #CF8C27;
        color: white;
        font-size: 16px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }
        .s4{
        position:relative;
        top: 20px;
        width: 100px;
        height: 40px;
        font-size: 16px;
        margin-top: 20px;
        margin: 0 auto;
        background-color: #BF3535;
        color: white;
        font-size: 16px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }
        
        .bp{
            position: relative; 
            top: 90px;
            left:-70px;
        }
        .bp2{
            position: relative; 
            top: 170px;
            left:-70px;
        }
        .disenotab{
         color: white;
         font-size:18px;
         background-color: black;
        }
    </style>
    <script>
        let originalFontSize = 16; // Set your original font size here

        function toggleFontSize() {
            const body = document.querySelector('body');
            const currentFontSize = parseFloat(window.getComputedStyle(body).fontSize);

            if (currentFontSize === originalFontSize) {
                // Increase font size
                body.style.fontSize = '20px'; // Adjust as needed
            } else {
                // Restore original font size
                body.style.fontSize = originalFontSize + 'px';
            }
        }
    </script>
</head>

<body>
    <div class="navbar">
        <a href="#">INICIO</a>
            <a href="#">EQUIPOS Y TORNEOS</a>
            <a href="#">EVENTOS Y FOTOS</a>
            <a href="#">ADMINITRADORES</a>
        <button onclick="toggleFontSize()">AGRANDAR TEXTO</button>
    </div>
    <div class="contenido">
        <div class="l4">

            <div class="t1">
                <h1> Tabla de estadísticas Femenil </h1>
            </div>
        <table class="table1">
			<tr>
					<th class="disenotab">Posición</th>
					<th class="disenotab">Equipo</th>
					<th class="disenotab">JJ</th>
					<th class="disenotab">PG</th>
					<th class="disenotab">PP</th>
					<th class="disenotab">PE</th>
					<th class="disenotab">GF</th>
					<th class="disenotab">GC</th>
					<th class="disenotab">DF</th>
					<th class="disenotab">PTS</th>
			</tr>
			<?php
				require 'database.php'; 
	
				$pdo = Database::connect();
				
				$sql = "SELECT 
				re.id_estadisticas,
				re.p_jugados,
				re.p_ganados,
				re.p_empatados,
				re.p_perdidos,
				re.g_favor,
				re.g_contra,
				rq.nombre AS equipo_nombre
			FROM 
				reto_estadisticas re
			JOIN 
				reto_equipos rq
			ON 
				re.id_equipo = rq.id_equipo
			WHERE
				rq.liga = 2
			ORDER BY 
				(re.p_ganados*3)+re.p_empatados DESC;
			";
			
			$count = 0;
			foreach ($pdo->query($sql) as $row) {
				$count = $count +1;
				echo "<tr>";
				echo "		<th>".$count."</th>";
				echo "		<th>".$row["equipo_nombre"]."</th>";
				echo "		<th>".$row["p_jugados"]."</th>";
				echo "		<th>".$row["p_ganados"]."</th>";
				echo "		<th>".$row["p_perdidos"]."</th>";
				echo "		<th>".$row["p_empatados"]."</th>";
				echo "		<th>".$row["g_favor"]."</th>";
				echo "		<th>".$row["g_contra"]."</th>";
				echo "		<th>".$row["g_favor"] - $row["g_contra"]."</th>";
				echo "		<th>".($row["p_ganados"]*3)+($row["p_empatados"]*1)."</th>";
				echo "</tr>";
			}
			?>
        </table>
            <div class="bp">
            <button class="s1"> CREAR </button>    
            <button class="s2"> MODIFICAR </button>    
            <button class="s3">DETALLES </button>    
            <button class="s4">ELIMINAR </button>    
            </div>
            <div class="t2">
                <h1> Tabla de estadísticas Varonil </h1>
            </div>
        <table class="table2">
                <thead>
                        <tr>
                                <th class="disenotab">Posición</th>
                                <th class="disenotab">Equipo</th>
                                <th class="disenotab">JJ</th>
                                <th class="disenotab">PG</th>
                                <th class="disenotab">PP</th>
                                <th class="disenotab">PE</th>
                                <th class="disenotab">GF</th>
                                <th class="disenotab">GC</th>
                                <th class="disenotab">DF</th>
                                <th class="disenotab">PTS</th>
                        </tr>
						<tr>
						<?php
				
				$sql = "SELECT 
				re.id_estadisticas,
				re.p_jugados,
				re.p_ganados,
				re.p_empatados,
				re.p_perdidos,
				re.g_favor,
				re.g_contra,
				rq.nombre AS equipo_nombre
			FROM 
				reto_estadisticas re
			JOIN 
				reto_equipos rq
			ON 
				re.id_equipo = rq.id_equipo
			WHERE
				rq.liga = 1
			ORDER BY 
				(re.p_ganados*3)+re.p_empatados DESC;
			";
			
			$count = 0;
			foreach ($pdo->query($sql) as $row) {
				$count = $count +1;
				echo "<tr>";
				echo "		<th>".$count."</th>";
				echo "		<th>".$row["equipo_nombre"]."</th>";
				echo "		<th>".$row["p_jugados"]."</th>";
				echo "		<th>".$row["p_ganados"]."</th>";
				echo "		<th>".$row["p_perdidos"]."</th>";
				echo "		<th>".$row["p_empatados"]."</th>";
				echo "		<th>".$row["g_favor"]."</th>";
				echo "		<th>".$row["g_contra"]."</th>";
				echo "		<th>".$row["g_favor"] - $row["g_contra"]."</th>";
				echo "		<th>".($row["p_ganados"]*3)+($row["p_empatados"]*1)."</th>";
				echo "</tr>";
			}
			?>						</tr>
                </thead>
                <tbody>
                    <?php 
                    ?>
                </tbody>
        </table>
            <div class="bp2">
            <button class="s1"> CREAR </button>    
            <button class="s2"> MODIFICAR </button>    
            <button class="s3">DETALLES </button>    
            <button class="s4">ELIMINAR </button>    
            </div>
            </div>
        <div class="foot">
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
        </div>
</body>

</html>