<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'database.php';
	$pdo = Database::connect();
    $torneo = $_POST['torneo'];

    $sql = "DELETE FROM reto_fasesequipos WHERE numPartido > 4 AND id_torneo = ".$torneo.";";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    $sql = "DELETE from reto_equipopos where posicion > 8 AND id_torneo = ".$torneo.";";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $sql = "DELETE from reto_partido_torneo where id_torneo = ".$torneo.";";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
