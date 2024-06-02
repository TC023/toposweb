<?php
    require 'database.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta     charset="utf-8">
        <link   href=    "css/bootstrap.min.css" rel="stylesheet">
        <script src=    "js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="span10 offset1">
                <div class="row">
                       <h3>Agregar un admin nuevo</h3>
                   </div>

                    <form class="form-horizontal" action="create2.php" method="post">

                        <div class="control-group">
                            <label class="control-label">Nombre</label>
                            <div class="controls">
                              <input name="nombre" type="text"  placeholder="Nombre" value="">
                                    <span class="help-inline"></span>
                            </div>
                        </div>

						<div class="control-group">
                            <label class="control-label">Correo</label>
                            <div class="controls">
                              <input name="correo" type="text"  placeholder="Correo" value="">
                                    <span class="help-inline"></span>
                            </div>
                        </div>

						<div class="control-group">
                            <label class="control-label">Telefono</label>
                            <div class="controls">
                              <input name="telefono" type="text"  placeholder="Teléfono" value="">
                                    <span class="help-inline"></span>
                            </div>
                        </div>

						<div class="control-group">
                            <label class="control-label">Contraseña</label>
                            <div class="controls">
                              <input name="contraseña" type="text"  placeholder="Contraseña" value="">
                                    <span class="help-inline"></span>
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Agregar</button>
                            <a class="btn" href="index.php">Regresar</a>
                        </div>

                    </form>
                </div>
        </div> <!-- /container -->
    </body>
</html>
