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
      <form action="cochesviejales2.php" method="post">
        <fieldset>
          <span>KM: </span><input type="text" name="nombre" required><br>
          <p><input type="submit" value="Buscar"></p>
        </fieldset>
      </form>
      <?php

            $connection = new mysqli('localhost', 'root', 'Admin2015', 'tf', 3316);

            $connection->set_charset("utf8");


            if ($connection->connect_errno) {
                printf("Connection failed: %s\n", $connection->connect_error);
                exit();
            }
            $query="SELECT ;";

            if ($result = $connection->query($query)){
          }
      ?>
    </body>
</html>
