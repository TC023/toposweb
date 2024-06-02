<!DOCTYPE html>
<html lang="es">
    <head>
        <title>NO SÉ Q HAGO AYUDA LMAO</title>
    </head>
    <body>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Torneo de 8 Equipos</title>
                <link rel="stylesheet" href="styles.css">
            </head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }
                
                .bracket {
                    display: flex;
                    justify-content: space-around;
                    padding: 20px;
                }
                
                .round {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
    margin: 0 10px;
}

.matchup {
    margin: 20px 0;
}

.team {
    background-color: #f0f0f0;
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc;
    margin: 5px 0;
    width: 150px;
}

</style>
<body>
    <?php
        require 'database.php'; 
        
        $pdo = Database::connect();
        
        $sql = "SELECT * FROM reto_torneo";
        foreach ($pdo->query($sql) as $row) {
            echo $row["nombre"];
            $sql2 = "SELECT * FROM reto_partidos_torneo WHERE id_partido = ".$row["id_torneo"];
            echo'
            <div class="bracket">
                <div class="round round-1">
        <div class="matchup">
        <div class="team">Equipo 1</div>
        <div class="team">Equipo 2</div>
        </div>
                <div class="matchup">
                <div class="team">Equipo 3</div>
                <div class="team">Equipo 4</div>
                </div>
                <div class="matchup">
                <div class="team">Equipo 5</div>
                <div class="team">Equipo 6</div>
                </div>
                <div class="matchup">
                <div class="team">Equipo 7</div>
                <div class="team">Equipo 8</div>
                </div>
                </div>
                <div class="round round-2">
                <div class="matchup">
                <div class="team">Ganador 1</div>
                <div class="team">Ganador 2</div>
                </div>
                <div class="matchup">
                <div class="team">Ganador 3</div>
                <div class="team">Ganador 4</div>
                </div>
                </div>
                <div class="round final">
                <div class="matchup">
                <div class="team">Ganador Semifinal 1</div>
                <div class="team">Ganador Semifinal 2</div>
                </div>
                </div>
                <div class="campeao">
                <div class="mathcup">
                    <div class="team"> OMG GANÓ </div>
                    </div>
                    </div>
            </div>';
        }
            ?>
</body>
</html>



</body>
</html>