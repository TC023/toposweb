<?php
require 'database.php';
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Fetch reservations with 'pendiente' status
$pendienteSql = "SELECT fecha_hora FROM reto_reservaciones WHERE estado = 'pendiente'";
$pendienteResult = $pdo->query($pendienteSql);
$pendingReservations = [];
foreach ($pendienteResult as $row) {
    $pendingReservations[] = $row["fecha_hora"];
}

// Fetch reservations with 'ocupado' status
$ocupadoSql = "SELECT fecha_hora FROM reto_reservaciones WHERE estado = 'ocupado'";
$ocupadoResult = $pdo->query($ocupadoSql);
$ocupadoReservations = [];
foreach ($ocupadoResult as $row) {
    $ocupadoReservations[] = $row["fecha_hora"];
}

Database::disconnect();

// Prepare the reservations array
$reservations = [
    'pendiente' => $pendingReservations,
    'ocupado' => $ocupadoReservations
];

// Set the header to application/json
header('Content-Type: application/json');
// Echo the reservations as JSON
echo json_encode($reservations);
?>
