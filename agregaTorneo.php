<?php 
require 'database.php';
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$nombre = $_POST['nombre-torneo'];
$opts = $_POST['options'];

$sqltorn = "SELECT MAX(id_torneo)+1 AS newTorneo FROM reto_torneo;";
$stmt = $pdo->query($sqltorn);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$newTorneo = $result["newTorneo"];

$sql = "INSERT INTO reto_torneo VALUES (?, ?);";
$q = $pdo->prepare($sql);
$q->execute(array($newTorneo, $nombre));


switch (sizeof($opts)) {
    case 8:
        $sql = "INSERT INTO reto_equipopos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], $newTorneo, 1));
        $q->execute(array($opts[1], $newTorneo, 2));
        $q->execute(array($opts[2], $newTorneo, 3));
        $q->execute(array($opts[3], $newTorneo, 4));
        $q->execute(array($opts[4], $newTorneo, 5));
        $q->execute(array($opts[5], $newTorneo, 6));
        $q->execute(array($opts[6], $newTorneo, 7));
        $q->execute(array($opts[7], $newTorneo, 8));

        $sql = "INSERT INTO reto_fasesequipos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], 1, $newTorneo));
        $q->execute(array($opts[1], 1, $newTorneo));
        $q->execute(array($opts[2], 2, $newTorneo));
        $q->execute(array($opts[3], 2, $newTorneo));
        $q->execute(array($opts[4], 3, $newTorneo));
        $q->execute(array($opts[5], 3, $newTorneo));
        $q->execute(array($opts[6], 4, $newTorneo));
        $q->execute(array($opts[7], 4, $newTorneo));

        break;
    case 7:
        $sql = "INSERT INTO reto_equipopos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], $newTorneo, 1));
        $q->execute(array($opts[1], $newTorneo, 2));
        $q->execute(array($opts[2], $newTorneo, 3));
        $q->execute(array($opts[3], $newTorneo, 4));
        $q->execute(array($opts[4], $newTorneo, 5));
        $q->execute(array($opts[5], $newTorneo, 6));
        $q->execute(array($opts[6], $newTorneo, 7));
        $q->execute(array($opts[6], $newTorneo, 12));

        $sql = "INSERT INTO reto_fasesequipos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], 1, $newTorneo));
        $q->execute(array($opts[1], 1, $newTorneo));
        $q->execute(array($opts[2], 2, $newTorneo));
        $q->execute(array($opts[3], 2, $newTorneo));
        $q->execute(array($opts[4], 3, $newTorneo));
        $q->execute(array($opts[5], 3, $newTorneo));
        $q->execute(array($opts[6], 5, $newTorneo));
        break;
    case 6:
        // print_r($opts);
        $sql = "INSERT INTO reto_equipopos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], $newTorneo, 1));
        $q->execute(array($opts[1], $newTorneo, 2));
        $q->execute(array($opts[2], $newTorneo, 3));
        $q->execute(array($opts[2], $newTorneo, 10));

        $q->execute(array($opts[3], $newTorneo, 5));
        $q->execute(array($opts[4], $newTorneo, 6));
        $q->execute(array($opts[5], $newTorneo, 7));
        $q->execute(array($opts[5], $newTorneo, 12));

        $sql = "INSERT INTO reto_fasesequipos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], 1, $newTorneo));
        $q->execute(array($opts[1], 1, $newTorneo));
        $q->execute(array($opts[2], 6, $newTorneo));
        $q->execute(array($opts[3], 3, $newTorneo));
        $q->execute(array($opts[4], 3, $newTorneo));
        $q->execute(array($opts[5], 5, $newTorneo));
        break;
    case 5:
        $sql = "INSERT INTO reto_equipopos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], $newTorneo, 1));
        $q->execute(array($opts[1], $newTorneo, 2));
        $q->execute(array($opts[2], $newTorneo, 3));
        $q->execute(array($opts[2], $newTorneo, 10));
        $q->execute(array($opts[3], $newTorneo, 5));
        $q->execute(array($opts[3], $newTorneo, 11));
        $q->execute(array($opts[4], $newTorneo, 7));
        $q->execute(array($opts[4], $newTorneo, 12));

        $sql = "INSERT INTO reto_fasesequipos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], 1, $newTorneo));
        $q->execute(array($opts[1], 1, $newTorneo));
        $q->execute(array($opts[2], 6, $newTorneo));
        $q->execute(array($opts[3], 5, $newTorneo));
        $q->execute(array($opts[4], 5, $newTorneo));
        break;
    case 4:
        $sql = "INSERT INTO reto_equipopos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], $newTorneo, 1));
        $q->execute(array($opts[0], $newTorneo, 9));
        $q->execute(array($opts[1], $newTorneo, 3));
        $q->execute(array($opts[1], $newTorneo, 10));
        $q->execute(array($opts[2], $newTorneo, 5));
        $q->execute(array($opts[2], $newTorneo, 11));
        $q->execute(array($opts[3], $newTorneo, 7));
        $q->execute(array($opts[3], $newTorneo, 12));

        $sql = "INSERT INTO reto_fasesequipos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], 6, $newTorneo));
        $q->execute(array($opts[1], 6, $newTorneo));
        $q->execute(array($opts[2], 5, $newTorneo));
        $q->execute(array($opts[3], 5, $newTorneo));
        break;
    case 3:
        $sql = "INSERT INTO reto_equipopos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], $newTorneo, 1));
        $q->execute(array($opts[0], $newTorneo, 9));
        $q->execute(array($opts[1], $newTorneo, 3));
        $q->execute(array($opts[1], $newTorneo, 10));
        $q->execute(array($opts[2], $newTorneo, 5));
        $q->execute(array($opts[2], $newTorneo, 11));
        $q->execute(array($opts[2], $newTorneo, 13));

        $sql = "INSERT INTO reto_fasesequipos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], 6, $newTorneo));
        $q->execute(array($opts[1], 6, $newTorneo));
        $q->execute(array($opts[2], 7, $newTorneo));
        break;
    case 2:
        $sql = "INSERT INTO reto_equipopos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], $newTorneo, 1));
        $q->execute(array($opts[0], $newTorneo, 9));
        $q->execute(array($opts[0], $newTorneo, 14));
        $q->execute(array($opts[1], $newTorneo, 5));
        $q->execute(array($opts[1], $newTorneo, 11));
        $q->execute(array($opts[1], $newTorneo, 13));

        $sql = "INSERT INTO reto_fasesequipos values (?, ?, ?);";
        $q = $pdo->prepare($sql);
        $q->execute(array($opts[0], 7, $newTorneo));
        $q->execute(array($opts[1], 7, $newTorneo));
        break;
}

Database::disconnect();
header("Location: diagrama_torneo.php");
