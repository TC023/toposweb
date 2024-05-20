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

		.titulo {
			color: white;
			font-size: 25px;
			padding-top: 0px;
			text-align: center;
		}

		.titulo2 {
			position: relative;
			color: white;
			font-size: 25px;
			padding-top: 100px;
			left: -150px;

		}


		.im2 {
			position: relative;
			padding-top: -10px;
			width: 300px;
			left: 100px;
		}

		.im3 {
			position: relative;
			padding-top: 0px;
			width: 300px;
			left: -50px;
		}

		.l2 {
			position: relative;
			color: white;
			font-size: 15px;
			top: -300px;
			left: 700px;
		}

		.l3 {
			position: relative;
			color: white;
			font-size: 15px;
			top: -280px;
			left: 550px;
			width: 700px;
			text-align: justify;
			;
		}

		.l4 {
			position: relative;
			color: white;
			font-size: 15px;
			top: -280px;
			left: 550px;
			width: 700px;
			text-align: justify;

		}

		.ins {
			position: relative;
			color: white;
			font-size: 15px;
			top: 10px;
			left: -200px;
			width: 700px;
			text-align: justify;
		}

		.ins2 {
			position: relative;
			color: white;
			font-size: 15px;
			top: -50px;
			left: 350px;
			width: 700px;
			text-align: justify;
		}

		.t1 {
			position: relative;
			color: white;
			font-size: 15px;
			top: 20px;
			left: -220px;
			text-align: center;
		}
		.t2 {
			position: relative;
			color: white;
			font-size: 15px;
			top: 70px;
			left: -220px;
			text-align: center;
		}

		.table1{
			top: 50px;
		}
		.table2{
			top: 70px;
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
			font-size: 20px;
		}
		.footer {
			width: 100%;

			position: relative;
			padding: 20px 0;
			text-align: center;
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
		<a href="main.html">INICIO</a>
			<a href="#">EQUIPOS Y TORNEOS</a>
			<a href="eventos.php">EVENTOS Y FOTOS</a>
			<a href="#">INICIAR SESIÓN</a>
		<button onclick="toggleFontSize()">AGRANDAR TEXTO</button>
	</div>
	<div class="contenido">

		<div class="titulo">
			<h1> ¡Conoce nuestra liga! </h1>
		</div>
		<img src="fotogente.png" class="im2">
		<div class="l2">
			<h1> Liga de Futbol 5 Madriguera </h1>
		</div>
		<div class="l3">
			<p>Fucho para ciegos Puebla inicia gracias a la iniciativa de Jorge Lanzagorta y Raúl Ortiz de tomar el fútbol
				como un punto de encuentro para el desarrollo de habilidades para la vida de niños, niñas, jóvenes y adultos con
				discapacidad visual en la ciudad de Puebla.
			</p>
		</div>

		<div class="l4">
			<p>Gracias al trabajo realizado durante este tiempo, hemos logrado formar equipos referentes a nivel Nacional e
				Internacional, con el objetivo de compartir el mensaje que nos ha unido y que nos ha permitido obtener
				campeonatos y participaciones en selecciones nacionales; gracias a quienes han confiado en nuestro trabajo y a
				quienes nos han acompañado en cada partido, hemos crecido hasta formar una gran Comunidad, con quien compartimos
				nuestros logros y nuestro sueño de un mundo más equitativo, que permita el desarrollo y la inclusión de personas
				ciegas y débiles visuales a la sociedad.

				Nuestra misión, visión, valores y objetivos se centran en la promoción del deporte, y de los derechos humanos de
				las personas con y sin discapacidad, por lo que hemos logrado obtener diversos premios locales y nacionales,
				buscando promover la inclusión y el respeto por la diversidad.
			</p>

			<div class="titulo2">
				<h1> Sé parte de nuestra liga </h1>
			</div>

			<img src="logo.png" class="im3">

			<a href="https://forms.gle/SWpFcQ4gzcdD2ntaA">
				<div class="ins">
					<h1> Femenil </h1>
				</div>
			</a>
			<a href="https://forms.gle/gEgj7Bu8mNtQp4wNA">
				<div class="ins2">
					<h1> Varonil </h1>
				</div>
			</a>
			<div class="t1">
				<h1> Tabla de estadísticas Femenil </h1>
			</div>
		<table class="table1">
				<thead>
						<tr>
								<th>Posición</th>
								<th>Equipo</th>
								<th>JJ</th>
								<th>PG</th>
								<th>PP</th>
								<th>PE</th>
								<th>PX</th>
								<th>GF</th>
								<th>GC</th>
								<th>DF</th>
								<th>PTS</th>
						</tr>
				</thead>
				<tbody>
					<?php 
					?>
				</tbody>
		</table>
			<div class="t2">
				<h1> Tabla de estadísticas Varonil </h1>
			</div>
		<table class="table2">
				<thead>|
						<tr>
								<th>Posición</th>
								<th>Equipo</th>
								<th>JJ</th>
								<th>PG</th>
								<th>PP</th>
								<th>PE</th>
								<th>PX</th>
								<th>GF</th>
								<th>GC</th>
								<th>DF</th>
								<th>PTS</th>
						</tr>
				</thead>
				<tbody>
					<?php 
					?>
				</tbody>
		</table>
			
			</div>
</body>
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

</html>