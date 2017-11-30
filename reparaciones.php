<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TABLA DE REPARACIONES</title>
    </head>
    <body>
        <?php

        $connection = new mysqli("localhost", "root", "Admin2015", "tf",3316);

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        if ($result = $connection->query("SELECT * FROM reparaciones;")) {

            printf("<p>The select query returned %d rows.</p>", $result->num_rows);

        ?>

        <table style="border:1px solid black">
            <thead>
                <tr>
                    <th>IdReparacion</th>
                    <th>Matricula</th>
                    <th>FechaEntrada</th>
                    <th>KM</th>
                    <th>Avería</th>
                    <th>FechaSalida</th>
                    <th>Reparado</th>
                    <th>Observaciones</th>
                    <th>Asignar</th>
                    <th>Borrar</th>
                    <th>Empleados</th>
                    <th>Piezas</th>
            </thead>

            <?php

            while($obj = $result->fetch_object()) {
                //Bucle para rellenar la tabla, añado tambien los td con los iconos
                echo "<tr>";
                echo "<td>".$obj->IdReparacion."</td>";
                echo "<td>".$obj->Matricula."</td>";
                echo "<td>".$obj->FechaEntrada."</td>";
                echo "<td>".$obj->Km."</td>";
                echo "<td>".$obj->Averia."</td>";
                echo "<td>".$obj->FechaSalida."</td>";
                echo "<td>".$obj->Reparado."</td>";
                echo "<td>".$obj->Observaciones."</td>";
                echo "<td>
                    <a href='asignar.php?id=$obj->IdReparacion'>
                      <img src='agregar.jpg' width='30px' align=center;/>
                    </a></td>";
                echo "<td>
                    <a href='borrar.php?id=$obj->IdReparacion'>
                      <img src='borrar.png' width='30px' align=center;/>
                    </a></td>";
                echo "<td>
                    <a href='mostrar_empleados.php?id=$obj->IdReparacion'>
                      <img src='empleado.jpg' width='30px' align=center;/>
                    </a></td>";
                echo "<td>
                    <a href='mostrar_piezas.php?id=$obj->IdReparacion'>
                      <img src='piezas.png' width='30px' align=center;/>
                    </a></td>";
                echo "</tr>";
            }
            //cerrar la tabla result
            $result->close();
            unset($obj);
            unset($connection);
            echo "</table>";
        }

            ?>
            </body>
        </html>
