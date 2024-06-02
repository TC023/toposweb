<?php
	require 'database.php'; 
	
	$pdo = Database::connect();
  // query for getting the id to manage the booking
	$sql = 'SELECT * FROM reto_reservaciones WHERE id_reserva = 1';
$result = $pdo->query($sql);
if ($result) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
} else {
    $row = null; 
}
Database::disconnect();
?>