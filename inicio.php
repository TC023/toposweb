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
            background-image: url(topos.jpg);
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
            right: 40px;
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

        .ini {
            color: white;
            position: relative;
            top: 10px;
            text-align: center;
        }

        .ad {
            width: 170px;
        }

        .cuadro {
            width: 300px;
            height: 30px; 
            font-size: 18px; 
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px; 
        }
        
        .s1{
            position:relative;
            top: 20px;
            width: 100px;
            height: 40px;
            font-size: 16px;
            margin-top: 20px;
            margin: 0 auto;
            background-color: #000000;
            color: white;
            font-size: 16px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
        <a href="inicio.php">INICIAR SESIÓN</a>
        <button onclick="toggleFontSize()">AGRANDAR TEXTO</button>
    </div>

    <div class="contenido">
    <div class="ini">
    <form action="testgrid.php" method="POST">
        <img class="ad" src="admin.png" alt="Logo">
        
        <h2>Nombre</h2>
        <input class="cuadro" type="text" name="nombre">
        
        <h2>Contraseña</h2>
        <input class="cuadro" type="password" name="contrasena">
        
        <br>
        <button class="s1" type="submit">INGRESAR</button>
    </form>
    </div>
        </div>
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