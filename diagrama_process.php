<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'database.php';
	$pdo = Database::connect();
    // Get the JavaScript variable sent via AJAX
    $id = $_POST['id'];
    $torneo = $_POST['torneo'];
    $sql = "SELECT 
     r1.nombre AS equipo1,
    r2.nombre AS equipo2,
    r1.id_equipo AS id_e1,
    r2.id_equipo AS id_e2,
    t1.numPartido,
    tr.nombre AS nombre_torneo
    FROM 
        reto_fasesequipos t1
    JOIN 
        reto_fasesequipos t2
    ON
        t1.numPartido = t2.numPartido
        AND t1.id_torneo = t2.id_torneo
        AND t1.id_equipo < t2.id_equipo
    JOIN 
        reto_equipos r1
    ON 
        t1.id_equipo = r1.id_equipo
    JOIN 
        reto_equipos r2
    ON 
        t2.id_equipo = r2.id_equipo
    JOIN
        reto_torneo tr
    ON
    t1.id_torneo = tr.id_torneo
    WHERE t1.numPartido = ".$id."
    AND t1.id_torneo = ".$torneo.";
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result[0]);
}
?>
