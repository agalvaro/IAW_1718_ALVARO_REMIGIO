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

      <?php

            $connection = new mysqli('localhost', 'root', 'Admin2015', 'tf', 3316);

            $connection->set_charset("utf8");


            if ($connection->connect_errno) {
                printf("Connection failed: %s\n", $connection->connect_error);
                exit();
            }

            $query="SELECT * from reparaciones";

            if ($result = $connection->query($query)) {

              printf("<p>The select query returned %d rows.</p>", $result->num_rows);

              ?>

              <table style="border:1px solid black">
                <thead>
                  <tr>
                    <th>Id reparacion</th>
                    <th>Matricula</th>
                    <th>Fecha entrada</th>
                    <th>Km</th>
                    <th>Avería</th>
                    <th>Fecha Salida</th>
                    <th>Reparado</th>
                    <th>Observaciones</th>
                  </thead>
              <?php



                  while($obj = $result->fetch_object()) {

                    echo "<tr>";
                    echo "<td><a href=resumenfalso.php?id=".$obj->IdReparacion.">$obj->IdReparacion</td>";
                    echo "<td>".$obj->Matricula."</td>";
                    echo "<td>".$obj->FechaEntrada."</td>";
                    echo "<td>".$obj->Km."</td>";
                    echo "<td>".$obj->Averia."</td>";
                    echo "<td>".$obj->FechaSalida."</td>";
                    echo "<td>".$obj->Reparado."</td>";
                    echo "<td>".$obj->Observaciones."</td>";
                    echo "</tr>";


                  }
                  $result->close();
                  unset($obj);
                  unset($connection);
                }

          ?>

    </body>
</html>
