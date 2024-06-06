<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'database.php';
	$pdo = Database::connect();
    // Get the JavaScript variable sent via AJAX
    $liga = $_POST['liga'];
    // echo $liga;
    $sql = "SELECT * FROM reto_equipos WHERE liga = ".$liga.";";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
}
?>
