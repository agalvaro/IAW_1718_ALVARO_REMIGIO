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

        if (empty($_GET)) {
          echo "No tengo el recambio";
          exit();
        }

        //CREATING THE CONNECTION
        $connection = new mysqli("localhost", "root", "Admin2015", "tf",3316);
        $connection->set_charset("uft8");

        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $reparacion = $_GET['id'];

        $query = "SELECT IdRecambio
                  FROM recambios NATURAL JOIN incluyen
                  NATURAL JOIN reparaciones
                  WHERE Descripcion = $reparacion";

        if ($result= $connection->query($query)) {

            if ($result->num_rows==0) {
              ;
            } else {
              echo "No se puede borrar el recambio ya que se ha utilizado";
            }
        } else {
          "No se han podido recuperar los recambios";
        }

      ?>

    </body>
</html>
