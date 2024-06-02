<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style_gal.css">

</head>
<style>
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
</style>
<body>
<button onclick="mostrarPopup()">Subir imagen</button>
    <div class="row">

        <div class="column" id="col0">
        </div>

        <div class="column" id="col1">
        </div>

        <div class="column" id="col2">
        </div>

        <div class="column" id="col3">
        </div>
    </div>

    <?php
    include 'database.php';
    $pdo = Database::connect();
    $sql = "SELECT imagen, descrip FROM reto_galeria
    UNION ALL
    SELECT imagen, header FROM reto_eventos;";
    $stmt = $pdo->query($sql);
    $row_count = $stmt->rowCount();
    $arr = array();
    // print_r($stmt);
    foreach ($stmt as $row) {
        $arr[] = [$row['imagen'], $row['descrip']];
    }
    ?>
    <script>
		function mostrarPopup() {
		// Obtener referencia al popup
		var popup = document.getElementById("miPopup");
		// Mostrar el popup
		popup.style.display = "block";
	}



    console.log('hola, si encontraste esto es pq andas d fisgón');
    const col0 = document.querySelector('#col0');
    const col2 = document.querySelector('#col2');
    const col3 = document.querySelector('#col3');
    const col4 = document.querySelector('#col4');
    
    const arrays = [col0, col1, col2, col3];
    const imagesArray = <?php echo json_encode($arr); ?>;
    imagesArray.forEach((item, i) => {
        var whole = document.createElement('div')
        whole.setAttribute('class', 'todo')
        var container = document.createElement('div');
        container.setAttribute('class', 'img-hover-zoom')
        const imag = document.createElement('img');
        imag.setAttribute('src', 'uploads/' + imagesArray[i][0]);
        imag.setAttribute('width', '100%')
        container.appendChild(imag);

        const desc = document.createElement('div');
        desc.textContent = imagesArray[i][1];
        desc.setAttribute('class', 'description');

        var aca = document.querySelector('#col'+i%4);
        whole.appendChild(container);
        whole.appendChild(desc);
        aca.appendChild(whole);
    });
        </script>
    
<div id="miPopup" class="popup">
<form action="subirgaleria.php" method="post" enctype="multipart/form-data">        
    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" name="imagen" required><br><br>

    <input type="submit" value="Agregar imagen">
</form>

</div>


</body>
</html> 