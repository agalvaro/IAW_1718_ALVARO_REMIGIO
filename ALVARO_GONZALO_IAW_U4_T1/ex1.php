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
      //Declaramos var con valor 8
      $var=8;
      //Mostramos su valor
      echo "Value is now ".$var.".";
      //Añadimos un salto de línea
      echo "<br>";

      //Tomamos el valor anterior de var y le sumamos 2 declarandola de nuevo
      $var=$var+2;
      //Mostramos su valor
      echo "Add 2. Value is now ".$var.".";
      //Añadimos un salto de línea
      echo "<br>";

      //Tomamos el valor anterior de var y le restamos 4 declarandola de nuevo
      $var=$var-4;
      echo "Subtract 4. Value is now ".$var.".";
      echo "<br>";

      //Tomamos el valor anterior de var y lo multiplicamos por 5 declarandola de nuevo
      $var=$var*5;
      echo "Multiply by 5. Value is now ".$var.".";
      echo "<br>";

      //Tomamos el valor anterior de var y lo dividimos entre 3 declarandola de nuevo
      $var=$var/3;
      echo "Divide by 3. Value is now ".$var.".";
      echo "<br>";

      //Tomamos el valor anterior de var incrementandolo en 1 declarandola de nuevo
      $var=$var+1;
      echo "Increment value by one. Value is now ".$var.".";
      echo "<br>";

      //Tomamos el valor anterior de var y lo disminuimos en 1 declarandola de nuevo
      $var=$var-1;
      echo "Decrement value by one. Value is now ".$var.".";
      
      ?>
    </body>
</html>
