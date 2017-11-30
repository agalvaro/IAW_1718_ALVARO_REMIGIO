<!DOCTYPE html>
<html lang="">
  <head>
    <!-- Calcular numero mayor de vector indexado -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <?php
      $v1=[1,2,3,6,5,4,10];
      $num=$v1[0];

      for ($i=0; $i <sizeof($v1) ; $i++) {
        if ($num<$v1[$i]) {
          $num=$v1[$i];
        }
      }
      echo "El numero mayor es $num";

      ?>
      <script type="text/javascript" src=" "></script>
    </body>
</html>
