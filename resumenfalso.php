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
    if (!isset($_GET["id"])) : ?>
      <?php
      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "root", "123456789", "tf");

     //TESTING IF THE CONNECTION WAS RIGHT
     if ($connection->connect_errno) {
      printf("Connection failed: %s\n", $connection->connect_error);
    exit();

     ?>

    </body>
</html>
