<?php
	require 'database.php';

	if ( !empty($_POST)) {

		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$contraseña = $_POST['telefono'];
    	$telefono = $_POST['contraseña'];

		// insert data
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO reto_admins values (NULL, ?, ?, ?, ?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($nombre, $correo, $telefono, $contraseña));
			Database::disconnect();
			header("Location: index.php");
	}
?>
