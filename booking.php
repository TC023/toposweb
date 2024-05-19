<?php
	require 'database.php';

	if ( !empty($_POST)) {

		$nombre = $_POST['name'];
		$telefono = $_POST['phone'];
		$correo = $_POST['email'];
		$state = 1;

		// insert data
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO reto_reservaciones values (NULL, ?, ?, ?, ?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($nombre, $telefono, $correo, $state));
			Database::disconnect();
	}
?>
