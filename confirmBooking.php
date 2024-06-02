<?php
require 'database.php';

// Retrieving the id from adminHours.js sent with POST method
$id = 0;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}

$pdo = Database::connect();

// Use prepared statements to prevent SQL injection
$stmt = $pdo->prepare("UPDATE reto_reservaciones SET estado = 2 WHERE id_reserva = ?");
$stmt->execute(array($id));
Database::disconnect();
// Return a JSON response indicating success (adjust as needed)
// echo json_encode(['message' => 'Booking deleted successfully']);
// Go back to main
header("Location: main.php");
?>