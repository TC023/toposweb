<?php
require 'database.php';

// Retrieving the id from adminHours.js sent with POST method
$id = $_POST['id'] ?? '';

$pdo = Database::connect();

// Use prepared statements to prevent SQL injection
$stmt = $pdo->prepare("SELECT nombre, num, correo FROM reto_reservaciones WHERE id_reserva = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

Database::disconnect();

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($row);
?>
