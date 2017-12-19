<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <script type="text/javascript" src=" "></script>
    </body>
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
        </thead>

        <?php

        while($obj = $result->fetch_object()) {
            //Bucle para rellenar la tabla, añado tambien los td con los iconos
            echo "<tr>";
            echo "<td><a href=".$obj->IdReparacion."</a></td>";
            echo "<td>".$obj->Matricula."</td>";
            echo "<td>".$obj->FechaEntrada."</td>";
            echo "<td>".$obj->Km."</td>";
            echo "<td>".$obj->Averia."</td>";
            echo "<td>".$obj->FechaSalida."</td>";
            echo "<td>".$obj->Reparado."</td>";
            echo "<td>".$obj->Observaciones."</td>";
            echo "</tr>";
        }
        //cerrar la tabla result
        $result->close();
        unset($obj);
        unset($connection);
        echo "</table>";
    }

        ?>
</html>
