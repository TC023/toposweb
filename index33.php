<!DOCTYPE html>

<html lang="en">
    <head>
        <meta     charset="utf-8">
        <link   href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">

            <div class="row">
                <h3>Ejemplo de operaciones básicas a una tabla de administradores</h3>
            </div>

                <div class="row">
                    <p>
                        <a href="create.php" class="btn btn-success">Agregar un Administradores</a>
                    </p>

                    <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nombre    </th>
                        <th>Correo    </th>
                      <th>Teléfono</th>
                            <th>Contraseña</th>
                    </tr>
                </thead>
                <tbody>
                      <?php
                        include 'database.php';
                        $pdo = Database::connect();
                        $sql = 'SELECT * FROM reto_admins ORDER BY id_admin';
                        foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td> '. $row['nombre'] .'</td>';
                            echo '<td>'. $row['correo'] . ' </td>';
                            echo '<td>'. $row['telefono'] . ' </td>';
                            echo '<td>'. $row['contraseña'] . ' </td>';
                            echo '<td width=250>';
                            echo '<a class="btn" href="read.php?id='.$row['id_admin'].'">Detalles</a>';
                            echo '&nbsp;';
                            echo '<a class="btn btn-danger" href="delete2.php?id='.$row['id_admin'].'">Eliminar</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                                       Database::disconnect();
                                  ?>
                        </tbody>
              </table>

            </div>

        </div> <!-- /container -->
    </body>
</html>