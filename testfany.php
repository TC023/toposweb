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

		.contenido {
			margin-top: 100px;
			padding-top: 10px;
			height: calc(100vh - 100px);
			overflow-y: auto;
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
</body>

</html>