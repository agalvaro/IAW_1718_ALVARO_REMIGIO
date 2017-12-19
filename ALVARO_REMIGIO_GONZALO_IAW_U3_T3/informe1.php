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

    if ($result = $connection->query("SELECT recambios.descripcion FROM recambios natural join icluyen
                                                                                  natural join reparaciones
                                                                                  where reparaciones.IdReparacion=$_GET[clave];"))
                            
        printf("<p>The select query returned %d rows.</p>", $result->num_rows);

    ?>

</html>
