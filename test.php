<?php
require 'database.php';
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Fetch reservations with 'pendiente' status
$sql = "SELECT fecha_hora FROM reto_reservaciones WHERE estado = 'pendiente'";
$result = $pdo->query($sql);

// Array to hold the timestamps of pending reservations
$pendingReservations = [];
foreach ($result as $row) {
    $pendingReservations[] = $row["fecha_hora"];
}

Database::disconnect();
// Make sure to set the header to application/json to inform the client that the response is JSON
header('Content-Type: application/json');
echo json_encode($pendingReservations);
?>
