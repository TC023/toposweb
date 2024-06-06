<?php
require 'database.php';

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$torneo = $_POST['torneo'];
$partido = $_POST['partido'];
$goles1 = $_POST['goles-equipo1'];
$goles2 = $_POST['goles-equipo2'];
$equipo1 = $_POST['equipo1'];
$equipo2 = $_POST['equipo2'];

if ($goles1 > $goles2) {
    $ganador = $equipo1;
}else {
    $ganador = $equipo2;
}

switch ($partido) {
    case 1:
        $posi = 9;
        $goesto = 6;
        break;
    case 2:
        $posi = 10;
        $goesto = 6;
        break;
    case 3:
        $posi = 11;
        $goesto = 5;
        break;
    case 4:
        $posi = 12;
        $goesto = 5;
        break;
    case 5:
        $posi = 13;
        $goesto = 7;
        break;
    case 6:
        $posi = 14;
        $goesto = 7;
        break;    
    case 7:
        $posi = 15;
        $goesto = 8;
        break;
    default:
        // Handle cases where $partido does not match any case
        $posi = null;
        $goesto = null;
        break;
}


$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO reto_equipopos values (?, ?, ?)";
$q = $pdo->prepare($sql);
$q->execute(array($ganador, $torneo, $posi));

$sql = "INSERT INTO reto_fasesequipos values (?, ?, ?)";
$q = $pdo->prepare($sql);
$q->execute(array($ganador, $goesto, $torneo));

$sql = "INSERT INTO reto_partido_torneo values (NULL, ?, ?, ?, ?)";
$q = $pdo->prepare($sql);
$q->execute(array($torneo, $equipo1, $fecha." ".$hora.":00", $goles1));


$sql = "INSERT INTO reto_partido_torneo values (NULL, ?, ?, ?, ?)";
$q = $pdo->prepare($sql);
$q->execute(array($torneo, $equipo2, $fecha." ".$hora.":00", $goles1));


Database::disconnect();
header("Location: diagrama_torneo.php");


?>