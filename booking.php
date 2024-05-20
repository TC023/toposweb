<?php
	require 'database.php';

	if ( !empty($_POST)) {

		$nombre = $_POST['name'];
		$telefono = $_POST['phone'];
		$correo = $_POST['email'];
		$state = 1;

		// Insert user information
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO reto_reservaciones values (NULL, ?, ?, ?, ?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($nombre, $telefono, $correo, $state));

			// Retrieve the last inserted ID (primary key)
			$lastInsertId = $pdo->lastInsertId();

			// Insert selected hours into reto_horas table
			if (isset($_POST['timestamp'])) {
				foreach ($_POST['timestamp'] as $key => $timestamp) {
					$sql = "INSERT INTO reto_horas (id_reserva, fechas_seleccionadas) VALUES (?, ?)";
					$q = $pdo->prepare($sql);
					$q->execute(array($lastInsertId, $timestamp));
				}
			}

			Database::disconnect();
	}
?>
