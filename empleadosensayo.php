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

      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "root", "Admin2015", "tf",3316);

      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
      $query="SELECT *from empleados";


      if($result = $connection->query($query)) {

          echo "<table>";
          echo "<tr><th>CodEmpleado</th>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>CP</th>
                    <th>FechaAlta</th>
                    <th>Categoria</th></tr>";

          while ($obj = $result->fetch_object()) {
            echo "<tr>";
            echo "<td><a href='intervienen.php?cod=".$obj->CodEmpleado.
            "'>".$obj->CodEmpleado."</a></td>";
            echo "<td>".$obj->DNI."</td>";
            echo "<td>".$obj->Nombre."</td>";
            echo "<td>".$obj->Apellidos."</td>";
            echo "<td>".$obj->Direccion."</td>";
            echo "<td>".$obj->Telefono."</td>";
            echo "<td>".$obj->CP."</td>";
            echo "<td>".$obj->FechaAlta."</td>";
            echo "<td>".$obj->Categoria."</td>";
            echo "</tr>";
          }

          echo "</table>";
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);

      } else {
        echo "Imposible recuperar los datos";
      }

      ?>

    </body>
</html>
