<?php
require 'database.php';

// Retrieving the id from adminHours.js sent with POST method
$id = 0;
$id = $_POST['id'] ?? '';
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Fetch hours from reservations
$sql = "SELECT fechas_seleccionadas FROM reto_horas WHERE id_reserva = ${id}";
$hoursresult = $pdo->query($sql);
$hours = [];
foreach ($hoursresult as $row) {
    $hours[] = $row["fechas_seleccionadas"];
}

Database::disconnect();

// Prepare the reservations array
$hoursdated = [
    'hoursdate' => $hours
];

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($hoursdated);
?>
